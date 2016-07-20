<?php session_start();
include_once"includes/db_connect.php"; include_once"includes/functions.php"; logincheck();
$username=$_SESSION['username'];
$query=mysql_query("SELECT * FROM users WHERE username='$username'");
$fetch=mysql_fetch_object($query);

$query_bf=mysql_query("SELECT * FROM bf WHERE location='$fetch->location'");
$fetch_bf=mysql_fetch_object($query_bf);

if (strtolower($fetch_bf->owner) == (strtolower($fetch->username))){

require_once"bulletCP.php";

exit();

}

$new_time=time()+360;



$up=mysql_fetch_object(mysql_query("SELECT * FROM site_stats WHERE id='1'"));

$a=mysql_query("SELECT * FROM bf");

while($b=mysql_fetch_object($a)){

$user=mysql_fetch_object(mysql_query("SELECT * FROM users WHERE username='$b->owner'"));

$minus=$user->money - 1000;

if ($user->money <= $minus){
mysql_query("UPDATE bf SET owner='0', producing='0' WHERE id='$b->id'");
$crap=1;
}


if ($up->bullets < time() && $b->producing == "Yes" && $crap != "1"){

mysql_query("UPDATE site_stats SET bullets='$new_time' WHERE id='1'");
mysql_query("UPDATE users SET money='$minus' WHERE username='$b->owner'");

}

}




if (strip_tags($_POST['check']) && (strip_tags($_POST['amount']))){
$amount=intval(strip_tags($_POST['amount']));
if ($amount == 0 || !$amount || ereg('[^0-9]',$amount)){
	print "You cant buy that amount.";

}elseif ($amount != 0 || $amount || !ereg('[^0-9]',$amount)){

	$costs = $fetch_bf->price * $amount;
	if ($costs > $fetch->money){
	echo "You do not have enough money";
} elseif ($costs <= $fetch->money){
	$nmoney=$fetch->money - $costs;
	if ($fetch_bf->stock < $amount){
		echo "Not that many bullets in the store.";
	} elseif ($amount <= $fetch_bf->stock){
		$nbullets=$fetch->bullets + $amount;
		$nstock = $fetch_bf->stock - $amount;

///IF THERE IS NOOOOO OWNER
if ($fetch_bf->owner == "0"){
		mysql_query("UPDATE users SET bullets='$nbullets', money='$nmoney' WHERE username='$username'");


		mysql_query("UPDATE bf SET stock='$nstock', profit='$costs' WHERE location='$fetch->location'");
		echo "Bullets successfully bought.";
////IF THERE IS A OWNER

}elseif ($fetch_bf->owner != "0"){
$fetch_owner=mysql_fetch_object(mysql_query("SELECT * FROM users WHERE username='$fetch_bf->owner'"));
		$new_owner=$fetch_owner->money + $costs;

		mysql_query("UPDATE users SET bullets='$nbullets', money='$nmoney' WHERE username='$username'");

		mysql_query("UPDATE users SET money='$new_owner' WHERE username='$fetch_bf->owner'");

		mysql_query("UPDATE bf SET stock='$nstock', profit='$costs' WHERE location='$fetch->location'");
		echo "Bullets successfully bought.";

}


	}}
}








}



?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>

<body>
<form action="" method=POST>
  <table width="58%" border="1" align="center" cellpadding="2" cellspacing="0" bordercolor="black" class=thinline>
    <tr>
      <td colspan="2" background="includes/grad.jpg"><div align="center">Bullet
          factory</div></td>
    </tr>
    <tr bgcolor=#000000>
      <td colspan="2"  class=tip><div align="center"><?php echo "".makecomma($fetch_up->bullets).""; ?> Untill
          restock. </div></td>
    </tr>
    <tr>
      <td width="47%">Bullets in factory: </td>
      <td width="53%"><?php echo "".makecomma($fetch_bf->stock).""; ?></td>
    </tr>
    <tr>
      <td>Status:</td>
      <td><?php echo "".makecomma($fetch_bf->producing).""; ?></td>
    </tr>
    <tr>
      <td>Price per bullet:</td>
      <td><?php echo "".makecomma($fetch_bf->price).""; ?></td>
    </tr>
    <tr>
      <td>Buy bullets:</td>
      <td><input name="amount" type="text" id="amount"> <input name="check" type="submit" id="check2" value="Purchase"></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
</body>
</html>