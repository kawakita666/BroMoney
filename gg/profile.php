<?php
session_start();
include "includes/db_connect.php";
include "includes/functions.php";
include"includes/smile.php";
logincheck();
$username=$_SESSION['username'];
$viewuser=$_GET['viewuser'];

$fetch=mysql_fetch_object(mysql_query("SELECT * FROM users WHERE username='$viewuser'"));
if (!$fetch){
echo "No such user";
exit();
}


?>
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="includes/in.css" rel="stylesheet" type="text/css">
</head>
<embed src="<?php echo "".addslashes($fetch->music).""; ?>" width=0 height=0 play=true loop=true quality=high>
</embed>
<body>
<?php $donater=mysql_num_rows(mysql_query("SELECT * FROM donaters WHERE username='$viewuser'"));
if ($donater != "0"){
echo "
<a href=donate.php><img src=\"images/donater.gif\" border=0 style=\"position: absolute; top: 10px; right: 30px; filter:alpha(Opacity=90);\"></a>
";
}
?>
<table width="72%" border="1" align="center" cellpadding="5" cellspacing="3" bordercolor=#000000>
  <tr >
    <td colspan="2" background="includes/grad.jpg" class=header><div align="center">User information for <?php echo "$viewuser"; ?></div></td>
  </tr>
  <tr>
    <td width="50%" bgcolor="#000000">Username:</td>
    <td width="50%" bgcolor="#000000"><?php echo "<a href='send.php?fromper=$viewuser'>$viewuser</a>"; ?>
      | <a href="?friend=1&viewuser=<?php echo "$viewuser"; ?>">Add to your friends
      list</a> | <a href="?block=1&viewuser=<?php echo "$viewuser"; ?>">Block
      </a></td>
  </tr>
  <tr>
    <td bgcolor="#000000">Status:</td>
    <td bgcolor="#000000">
      <?php
$time_min=time() - (60 * 1);
$time_five=time() - (60 * 5);
$time_day=time() - (3600 * 24);
$time_week=time() - (3600 * 24 * 7);

if ($fetch->online > $time_min){
$state="Active";
}elseif ($fetch->online > $time_five){
$state="Busy";
}elseif ($fetch->online > $time_day){
$state="Offline day or less";
}elseif ($fetch->online > $time_week){
$state="Inactive";
}

           echo "$fetch->status ($state - $fetch->choice)"; ?>
    </td>
  </tr>
  <tr>
    <td bgcolor="#000000">Wealth:</td>
    <td bgcolor="#000000">
      <?php
		if ($fetch->money >= "0" && $fetch->money < "10000"){ $wealth = "Welfare Applicant"; }
		elseif ($fetch->money >= "10000" && $fetch->money < "100000"){ $wealth = "Enough To Live"; }
		elseif ($fetch->money >= "100000" && $fetch->money < "900000"){ $wealth = "Middle Class"; }
		elseif ($fetch->money >= "900000" && $fetch->money < "2000000"){ $wealth = "Rich"; }
		elseif ($fetch->money >= "2000000" && $fetch->money < "5000000"){ $wealth = "Millionare"; }
		elseif ($fetch->money >= "5000000" && $fetch->money < "9000000"){ $wealth = "Very Rich"; }
		elseif ($fetch->money >= "9000000" && $fetch->money < "20000000"){ $wealth = "Respectably Wealthy"; }
		elseif ($fetch->money >= "20000000" && $fetch->money < "50000000"){ $wealth = "Extremely Wealthy"; }
		elseif ($fetch->money >= "50000000" && $fetch->money < "200000000"){ $wealth = "Swims in Money"; }
                elseif ($fetch->money >= "200000000" && $fetch->money < "500000000"){ $wealth = "Drowning in Money"; }
                elseif ($fetch->money >= "500000000" && $fetch->money < "1000000000"){ $wealth = "Burns money for heat"; }
		elseif ($fetch->money >= "1000000000"){ $wealth = "Billionaire"; }
echo "$wealth";
?>
    </td>
  </tr>
  <tr>
    <td bgcolor="#000000">Rank:</td>
    <td bgcolor="#000000"><?php echo "$fetch->rank"; ?> </td>
  </tr>
  <tr>
    <td bgcolor="#000000">Crew:</td>
    <td bgcolor="#000000">
      <?php if ($fetch->crew == "0"){ echo "None"; }else{ echo "$fetch->crew"; } ?>
    </td>
  </tr>
  <tr>
    <td bgcolor="#000000">Starting date:</td>
    <td bgcolor="#000000"><?php echo "$fetch->regged";  ?> </td>
  </tr>
  <tr bgcolor="#000000">
    <td colspan="2"><center>
<?php
  $userString = " ".$fetch->quote;
  $codes = array('{img}','{center}', '{b}', '{i}', '{u}', '{move}', '{/img}','{/center}', '{/b}', '{/i}', '{/u}', '{/move}');
  for ($n=0; $n<6; $n++){
    $subStringBegin = strpos($userString, $codes[$n]);
    $subStringEnd = strpos($userString, $codes[$n+6]);
    if($subStringBegin && $subStringEnd) {
      $subStringBegin=$subStringBegin+strlen($codes[$n]);
      $subString = substr($userString, $subStringBegin, $subStringEnd-$subStringBegin);
      if($n==0)
        $userString = str_replace("{img}$subString{/img}", "<img src='$subString'>", $userString);
      if($n==1)
        $userString = str_replace("{center}$subString{/center}", "<center>$subString</center>", $userString);
      if($n==2)
        $userString = str_replace("{b}$subString{/b}", "<b>$subString</b>", $userString);
      if($n==3)
        $userString = str_replace("{i}$subString{/i}", "<i>$subString</i>", $userString);
      if($n==4)
        $userString = str_replace("{u}$subString{/u}", "<u>$subString</u>", $userString);
      if($n==5)
        $userString = str_replace("{move}$subString{/move}", "<marquee>$subString</marquee>", $userString);
    }
  }
  echo $userString;
?></center></td>
  </tr>
  <tr bgcolor="#000000">
    <td colspan="2"><img src=<?php echo "$fetch->image"; ?> width="650" height="770"></td>
  </tr>
</table>
</body>
</html>