<?php session_start();
include_once"includes/db_connect.php";
include_once"includes/functions.php";
logincheck();
$username=$_SESSION['username'];

$query=mysql_query("SELECT * FROM users WHERE username='$username'");
$fetch=mysql_fetch_object($query);
$crew=mysql_fetch_object(mysql_query("SELECT * FROM crews WHERE name='$fetch->crew'"));

if ($fetch->crew == $crew->name){

$bus=explode("-", $crew->income);
$first = $bus[0] * 10000;
$second = $bus[1] * 50000;
$third=$bus[2] * 100000;
$total_in = $first+$second+$third;

if ($crew->payout <= time()){
$bus=explode("-", $crew->income);
$first = $bus[0] * 10000;
$second = $bus[1] * 50000;
$third=$bus[2] * 100000;
$total = $first+$second+$third;
$total_users = mysql_num_rows(mysql_query("SELECT * FROM users WHERE crew='$crew->name'"));


$per_user=round($total / $total_users);
$add=mysql_query("SELECT * FROM users WHERE crew='$crew->name'");
while($it = mysql_fetch_object($add)){
$new_money = $it->money + $per_user;
mysql_query("UPDATE users SET money='$new_money' WHERE username='$it->username'");
$new_payout = time() + (3600*24);
mysql_query("UPDATE crews SET payout='$new_payout' WHERE name='$crew->name'");
}}




////////////////////////////////////////////////////////////////////
if (strip_tags($_POST['donate_button']) && strip_tags($_POST['donate_amount'])){
$donate_amount=intval(strip_tags($_POST['donate_amount']));

		if ($donate_amount == 0 || !$donate_amount || ereg('[^0-9]',$donate_amount)){
	print "You cant deposit that amount.";

}elseif ($donate_amount != 0 && $donate_amount && !ereg('[^0-9]',$donate_amount)){



	if ($donate_amount > $fetch->money){
	echo "You do not have that much money";
	}elseif ($donate_amount <= $fetch->money){
	$user_loose = $fetch->money - $donate_amount;
	$new_bank = $crew->bank + $donate_amount;

	mysql_query("UPDATE users SET money = '$user_loose' WHERE username='$username'");
	mysql_query("UPDATE crews SET bank = '$new_bank' WHERE name='$crew->name'");

echo "Money successfully donated!";

}
}}
$totalincrew=mysql_num_rows(mysql_query("SELECT * FROM users WHERE crew='$crew->name'"));
$totalmoney = mysql_fetch_object(mysql_query("SELECT SUM(money)AS crap FROM users WHERE crew='$crew->name' GROUP BY money"));

$in = explode("-",$crew->income);
if (strip_tags($_POST['bus_button'])){
$type=strip_tags($_POST['type']);

if ($type == "1"){
$price = "100000";
$bit=$in[0]+1;
$new_income="$bit-$in[1]-$in[2]";

}elseif ($type == "2"){
$price = "500000";
$bit=$in[1]+1;
$new_income="$in[0]-$bit-$in[2]";

}elseif ($type == "3"){
$price = "1000000";
$bit=$in[2]+1;
$new_income="$in[0]-$in[1]-$bit";
}else{
echo "Error";
exit();
}
if ($price > $fetch->money){
echo "You dont have enough money";
}elseif ($price <= $fetch->money){

$user_money = $fetch->money - $price;

mysql_query("UPDATE users SET money='$user_money' WHERE username='$username'");
mysql_query("UPDATE crews SET income='$new_income' WHERE name='$crew->name'");
echo "Buisness bought";
}}

if (strip_tags($_POST['leave'])){
if ($fetch->money < "3500"){
echo "You dont have eough money to leave this crew.";
}elseif ($fetch->money >= "3500"){
$new_money = $fetch->money - 3500;
mysql_query("UPDATE users SET crew='0', money='$new_money' WHERE username='$username'");
echo "You left that crew.";
}
}
if (strip_tags($_POST['bullet_button']) && strip_tags($_POST['bullet_amount'])){
$bullet_amount=intval(strip_tags($_POST['bullet_amount']));

		if ($bullet_amount == 0 || !$bullet_amount || ereg('[^0-9]',$bullet_amount)){
	print "You cant deposit that amount.";

}elseif ($bullet_amount != 0 && $bullet_amount && !ereg('[^0-9]',$bullet_amount)){



	if ($bullet_amount > $fetch->bullets){
	echo "You do not have that much bullets";
	}elseif ($bullet_amount <= $fetch->bullets){
	$user_loose = $fetch->bullets - $bullet_amount;
	$new_bank = $crew->bullets + $bullet_amount;

	mysql_query("UPDATE users SET bullets = '$user_loose' WHERE username='$username'");
	mysql_query("UPDATE crews SET bullets = '$new_bank' WHERE name='$crew->name'");

echo "Bullets successfully donated!";

}
}}




?>
<link rel=stylesheet href=includes/in.css type=text/css>
<form name="form1" method="post" action="">


  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="3">
    <tr>
      <td width="53%"><table width="100%" border="1" cellspacing="0" cellpadding="0" class=thinline rules=none >
          <tr>
            <td class="header"><center>
                Crew bank account DO NOT USE </center></td>
          </tr>
          <tr>
            <td><table width="100%" border="0" cellspacing="3" cellpadding="0">
                <tr>
                  <td colspan="2"> <div align="center"><strong>Donate:</strong></div></td>
                </tr>
                <tr>
                  <td width="50%">Current balance:</td>
                  <td width="50%"><?php echo "£".makecomma($crew->bank).""; ?></td>
                </tr>
                <tr>
                  <td>Amount</td>
                  <td width="50%"><input name="donate_amount" type="text" id="donate_amount"></td>
                </tr>
                <tr>
                  <td colspan="2"><div align="right">
                      <input name="donate_button" type="submit" id="donate_button" value="Donate money">
                    </div></td>
                </tr>
              </table></td>
          </tr>
        </table></td>
      <td width="47%"><table width="100%" border="1" cellspacing="0" cellpadding="0" class=thinline rules=none>
          <tr>
            <td class="header"><center>
                Crew bullet bank DO NOT USE</center></td>
          </tr>
          <tr>
            <td><table width="100%" border="0" cellspacing="3" cellpadding="0">
                <tr>
                  <td colspan="2"> <div align="center"><strong>Donate:</strong></div></td>
                </tr>
                <tr>
                  <td width="50%">Current bullets in bank:</td>
                  <td width="50%"><?php echo "£".makecomma($crew->bullets).""; ?></td>
                </tr>
                <tr>
                  <td>Amount</td>
                  <td width="50%"><input name="bullet_amount" type="text" id="donate_amount3"></td>
                </tr>
                <tr>
                  <td colspan="2"><div align="right">
                      <input name="bullet_button" type="submit" id="donate_button3" value="Donate Bullets">
                    </div></td>
                </tr>
              </table></td>
          </tr>
        </table></td>
    </tr>
    <tr>
      <td colspan="2"> <table width="99%" border="1" cellspacing="0" cellpadding="0" class=thinline rules=none>
          <tr>
            <td class="header"><center>
                Crew buisnesses </center></td>
          </tr>
          <tr>
            <td><table width="100%" border="0" cellspacing="3" cellpadding="0">
                <tr>
                  <td> <div align="center"> </div></td>
                  <td width="23%"><em><strong>&nbsp;Buisness</strong></em></td>
                  <td width="20%"><em><strong>Price</strong></em></td>
                  <td width="25%"><em><strong>Makes per day</strong></em></td>
                  <td width="25%"><em><strong>Current amount</strong></em></td>
                </tr>
                <tr>
                  <td><input type="radio" name="type" value="1" checked></td>
                  <td width="23%">Weapon factory </td>
                  <td>&pound;100,000</td>
                  <td>&pound;10,000</td>
                  <td><?php echo "$in[0]"; ?>&nbsp;</td>
                </tr>
                <tr>
                  <td width="7%"><input type="radio" name="type" value="2"></td>
                  <td>&nbsp;Weed plantation</td>
                  <td>&pound;500,000</td>
                  <td>&pound;50,000</td>
                  <td><?php echo "$in[1]"; ?></td>
                </tr>
                <tr>
                  <td> <input type="radio" name="type" value="3"></td>
                  <td>Hoe training facility</td>
                  <td>&pound;1,000,000</td>
                  <td>&pound;100,000</td>
                  <td><?php echo "$in[2]"; ?></td>
                </tr>
                <tr>
                  <td><div align="right"> </div></td>
                  <td>&nbsp;</td>
                  <td colspan="3"><div align="right">
                      <input name="bus_button" type="submit" id="bus_button3" value="Purchase">
                    </div></td>
                </tr>
              </table></td>
          </tr>
        </table></td>
    </tr>
    <tr>
      <td><table width="100%" border="1" cellspacing="0" cellpadding="0" class=thinline rules=none>
          <tr>
            <td class="header"><center>
                Leave this crew </center></td>
          </tr>
          <tr>
            <td><table width="100%" border="0" align="center" cellpadding="0" cellspacing="3">
                <tr>
                  <td><div align="center">It will cost you &pound;3500 to leave
                      this crew.</div></td>
                </tr>
                <tr>
                  <td><div align="center">
                      <input name="leave" type="submit" id="leave" value="Leave this crew">
                    </div></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
              </table></td>
          </tr>
        </table></td>
      <td><table width="100%" border="1" cellspacing="0" cellpadding="0" class=thinline rules=none>
          <tr>
            <td class="header"><center>
                Crew stats </center></td>
          </tr>
          <tr>
            <td><table width="100%" border="0" cellspacing="3" cellpadding="0">
                <tr>
                  <td>Total users in crew:
                    <div align="center"></div></td>
                  <td><?php echo "$totalincrew"; ?>&nbsp;</td>
                </tr>
                <tr>
                  <td width="56%">Total money in crew:</td>
                  <td width="44%"><?php echo "£".makecomma($totalmoney->crap).""; ?>&nbsp;</td>
                </tr>
                <tr>
                  <td>Makes per day:</td>
                  <td width="44%"><?php echo "$total_in"; ?>&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="2"><div align="right"> </div></td>
                </tr>
              </table></td>
          </tr>
        </table></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
<?php
///////TO CHECK IF THERE IN THE CREW AND THERE RHM
}
///////
?>

</form>