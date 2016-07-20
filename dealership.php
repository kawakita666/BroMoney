<?php session_start(); include_once"includes/db_connect.php"; include_once"includes/functions.php"; logincheck();
$username=$_SESSION['username'];
$query=mysql_query("SELECT * FROM users WHERE username='$username'");
$fetch=mysql_fetch_object($query);
$dealer = mysql_fetch_object(mysql_query("SELECT * FROM dealership WHERE location='$fetch->location'"));
$dealer_fetch = mysql_fetch_object(mysql_query("SELECT * FROM users WHERE username='$dealer->owner'"));


echo "$style";
$chosen_car=strip_tags($_GET['chosen_car']);
if ($chosen_car == "1" || $chosen_car == "2" || $chosen_car == "3" || $chosen_car == "4" || $chosen_car == "5" || $chosen_car == "6" || $chosen_car == "7" || $chosen_car == "8" || $chosen_car == "9" || $chosen_car == "10" || $chosen_car == "11" || $chosen_car == "12" || $chosen_car == "13"){

if ($chosen_car == "1"){
$car_type="Renault Clio Sport";
}elseif ($chosen_car == "2"){
$car_type="Audi A3";
}elseif ($chosen_car == "3"){
$car_type="Bmw m3";
}elseif ($chosen_car == "4"){
$car_type="Cadilac Escelade";
}elseif ($chosen_car == "5"){
$car_type="Nissan Skyline";
}elseif ($chosen_car == "6"){
$car_type="Porsche 911";
}elseif ($chosen_car == "7"){
$car_type="GT 40";
}elseif ($chosen_car == "8"){
$car_type="Lamborghini Murcielago";
}elseif ($chosen_car == "9"){
$car_type="Ferrari Enzo";
}elseif ($chosen_car == "10"){
$car_type="TVR Speed 12";
}elseif ($chosen_car == "11"){
$car_type="Mclaren f1";
}elseif ($chosen_car == "12"){
$car_type="Bugatti Veyron";
}

if (strip_tags($_GET['buy'])){
$buy=strip_tags($_GET['buy']);

$check_query =mysql_query("SELECT * FROM car_sell WHERE id='$buy' AND location='$fetch->location'");
$check = mysql_num_rows($check_query);
$info =mysql_fetch_object($check_query);
if ($check != "0"){

$user_info_owner = mysql_fetch_object(mysql_query("SELECT * FROM users WHERE username='$info->owner'"));

if ($info->price > $fetch->money){
echo "You dont have enough money";
}elseif ($info->price <= $fetch->money){
if ($dealer->owner == "0"){
$new_sell=$user_info_owner->money + $info->price;
$your_cash = $fetch->money - $info->price;

mysql_query("UPDATE users SET money='$new_sell' WHERE username='$user_info_owner->username'");
mysql_query("UPDATE users SET money='$your_cash' WHERE username='$username'");
mysql_query("UPDATE garage SET owner='$username' WHERE id='$info->car_id'");
mysql_query("DELETE FROM car_sell WHERE id='$info->id'");

}elseif ($dealer->owner != "0"){
////PERSON WHO PUT CAR UP FOR SALE
$other_user_cash = $info->price - round($info->price * 5 /100);
$other_user_cash = $user_info_owner->money + $other_user_cash;
////END THAT
////OWNER OF DEALERSHIP INTERST
$dealer_money = round($info->price * 5 /100);
$dealer_money = $dealer_fetch->money + round($info->price * 5 /100);
////END THAT SHIT
$your_money = $fetch->money - $info->price;
/////END THAT SHIT
mysql_query("UPDATE users SET money='$other_user_cash' WHERE username='$user_info_owner->username'");
mysql_query("UPDATE users SET money='$your_money' WHERE username='$username'");
mysql_query("UPDATE users SET money='$dealer_money' WHERE username='$dealer->owner'");
mysql_query("UPDATE garage SET owner='$username',status='0' WHERE id='$info->car_id'");
mysql_query("UPDATE dealership SET profit=profit+$dealer_money WHERE location='$fetch->location'");

mysql_query("DELETE FROM car_sell WHERE id='$info->id'");
}
echo "Car successfully bought";

}
}
}





echo "<table width='92%' border='1' align='center' cellpadding='0' cellspacing='0' class=thinline rules=none>
  <tr>
    <td colspan='6' class=header>
      <center>
       Current sellers for: $car_type</center></td>
  </tr>
 <tr bgcolor=black><td height=1 colspan=3></td></tr>
  <tr bgcolor=white>
    <td width='33%' class=tip>Car type:</td>
    <td width='22%' class=tip>Price:</td>
    <td width='19%' class=tip>Owner:</td>
    <td width='15%' class=tip>Date:</td>
<td width='15%' class=tip>Damage:</td>
    <td width='11%' class=tip>Buy</td>
  </tr>
 <tr bgcolor=black><td height=1 colspan=3></td></tr>
";


$it=mysql_query("SELECT * FROM car_sell WHERE car_type='$car_type' AND location='$fetch->location'");
while($cars = mysql_fetch_object($it)){
$actual =mysql_fetch_object(mysql_query("SELECT * FROM garage WHERE id='$cars->car_id'"));


echo "<tr>
    <td width='33%'>$actual->car</td>
    <td width='22%'>£".makecomma($cars->price)."</td>
    <td width='19%'>$actual->owner</td>
    <td width='15%'>$cars->date</td>
  <td width='15%'>$actual->damage%</td>
    <td><a href='?buy=$cars->id&chosen_car=$chosen_car'>Buy</a></td>
  </tr>
";

}
if (mysql_num_rows($it) =="0"){
echo"<td colspan=6><center>No cars for sale</center></td>";
}

echo "</table>";echo"<center>";
if ($dealer->owner == "0"){ echo "This Dealership is not owned";}else{ echo "This dealership is owned by <a href=profile.php?viewuser=$dealer->owner><b>$dealer->owner</b></a>"; }

echo"<p>";
include_once "includes/footer.php";
echo "</center>";
exit();
}
$checkRCS = mysql_query("SELECT * FROM car_sell WHERE location='$fetch->location' AND car_type='Renault Clio Sport'");
$amRCS=mysql_num_rows($checkRCS);

