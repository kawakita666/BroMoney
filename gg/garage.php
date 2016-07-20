<?php include_once"includes/db_connect.php"; include_once"includes/functions.php"; logincheck();
$username=$_SESSION['username'];
$page="garage.php";
?>
<script language=JavaScript>
function sell_all (amount, total){
				var del = confirm("Are you sure you wish to sell " + amount + " cars, totaling £ " + total);
				if (del == true){ var loc="garage.php?sell_all=true&sell_s=go"; window.location=loc; }
			}
			</script>

<?

$mysql=mysql_query("SELECT * FROM users WHERE username='$username'");
$fetch=mysql_fetch_object($mysql);

if (strip_tags($_GET['sell_s'])){
$vv=$_POST['vv'];
$i=0; $d=0;
foreach($_POST['$vv'] as $val){
$nice=mysql_fetch_object(mysql_query("SELECT * FROM garage WHERE id='$val'"));
$i+=$nice->worth;
$d++;

}
if (strip_tags($_GET['sell_all']) != "true" ){ echo "<script> sell_all('$d', '$i') </script>"; }
 if (strip_tags($_GET['sell_all']) == "true"){
 echo "This feature is currently in progress of being made.";

 }

}
$prc=strip_tags($_GET[prc]);

if (strip_tags($_POST['sell_car_id']) && intval(strip_tags($_POST['sell_car_price']))){
$sell_car_id=strip_tags($_POST['sell_car_id']);
$sell_car_price=intval(strip_tags($_POST['sell_car_price']));
	if ($sell_car_price == 0 || !$sell_car_price || ereg('[^0-9]',$sell_car_price)){
	print "Invalid input.";

}elseif ($sell_car_price != 0 || $sell_car_price || !ereg('[^0-9]',$sell_car_price)){

$a_ready=mysql_num_rows(mysql_query("SELECT * FROM car_sell WHERE car_id='$sell_car_id'"));
if ($a_ready != "0"){
echo "This car is already up for sale.";
}elseif ($a_ready == "0"){

$check_if_yours = mysql_query("SELECT * FROM garage WHERE owner='$username' AND id='$sell_car_id'");
$num_check_rows=mysql_num_rows($check_if_yours);
$fetch_info=mysql_fetch_object($check_if_yours);
if ($num_check_rows != "0"){
if ($fetch_info->status == 1 || $fetch_info->status == 2 || $fetch_info->status == 3){
echo "This car is currently being shipped or is in a auction";
}elseif ($fetch_info->status != "1" || $fetch_info->status != "2"){


mysql_query("INSERT INTO `car_sell` ( `id` , `owner` , `car_id` , `price` , `date` , `car_type`,`location` )
VALUES (
'', '$username', '$sell_car_id', '$sell_car_price', '$dtime', '$fetch_info->car','$fetch->location'
)");

mysql_query("UPDATE garage SET status='2' WHERE id='$sell_car_id'");
echo "Car has been added";

}}}}}

if (strip_tags($_GET['sell'])){
////HERE CLSS CARS////


$sell=strip_tags($_GET['sell']);

$go=mysql_query("SELECT * FROM garage WHERE owner='$username' AND id='$sell'");
$yours=mysql_num_rows($go);
$ha = mysql_fetch_object($go);

if ($yours != "0"){

if ($ha->status == 1 || $ha->status == 2 || $ha->status == 3 || $ha->status == 4){
echo "This car is currently being shipped";
}elseif ($ha->status != "1" || $ha->status != "2"){
$n_money = $fetch->money + $ha->worth;
mysql_query("UPDATE users SET money='$n_money' WHERE username='$username'");
mysql_query("DELETE FROM garage WHERE id='$sell'");

echo "Car sold!";


}}}



 ?>
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="includes/in.css" rel="stylesheet" type="text/css">
</head>
<?php echo "$style"; ?>

<body>
<SCRIPT>
<!--
function change(Item) {
document.getElementById('sell_car_id').value = Item;
}
function ship(Items) {
document.getElementById('ship_car_id').value = Items;
}
//-->
</SCRIPT>
<form name="form1" method="post" action="?sell_s=go">
  <table width="76%" border="1" align="center" cellpadding="2" cellspacing="0" class=thinline bordercolor=black>
    <tr>
      <td colspan="8" background="includes/grad.jpg"><center>
          Your cars: </center></td>
    </tr>
    <tr bgcolor=white>
      <td width="22%" bgcolor="#000000" class=tip>Type:</td>
      <td width="24%" bgcolor="#000000" class=tip>Damage</td>
      <td width="19%" bgcolor="#000000" class=tip>Origion: </td>
      <td width="19%" bgcolor="#000000" class=tip>Location</td>
      <td width="16%" bgcolor="#000000" class=tip>Stats</td>
    </tr>
    <?
  $gather = mysql_query("SELECT * FROM garage WHERE owner='$username'");
  $count=mysql_num_rows($gather);
  if ($count=="0"){
  echo "<tr><td colspan=6 cellspace=2><center>No Cars In Garage</center></td></tr>";
  }
 $e=0;
  while($object=mysql_fetch_object($gather)){


if ($e == "0"){ $color="#000000"; $e=1; }else{
$color="#000000"; $e=0; }
  echo
  "  <tr bgcolor=$color>
    <td><input type=checkbox name=vv[] value='$object->id'><a href=?type=$object->id&prc=$for>$object->car </a></td>
    <td width=13%>$object->damage%</td>

    <td width=16%>$object->origion</td>";
    if($object->status==1){
        $ships=$object->shiptime-time();
        if($ships<1){
            mysql_query("UPDATE garage SET status='0' WHERE id='$object->id'");
        }
      echo"
    <td width=19%>$ships seconds before $object->car will arive in $object->location</td>
      ";
    }else{
      echo"
          <td width=19%>$object->location (<a onclick=ship($object->id); href=#>Ship!</a>)</td>";
    }
 echo "<td>Click Here</td></tr>";
  }

  ?>
  </table>
  <?
if(strip_tags($_GET['remove'])){
$remove=strip_tags($_GET['remove']);
$doma = mysql_query("SELECT * FROM garage WHERE id='$remove'");
$dama = mysql_fetch_object($doma);
$check1=mysql_num_rows(mysql_query("SELECT * FROM garage WHERE id='$remove' AND owner='$username'"));
if ($check1 == "0"){
echo "This is not your car.";
}elseif ($check1 != "0"){

if ($dama->status == "2"){
mysql_query("DELETE FROM car_sell WHERE car_id='$dama->id'");
mysql_query("UPDATE garage SET status='0' WHERE id='$remove'");
echo "Car removed from dealership.";
}}}


if (strip_tags($_GET['rep'])){
$repa=$_GET['rep'];
$doma = mysql_query("SELECT * FROM garage WHERE id='$repa'");
$dama = mysql_fetch_object($doma);
$check1=mysql_num_rows(mysql_query("SELECT * FROM garage WHERE id='$rep' AND owner='$username'"));
if ($check1 == "0"){
echo "This is not your car.";
}elseif ($check1 != "0"){

if ($dama->status == "1" || $dama->status == "2" || $dama->status == "3" ){
echo "This car is in the dealership or is being shipped!";
}else{
$price=$dama->damage*1000;
 if ($dama->car == "Renault Clio Sport"){
 $max="5000";
 }elseif ($dama->car == "Audi A3"){
 $max="6000";
 }
elseif ($dama->car == "BMW m3"){
 $max="10000";
 }
elseif ($dama->car == "Cadilac Escelade"){
 $max="13000";
 }
elseif ($dama->car == "Nissan Skyline"){
 $max="16000";
 }
elseif ($dama->car == "Porsche 911"){
 $max="18000";
 }
 elseif ($dama->car == "GT 40"){
 $max="20000";
 }
elseif ($dama->car == "Lamborghini Murcielago"){
 $max="25000";
 }
elseif ($dama->car == "Ferrari Enzo"){
 $max="29000";
 }
elseif ($dama->car == "TVR Speed 12"){
 $max="32000";
 }
elseif ($dama->car == "Mclaren f1"){
 $max="37000";
 }
elseif ($dama->car == "Bugatti Veyron"){
 $max="43000";
}
$n_money = $fetch->money - $price;
if($n_money<0){die("You haven't got the £$price  required to repair $dama->car!");}

mysql_query("UPDATE users SET money='$n_money' WHERE username='$username'");
mysql_query("UPDATE garage SET damage=0 WHERE id='$repa'");
mysql_query("UPDATE garage SET worth=$max WHERE id='$repa'");
die("$dama->car has been succesfully repaired!<br>");
}}}

if (strip_tags($_POST['ship_car_id'])){
$shipid=$_POST['ship_car_id'];
$loca=strip_tags($_POST['loca']);
$ship_inf = mysql_query("SELECT * FROM garage WHERE id='$shipid'");
$ship_sta= mysql_fetch_object($ship_inf);
$check1=mysql_num_rows(mysql_query("SELECT * FROM garage WHERE id='$ship_car_id' AND owner='$username'"));
if ($check1 == "0"){
echo "This is not your car.";
}elseif ($check1 != "0"){



if($ship_sta->location!=$loca){
if($ship_sta->status==0){
$shiptime=time()+3600;
mysql_query("UPDATE garage SET shiptime=$shiptime WHERE id='$shipid'");
mysql_query("UPDATE garage SET status='1' WHERE id='$shipid'");
mysql_query("UPDATE garage SET location='$loca' WHERE id='$shipid'");
die("$ship_sta->car will arrive at $loca in 1 hour!<br>");
}
}else{
die("$ship_sta->car is already in $loca!<br>");
}
}}

if (strip_tags($_GET['type'])){
$type=$_GET['type'];
$dog_go_fetch = mysql_query("SELECT * FROM garage WHERE id='$type'");
$car_stuf = mysql_fetch_object($dog_go_fetch);


if ($car_stuf->car == "Renault Clio Sport"){ $img = "images/cars/renaultcliosport.jpg"; }
elseif ($car_stuf->car == "Audi A3"){ $img = "images/cars/audia3.jpg"; }
elseif ($car_stuf->car == "Bmw m3"){ $img = "images/cars/bmw-m3.jpg"; }
elseif ($car_stuf->car == "Cadilac Escelade"){ $img = "images/cars/esacallade.gif"; }
elseif ($car_stuf->car == "Nissan Skyline"){ $img = "images/cars/nissan.jpg"; }
elseif ($car_stuf->car == "Porsche 911"){ $img = "images/cars/porsche.jpg"; }
elseif ($car_stuf->car == "GT 40"){ $img = "images/cars/fordgt40.jpg"; }
elseif ($car_stuf->car == "Lamborghini Murcielago"){ $img = "images/cars/land.jpg"; }
elseif ($car_stuf->car == "Ferrari Enzo"){ $img = "images/cars/ferrarienzo.jpg"; }
elseif ($car_stuf->car == "TVR Speed 12"){ $img = "images/cars/tvr12.jpg"; }
elseif ($car_stuf->car == "Mclaren f1"){ $img = "images/cars/mcf1.jpg"; }
elseif ($car_stuf->car == "Bugatti Veyron"){ $img = "images/cars/BugattiVeyron.jpg"; }

if ($car_stuf->status == "0"){
$status_car="Stationary";
}elseif ($car_stuf->status == "1"){
$status_car="Shipping";
}elseif ($car_stuf->status == "2"){
$status_car="Auctions(<a href='?remove=$car_stuf->id&type=$type'>Remove</a>)";
}elseif ($car_stuf->status == "3"){
$status_car="Street Race";
}elseif ($car_stuf->status == "4"){
$status_car="Auctions(Online)";
}

$levels=explode("-", $car_stuf->upgrades);

$for=round($for);


echo "
<p>
<table width=55% border=1 align=center cellpadding=0 cellspacing=0 class=thinline rules=none>
  <tr>
    <td class=header><center>Car information:</center></td>
  </tr>
  <tr>
    <td><table width=100% border=0 cellspacing=3 cellpadding=0>
        <tr>
          <td colspan='2'><div align=center>Image: </div>
            <div align=left></div></td>
        </tr>
        <tr>
          <td colspan='2'><div align=center><img src=$img width=200 height=200 border=1></div></td>
        </tr>
        <tr>
          <td colspan='2'><div align=center>Information:</div></td>
        </tr>
        <tr>
          <td colspan='2'>Car: $car_stuf->car</td>
        </tr>
        <tr>
          <td colspan='2'>Value: £".makecomma($car_stuf->worth)."</td>
        </tr>
		  <tr>
          <td colspan='2'>Repair: <a href=?rep=$car_stuf->id>Click here</a></td>
        </tr>
		<tr>
          <td colspan='2'>Ship: <a onclick=ship($car_stuf->id); href=#ship>Click here</a></td>
        </tr>

        <tr>
          <td colspan='2'>Status: $status_car</td>
        </tr>
        <tr>
          <td colspan='2'>Sell: <a href='?sell=$type&type=$type'>Sell</a></td>
        </tr>
        <tr>
          <td colspan='2'><div align='center'><b>Upgrades: </b> </div></td>
        </tr>
        <tr>
          <td colspan='2'>&nbsp;</td>
        </tr>
        <tr>
          <td>Tyres:</td>
          <td>Level $levels[0]</td>
        </tr>
        <tr>
          <td>Engine</td>
          <td>Level $levels[1]</td>
        </tr>
        <tr>
          <td>Interior</td>
          <td>Level $levels[2]</td>
        </tr>
        <tr>
          <td>Exhaust</td>
          <td>Level $levels[3]</td>
        </tr>
        <tr>
          <td height='8'>NOS</td>
          <td>Level $levels[4]</td>
        </tr>
        <tr>
          <td height='2'>Rims</td>
          <td>Level $levels[5]</td>
        </tr>
        <tr>
          <td height='3'>Brakes</td>
          <td>Level $levels[6]</td>
        </tr>
        <tr>
          <td height='8'>Body kit</td>
          <td>Level $levels[7]</td>
        </tr>
      </table></td> </tr> </table>
";  ?>
  <?php } ?>
  <p>&nbsp;</p>
  <p><br>
  </p>
  <table width="56%" border="1" align="center" cellpadding="2" cellspacing="0" class=thinline bordercolor=black>
    <tr>
      <td colspan="2" background="includes/grad.jpg"><center>
          Options </center></td>
    </tr>
    <tr>
      <td width="49%"><div align="center">
          <input name="sell_s" type="submit" id="sell_s" value="Sell selected">
        </div></td>
      <td width="51%"><div align="center">
          <input name="delete_s" type="submit" id="delete_s" value="Delete selected">
        </div></td>
  </table>
</form>
<form action="" method=POST>
  <table width="56%" border="1" align="center" cellpadding="0" cellspacing="0" class=thinline rules=none>
  <tr>
    <td class=header><center>
       Ship car
      </center></td>
  </tr>
   <tr bgcolor=black><td height=1 colspan=3></td></tr>
  <tr>
    <td width="17%"><table width="100%" border="0" cellspacing="3" cellpadding="0">
        <tr>
          <td width="47%">Car id: </td>
          <td width="53%"><input name="ship_car_id" type="text" id="ship_car_id"></td>
        </tr>
        <tr>
          <td>Ship to:</td>
          <td>
  <select size="1" name="loca">
  <option value="England">England</option>
  <option value="Japan">Japan</option>
  <option value="France">France</option>
  <option value="USA">USA</option>
  <option value="China">China</option>
  <option value="Canada">Canada</option>
  </select>
</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" name="Ship" value="Ship"></td>
        </tr>
      </table></td></table></form>
<p>
</body>
</html>