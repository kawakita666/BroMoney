<?php
session_start();
include_once "includes/db_connect.php";
include_once "includes/functions.php";
include_once "includes/jail_check.php";
logincheck();

echo "$style";
$fetch=mysql_fetch_object(mysql_query("SELECT * FROM users WHERE username='$username'"));
if (strip_tags($_POST['Submit']) && strip_tags($_POST['units'])){
$units=intval(strip_tags($_POST['units']));



		if ($units == 0 || !$units || ereg('[^0-9]',$units)){
	print "Invalid amount.";

}elseif ($units != 0 && $units && !ereg('[^0-9]',$units)){

$price = $units * 100;
if ($price > $fetch->money){
echo "You dont have enough money";
}elseif ($price <= $fetch->money){
$new_money=$fetch->money - $price;
$new_health=$fetch->health + $units;
if ($fetch->health == "100"){
echo "You dont need to buy any untis of health!";
}else{
if ($new_health >= "100"){
$new_health="100";
}

mysql_query("UPDATE users SET money='$new_money', health='$new_health' WHERE username='$username'");
echo "Health bought!";

}}}}
?>
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="includes/in.css" rel="stylesheet" type="text/css">
</head>

<body>
<form name="form1" method="post" action="">
  <table width="36%" border="1" align="center" cellpadding="0" cellspacing="0" class=thinline rules=none>
    <tr>
      <td class=header><center>
          Hospital</center></td>
    </tr>
	<tr bgcolor=black><td height=1></td></tr>
	<tr bgcolor=#FFFFFF>
            <td bgcolor="#000000"  class=tip ><div align="center">Welcome to <?php echo "$fetch->location"; ?>'s
                hospital.</div></td>
          </tr>
    <tr>
      <td><table width="100%" border="0" cellspacing="3" cellpadding="0">


          <tr>
            <td colspan="2"><div align="center">It will cost &pound;100 for every
                unit of health</div></td>
          </tr>
          <tr>
            <td width="52%"><div align="center">Units: </div></td>
            <td width="48%"><input name="units" type="text" id="units" size="10" maxlength="3"></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="Submit" value="Heal"></td>
          </tr>
        </table></td>
    </tr>
  </table>
</form>
</body>
</html>