$checkA3 = mysql_query("SELECT * FROM car_sell WHERE location='$fetch->location' AND car_type='Audi A3t' ");
$amA3=mysql_num_rows($checkA3);

$checkM3 = mysql_query("SELECT * FROM car_sell WHERE location='$fetch->location' AND car_type='BMW m3'");
$amM3=mysql_num_rows($checkM3);

$checkCE = mysql_query("SELECT * FROM car_sell WHERE location='$fetch->location' AND car_type='Cadilac Escelade'");
$amCE=mysql_num_rows($checkCE);

$checkNS = mysql_query("SELECT * FROM car_sell WHERE location='$fetch->location' AND car_type='Nissan Skyline'");
$amNS=mysql_num_rows($checkNS);

$checkP9 = mysql_query("SELECT * FROM car_sell WHERE location='$fetch->location' AND car_type='Porsche 911'");
$amP9=mysql_num_rows($checkP9);

$checkGT = mysql_query("SELECT * FROM car_sell WHERE location='$fetch->location' AND car_type='GT 40'");
$amGT=mysql_num_rows($checkGT);

$checkLM = mysql_query("SELECT * FROM car_sell WHERE location='$fetch->location' AND car_type='Lamborghini Murcielago'");
$amLM=mysql_num_rows($checkLM);

$checkFE = mysql_query("SELECT * FROM car_sell WHERE location='$fetch->location' AND car_type='Ferrari Enzo'");
$amFE=mysql_num_rows($checkFE);

$checkTVR = mysql_query("SELECT * FROM car_sell WHERE location='$fetch->location' AND car_type='TVR Speed'");
$amTVR=mysql_num_rows($checkTVR);

$checkMF = mysql_query("SELECT * FROM car_sell WHERE location='$fetch->location' AND car_type='Mclaren f1'");
$amMF=mysql_num_rows($checkMF);

$checkBV = mysql_query("SELECT * FROM car_sell WHERE location='$fetch->location' AND car_type='Bugatti Veyron'");
$amBV=mysql_num_rows($checkBV);
?>
<table width="81%" border="1" align="center" cellpadding="0" cellspacing="0" class=thinline rules=none>
  <tr>
    <td class=header>
      <center>
        Welcome to the <?php echo"$fetch->location"; ?> dealership </center></td>
  </tr>
 <tr bgcolor=black><td height=1 colspan=3></td></tr>
  <tr>
    <td height="21"><table width="100%" border="0" cellspacing="4" cellpadding="0">
        <tr>
          <td width="27%"><a href="?chosen_car=1">Renault Clio Sport<?php echo"($amRCS)";?></a></td>
          <td width="21%"><a href="?chosen_car=2">Audi A3<?php echo"($amA3)";?></a></td>
          <td width="15%"><a href="?chosen_car=3">Bmw m3<?php echo"($amM3)";?></a></td>
          <td width="37%"><a href="?chosen_car=4">Cadilac Escelade<?php echo"($amCE)";?></a></td>
        </tr>
        <tr>
          <td width="27%"><a href="?chosen_car=5">Nissan Skyline<?php echo"($amNS)";?></a></td>
          <td width="21%"><a href="?chosen_car=6">Porsche 911<?php echo"($amP9)";?></a></td>
          <td width="15%"><a href="?chosen_car=7">GT 40<?php echo"($amGT)";?></a></td>
          <td><a href="?chosen_car=8">Lamborghini Murcielago<?php echo"($amLM)";?></a></td>
        </tr>
        <tr>
          <td height="20"><a href="?chosen_car=9">Ferrari Enzo<?php echo"($amFE)";?></a></td>
          <td width="21%"><a href="?chosen_car=10">TVR Speed 12<?php echo"($amTVR)";?></a></td>
          <td width="15%"><a href="?chosen_car=11">Mclaren f1<?php echo"($amMF)";?></a></td>
          <td><a href="?chosen_car=12">Bugatti Veyron<?php echo"($amBV)";?></a></td>
        </tr>
      </table></td>
  </tr>
</table>
<center>

<?php if ($dealer->owner == "0"){ echo "This Dealership is not owned";}else{ echo "This dealership is owned by <a href=profile.php?viewuser=$dealer->owner><b>$dealer->owner</b></a>"; } ?>

<p>
<?php include_once "includes/footer.php"; ?>


</center>