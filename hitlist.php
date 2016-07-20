<?php
session_start();
include_once "includes/db_connect.php";
include_once "includes/functions.php";
include_once "includes/jail_check.php";
logincheck();



$username=$_SESSION['username'];
$fetch=mysql_fetch_object(mysql_query("SELECT * FROM users WHERE username='$username'"));

if (strip_tags($_GET['buyout'])){
$buyout=strip_tags($_GET['buyout']);

$buy=mysql_query("SELECT * FROM hitlist WHERE id='$buyout'");
if (mysql_num_rows($buy) != "0"){
$info=mysql_fetch_object($buy);

if ($info->amount > $fetch->money){
echo "You dont have enough money.";
}elseif ($info->amount <= $fetch->money){
$new_money = $fetch->money - $info->amount;
mysql_query("UPDATE users SET money='$new_money' WHERE username='$username'");
mysql_query("DELETE FROM hitlist WHERE id='$buyout'");
echo "User bought out!";


}}
}

if (strip_tags($_POST['Submit']) && strip_tags($_POST['target']) && strip_tags($_POST['an']) && strip_tags($_POST['amount']) && strip_tags($_POST['reason'])){
$target=strip_tags($_POST['target']);
$an=strip_tags($_POST['an']);
$amount=intval(strip_tags($_POST['amount']));
$reason=strip_tags($_POST['reason']);
if ($an == "1" || $an == "2"){

		if ($amount == 0 || !$amount || ereg('[^0-9]',$amount)){
	print "Invalid amount.";
	
}elseif ($amount != 0 && $amount && !ereg('[^0-9]',$amount)){


if (strtolower($target) == strtolower($username)){
echo "You cannot hitlist yourself";
}elseif (strtolower($target) != strtolower($username)){
$check=mysql_query("SELECT * FROM users WHERE username='$target'");
$num=mysql_num_rows($check);
if ($num == "0"){
echo "No such user.";
}elseif ($num != "0"){
if ($an == "2"){
$total_cost=$amount + 100000;
}else{
$total_cost=$amount;
}
if ($total_cost > $fetch->money){
echo "You dont have that much money.";
}elseif ($total_cost <= $fetch->money){

mysql_query("INSERT INTO `hitlist` ( `id` , `paid` , `target` , `reason` , `amount` , `anonymous` ) 
VALUES (
'', '$username', '$target', '$reason', '$amount', '$an'
)");

$new_money = $fetch->money - $total_cost;
mysql_query("UPDATE users SET money='$new_money' WHERE username='$username'");
echo "User hitlisted";

}}
}
}}
}
?>

<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<table border="1" width="92%" cellspacing="0" align=center cellpadding="2" bordercolor="black" class="thinline">
  <tr> 
    <td colspan="5" background="includes/grad.jpg"><center>
        Hitlist</center></td>
  </tr>

  <tr bgcolor=#FFFFFF> 
    <td width="18%" bgcolor="#999999" class=tip>Target</td>
    <td width="18%" bgcolor="#999999" class=tip>Paid by:</td>
    <td width="19%" bgcolor="#999999" class=tip>Reward</td>
    <td width="24%" bgcolor="#999999" class=tip >Reason</td>
    <td width="21%" bgcolor="#999999" class=tip >Buy out</td>
  </tr>
  
  <? $query=mysql_query("SELECT * FROM hitlist ORDER by amount DESC");
  $nums =mysql_num_rows($query);
  if ($nums == "0"){
  echo "<tr><td colspan=5><center>There is no one on the hitlist.</center></td></tr>";
  }
  
  
  while($i = mysql_fetch_object($query)){
  if ($i->anonymous == "2"){
  echo "
  <tr>
    <td width=18%><a href='profile.php?viewuser=$i->target'>$i->target</a></td>
    <td width=23%>Anonymous</td>
    <td width=20%>£".makecomma($i->amount)."</td>
    <td width=22%>$i->reason</td>
    <td><a href='?buyout=$i->id'>Buyout</a></td>
  </tr>"; 
  }else{
  echo "
  <tr>
    <td width=18%><a href='profile.php?viewuser=$i->target'>$i->target</a></td>
    <td width=23%><a href='profile.php?viewuser=$i->paid'>$i->paid</a></td>
    <td width=20%>".makecomma($i->amount)."</td>
    <td width=22%>$i->reason</td>
    <td><a href='?buyout=$i->id'>Buyout</a></td>
  </tr>"; }
  
  }
  ?>
</table>
<p>&nbsp;</p>
<form name="form1" method="post" action="">
  <table border="1" width="54%" align=center cellspacing="0" cellpadding="2" bordercolor="black" class="thinline">
  <tr> 
    <td colspan="2" background="includes/grad.jpg"><center>
        Hitlist someone </center></td>
  </tr>
  <tr> 
    <td> <p>Username</p></td>
    <td><input name="target" type="text" id="target2"></td>
  </tr>
  <tr> 
    <td>Anonymous</td>
    <td><input name="an" type="radio" value="1" checked>
      No 
      <input type="radio" name="an" value="2">
      Yes</td>
  </tr>
  <tr> 
    <td>Amount</td>
    <td><input name="amount" type="text" id="amount2"></td>
  </tr>
  <tr> 
    <td>Reason</td>
    <td><textarea name="reason" id="textarea"></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" value="Submit"></td>
  </tr>
</table>

</form>
</body>
</html>
