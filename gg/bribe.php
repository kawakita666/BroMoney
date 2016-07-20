<?php
session_start();
include_once "includes/db_connect.php";
include_once "includes/functions.php";
include_once "includes/jail_check.php";
include_once"probe.php";
logincheck();
$page="bribe.php";
script_check($page);
echo "$style";
$username=$_SESSION['username'];
$fetch=mysql_fetch_object(mysql_query("SELECT * FROM users WHERE username='$username'"));
$fetch_info=mysql_fetch_object(mysql_query("SELECT * FROM user_info WHERE username='$username'"));

if ($fetch_info->last_bribe > time()){
echo "You have to wait ".maketime($fetch_info->last_bribe)."";
exit();
}
if ($fetch_info->jail_able == "1"){
echo "Your recent Bribery attempt is still in action!";
exit();
}

$now=time() + rand(1000, 3600);
if(strip_tags($_POST['bribe_button']) && strip_tags($_POST['bribe_hours'])){

$bribe_hours=intval(strip_tags($_POST['bribe_hours']));
$bribe_pay=$bribe_hours * 10000;	

	if ($bribe_hours == 0 || !$bribe_hours || ereg('[^0-9]',$bribe_hours)){
	print "Invalid amount of hours.";
	
}elseif ($bribe_hours != 0 || $bribe_hours || !ereg('[^0-9]',$bribe_hours)){
if ($bribe_hours > "10"){
echo "You cannot bribe the police for longer than 10 hours!";
}elseif($bribe_hours <= "10"){
if ($bribe_pay > $fetch->money){
echo "You dont have this much money!";
}elseif ($bribe_pay <= $fetch->money){


$loose=rand(0,1);
if ($loose == "1"){ echo "The officer was furious, as you tried to take advantage of him.";
$reason="Attempted bribery";


$jail_time = rand(60, 200);
mysql_query("UPDATE user_info SET last_bribe='$now' WHERE username='$username'");

mysql_query("INSERT INTO `jail` ( `id` , `username` , `location` , `time_left` , `reason` , `bust_able` ) 
VALUES (
'', '$username', '$fetch->location', '$jail_time', 'Attempted Bribary', '1'
)");


}elseif ($loose == "0"){
echo "Well done, the officer took the money and was hapy to let you carry on with your criminal activites for $bribe_hours hours!";
$new_money=$fetch->money - $bribe_pay;
$new_rank=$fetch->rankpoints + rand(5,20);
$time_till=time() + ($bribe_hours * 3600);
mysql_query("UPDATE users SET money='$new_money', rankpoints='$new_rank' WHERE username='$username'");
mysql_query("UPDATE user_info SET last_bribe='$now', jail_able='1', jail_untill='$time_till' WHERE username='$username'");

}}}}}
?>

<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
 <form action="" method="POST">
<body>
<table width="53%" border="1" align="center" cellpadding="2" cellspacing="0" class=thinline bordercolor=black>
  <tr> 
    <td background="includes/grad.jpg"><center class=bold>
        Bribery 
      </center></td>
  </tr>

  <tr>
    <td><table width="100%" border="0" cellspacing="3" cellpadding="0">
        <tr> 
          <td height="55" colspan="2"><div align="center"><img src="images/cash.gif" width="190" height="140"></div></td>
        </tr>
        <tr>
          <td height="19" colspan="2"><div align="center">Here you can bribe the 
              police to ignore your criminal activitys, but of course its not 
              easy come easy go.. It takes alot of skill &amp; cash to get the 
              police officer to ignore you. Your probabally thinking what can i 
              loose? Seems easy enough. Well if you are thinking that  then im afraid there is quite a harsh consequence
	which is of course, getting put in jail unbreakable anything from 1 minute to 3, So watch out.
It costs £10,000 per hour.

</div></td>
        </tr>
        <tr> 
          <td width="47%">Hours to ignore:</td>
          <td width="53%"><input name="bribe_hours" type="text" id="ignore"></td>
        </tr>
        
        <tr> 
          <td colspan="2"><div align="center"> 
              <input type="submit" name="bribe_button" value="Submit">
            </div></td>
        </tr>
      </table></td>
  </tr>
</table></form>
</body>
</html>
<br>
<? include_once"includes/footer.php"; ?>
