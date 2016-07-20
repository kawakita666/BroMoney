<?php
session_start();
include "includes/db_connect.php";
include "includes/functions.php";
include "includes/smile.php";
logincheck();
$username=$_SESSION['username'];
$viewcrew=$_GET['viewcrew'];

$fetch=mysql_fetch_object(mysql_query("SELECT * FROM crews WHERE name='$viewcrew'"));
echo "$style";
?>

<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="includes/in.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {color: #000000}
-->
</style>
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
<table width="792" border="1" align="center" cellpadding="1" cellspacing="3" bordercolor=#333333>
  <!--DWLayoutTable-->
  <tr >
    <td height="20" colspan="2" class=header><div align="center">Crew Profile for <?php echo "$fetch->name"; ?></div></td>
  </tr>
  <tr bgcolor=#000000>
    <td height="159" colspan="2" valign="top"><div align="center"><img src=<?php echo "$fetch->picture"; ?>></div>
      </div></td>
  </tr>
  <tr bgcolor=white>
    <td width="391" height="31" valign="top" bgcolor="#000000">Crew ID: </td>
    <td width="391" valign="top" bgcolor="#000000"><?php echo "$fetch->id"; ?></td>
  </tr>
  <tr bgcolor=white>
    <td height="31" valign="top" bgcolor="#000000">Crew Name: </td>
    <td valign="top" bgcolor="#000000">      <?php echo "$fetch->name"; ?></td>
  </tr>
  <tr bgcolor=white>
    <td height="31" valign="top" bgcolor="#000000">Status:</td>
    <td valign="top" bgcolor="#000000">
      <?php if ($fetch->recruiting == "1"){ echo "Recruiting"; }else{ echo "Not recruiting"; } ?></td>
  </tr>
  <tr bgcolor=white>
    <td height="31" valign="top" bgcolor="#000000">Boss:</td>
    <td valign="top" bgcolor="#000000"><?php echo "<a href='profile.php?viewuser=$fetch->owner'>$fetch->owner</a>"; ?>    </td>
  </tr>
  <tr bgcolor=white>
    <td height="31" valign="top" bgcolor="#000000">RHM:</td>
    <td valign="top" bgcolor="#000000"><?php echo "<a href='profile.php?viewuser=$fetch->rhm'>$fetch->rhm</a>"; ?></td>
  </tr>
  <tr bgcolor=white>
    <td height="31" valign="top" bgcolor="#000000">Crew Members </td>
    <td valign="top" bgcolor="#000000"><?
	$people = mysql_query("SELECT * FROM users WHERE crew='$fetch->name'");
	while($i =mysql_fetch_object($people)){
	if ($i->online <= time()){
		echo "<a href='profile.php?viewuser=$i->username'>$i->username</a>, ";
}else

	if ($i->online >= time()){
	echo "<font color=red><a href='profile.php?viewuser=$i->username'>$i->username</a></font>, ";
	}
	}

	?>    </td>
  </tr>
  <tr bgcolor=#000000>
    <td height="23" colspan="2" valign="top"><div align="center" class="style1">Quote</div></td>
  </tr>
  <tr bgcolor=#000000>
    <td height="34" colspan="2" valign="top"><?php if (!$fetch->quote){ echo "No Quote"; }else{ echo "".($fetch->quote).""; } ?></td>
  </tr>
</table>
</body>
</html>