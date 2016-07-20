<?php
session_start();
include_once "includes/db_connect.php";
include_once "includes/functions.php";
include_once "includes/jail_check.php";
include_once "shopCP.php";
logincheck();
$date = gmdate('Y-m-d h:i:s');
$username=$_SESSION['username'];
$fetch=mysql_fetch_object(mysql_query("SELECT * FROM users WHERE username='$username'"));
$bar =mysql_fetch_object(mysql_query("SELECT * FROM bar WHERE location='$fetch->location'"));
$fetch_owner=mysql_fetch_object(mysql_query("SELECT * FROM users WHERE username='$bar->owner'"));

echo "<link href=includes/in.css rel=stylesheet type=text/css>";
if ($fetch->last_order > time()){
echo "You have ordered recently you need to wait for ".maketime($fetch->last_order)." untill you can order again";
exit();
}

if ($fetch->rank == "Scum" || $fetch->rank == "Wannabe" || $fetch->rank == "Goon" || $fetch->rank == "Hired Thug"){
echo "You need to be atleast Criminal to order.";
exit();
}else{


if (strip_tags($_POST['Submit']) && strip_tags($_POST['for'])){
$for=strip_tags($_POST['for']);
$item=strip_tags($_POST['item']);
$check = mysql_query("SELECT * FROM users WHERE username='$for'");
$check_num =mysql_num_rows($check);
if ($check_num == "0"){
echo "No such user.";
}elseif ($check_num != "0"){

$per=mysql_fetch_object($check);
if (strtolower($for) == strtolower($username)){
echo "You cannot order for yourself";
}elseif (strtolower($for) != strtolower($username)){


if ($item == "1"){
$price="50000";
$now=time() + (3600 * 14);

if ($price > $fetch->money){
echo "You dont have enough money.";
}elseif ($price <= $fetch->money){
$new_rank = $per->rankpoints + rand(20,50);
$new_money = $fetch->money - $price;
$new_money_owner = $fetch_owner->money + round(($price / 3));

mysql_query("UPDATE users SET rankpoints='$new_rank' WHERE username='$for'");
mysql_query("UPDATE users SET money='$new_money',last_order='$now' WHERE username='$username'");
mysql_query("UPDATE users SET money='$new_money_owner' WHERE username='$bar->owner'");
mysql_query("INSERT INTO `inbox` ( `id` , `to` , `from` , `message` , `date` , `read` , `saved` , `event_id` )
VALUES (
'', '$for', '$for', '$username bought you a Cold beer.', '$date', '0', '0', '0'
)");


echo "Cold beer bought";

}
}elseif ($item == "2"){
$now=time() + (3600 * 14);

$price="25000";
if ($price > $fetch->money){
echo "You dont have enough money.";
}elseif ($price <= $fetch->money){
$new_rank = $per->rankpoints + rand(10,30);
$new_money = $fetch->money - $price;
$new_money_owner = $fetch_owner->money + round(($price / 3));

mysql_query("UPDATE users SET rankpoints='$new_rank' WHERE username='$for'");
mysql_query("UPDATE users SET money='$new_money', last_order='$now' WHERE username='$username'");
mysql_query("UPDATE users SET money='$new_money_owner' WHERE username='$bar->owner'");
mysql_query("INSERT INTO `inbox` ( `id` , `to` , `from` , `message` , `date` , `read` , `saved` , `event_id` )
VALUES (
'', '$for', '$for', '$username bought you a Cooler.', '$date', '0', '0', '0'
)");

echo "Cooler bought.";


}}elseif ($item == "3"){
$now=time() + (3600 * 14);

$price="15000";
if ($price > $fetch->money){
echo "You dont have enough money.";
}elseif ($price <= $fetch->money){
$new_eng = $per->energy + rand(10,30);
$new_money = $fetch->money - $price;
$new_money_owner = $fetch_owner->money + round(($price / 3));
mysql_query("UPDATE users SET energy='$new_eng' WHERE username='$for'");
mysql_query("UPDATE users SET money='$new_money', last_order='$now' WHERE username='$username'");
mysql_query("UPDATE users SET money='$new_money_owner' WHERE username='$bar->owner'");
mysql_query("INSERT INTO `inbox` ( `id` , `to` , `from` , `message` , `date` , `read` , `saved` , `event_id` )
VALUES (
'', '$for', '$for', '$username bought you a lucozade', '$date', '0', '0', '0'
)");

echo "Energy drink bought";


}}elseif ($item == "4"){
$now=time() + (3600 * 14);

$price="15000";
if ($price > $fetch->money){
echo "You dont have enough money.";
}elseif ($price <= $fetch->money){
$new_hel = $per->health + rand(5,20);
$new_money = $fetch->money - $price;
$new_money_owner = $fetch_owner->money + round(($price / 3));
mysql_query("UPDATE users SET health='$new_hel' WHERE username='$for'");
mysql_query("UPDATE users SET money='$new_money', last_order='$now'  WHERE username='$username'");
mysql_query("UPDATE users SET money='$new_money_owner' WHERE username='$bar->owner'");
mysql_query("INSERT INTO `inbox` ( `id` , `to` , `from` , `message` , `date` , `read` , `saved` , `event_id` )
VALUES (
'', '$for', '$for', '$username bought you a Cake.', '$date', '0', '0', '0'
)");
echo "Cake bought.";


}}elseif ($item == "5"){
$now=time() + (3600 * 14);

$price="5000";
if ($price > $fetch->money){
echo "You dont have enough money.";
}elseif ($price <= $fetch->money){
$new_eng = $per->energy - rand(5,10);
$new_money = $fetch->money - $price;
$new_money_owner = $fetch_owner->money + round(($price / 3));
mysql_query("UPDATE users SET energy='$new_eng' WHERE username='$for'");
mysql_query("UPDATE users SET money='$new_money', last_order='$now' WHERE username='$username'");
mysql_query("UPDATE users SET money='$new_money_owner' WHERE username='$bar->owner'");
mysql_query("INSERT INTO `inbox` ( `id` , `to` , `from` , `message` , `date` , `read` , `saved` , `event_id` )
VALUES (
'', '$for', '$for', '$username bought you a spkied Vodka, and it took off some of your energy.', '$date', '0', '0', '0'
)");

echo "Vodka bought.";
}}



}}}

?>




<html>

<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>

<body>
<form name="form1" method="post" action="">
  <table width="74%" border="1" align="center" cellpadding="0" cellspacing="0" class=thinline rules=none>
    <tr>
      <td class=header><center>
          The bar </center></td>
    </tr>
	<tr bgcolor=black><td height=1 colspan=3></td></tr>
    <tr>
      <td height="356"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <!--DWLayoutTable-->
          <tr>
            <td height="19" colspan="3">Welcome to the bar please place your order.</td>
            <td width="169" rowspan="11" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
          </tr>
          <tr>
            <td height="22" colspan="2">For:</td>
            <td width="160"><input name="for" type="text" id="for"></td>
          </tr>
          <tr>
            <td height="19" colspan="2">Order:</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="19" colspan="2">&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td width="27" height="23"><input name="item" type="radio" value="1" checked></td>
            <td width="253">Cold beer</td>
            <td>&pound;50,000</td>
          </tr>
          <tr>
            <td height="25">&nbsp;</td>
            <td>Will improve your friends rank alot.</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="22"><input type="radio" name="item" value="2"></td>
            <td>Cooler</td>
            <td>&pound;25,000</td>
          </tr>
          <tr>
            <td height="27">&nbsp;</td>
            <td valign="top">Will improve your friends rank a bit.</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="24">&nbsp;</td>
            <td>&nbsp;</td>
            <td valign="top"> <div align="left">
                <input type="submit" name="Submit" value="Submit">
              </div></td>
          </tr>
        </table></td>
    </tr>
  </table>
</form>
</body>
</html><p><center>
<p>
<?php include_once"includes/footer.php"; ?></center>
<?php } ?>