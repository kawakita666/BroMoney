<?php
session_start();
include_once "includes/db_connect.php";
include_once "includes/functions.php";
include_once"casinoCP.php";
logincheck();
$username=$_SESSION['username'];
$fetch=mysql_fetch_object(mysql_query("SELECT * FROM users WHERE username='$username'"));

if (strip_tags($_POST['buy_button']) && strip_tags($_POST['buy_item'])){
$buy_item=strip_tags($_POST['buy_item']);
if ($buy_item == "1" || $buy_item == "2" || $buy_item == "3" || $buy_item == "4"){
if ($buy_item == "1"){
$cost="2";
$num="1";
}elseif ($buy_item == "2"){
$cost="10";
$num="2";
}elseif ($buy_item == "3"){
$cost="5";
$num="3";
}elseif ($buy_item == "4"){
$cost="8";
$num="4";
}
if ($fetch->referral < $cost){
echo "You dont have enough referral points to purchase this item.";
}elseif ($fetch->referral >= $cost){
if ($num == "1"){
$new_ref=$fetch->referral-$cost;
$new_money=$fetch->money+10000;
mysql_query("UPDATE users SET money='$new_money',referral='$new_ref' WHERE username='$username'");
echo "You successfully excahnged for money!";
}elseif ($num == "2"){
$new_ref=$fetch->referral-$cost;
$new_bullets=$fetch->bullets+100;
mysql_query("UPDATE users SET bullets='$new_bullets',referral='$new_ref' WHERE username='$username'");
echo "You successfully excahnged for bullets!";
}


}
}}
?>




<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head><form action="" method=POST>

<body>

<SCRIPT TYPE="text/javascript">
<!--
function copyCLink()
{
	window.clipboardData.setData('Text', 'http://www.bloodtownmafia.com/register.php?ref=<?php echo "$username"; ?>');
}
//-->
</SCRIPT>
<br>
<table width="81%" border="1" align="center" cellpadding="2" cellspacing="0" class=thinline bordercolor=black>
  <tr>
    <td colspan="2" background="includes/grad.jpg"><center class=bold>
        Referral programme </center></td>
  </tr>
  <tr bgcolor=black>
    <td height="10" colspan="2" class=tip><div align="center">You currently have <?php echo "$fetch->referral"; ?>
        referral points. </div>
      <div align="center"> </div></td>
  </tr>
  <tr>
    <td height="5" colspan="2">By referring your friends or family to Bloodtown
      you can help us get larger! Every time you refer someone you will get a
      referral point, which can eventually be used to buy In-Game items! So what
      are you waiting for? GO GO GO!</td>
  </tr>
  <tr>
    <td width="52%" height="6"><a href="javascript:copyCLink()">Your referral link</a></td>
    <td width="48%"><?php echo "http://www.bloodtownmafia.com/register.php?ref=$username"; ?></td>
  </tr>
</table>
<p>&nbsp;</p><table width="81%" border="1" align="center" cellpadding="2" cellspacing="0" class=thinline bordercolor=black>
  <tr>
    <td colspan="2" background="includes/grad.jpg"><center class=bold>
        Referral shop </center></td>
  </tr>
  <tr bgcolor=black>
    <td height="10" colspan="2" class=tip><div align="center">You currently have <?php echo "$fetch->referral"; ?>
        referral points to spend. </div>
      <div align="center"> </div></td>
  </tr>
  <tr>
    <td width="24%"><input name="buy_item" type="radio" value="1" checked>
      &pound;10,000</td>
    <td width="24%">2</td>
  </tr>
  <tr>
    <td><input type="radio" name="buy_item" value="2">
      100 Bullets</td>
    <td>10</td>
  </tr>
  <tr>
    <td><input type="radio" name="buy_item" value="3">
      Get out of jail card</td>
    <td>5</td>
  </tr>
  <tr>
    <td><input type="radio" name="buy_item" value="4">
      10Min forum posting</td>
    <td>8</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="buy_button" value="Submit"></td>
  </tr>
</table>
<p>&nbsp;</p> <? include_once"includes/footer.php"; ?>