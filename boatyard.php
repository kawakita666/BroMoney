<?php include_once"includes/db_connect.php"; include_once"includes/functions.php"; logincheck();
$username=$_SESSION['username'];
$page="boatyard.php";
?>
<script language=JavaScript>
function sell_all (amount, total){
				var del = confirm("Are you sure you wish to sell " + amount + " boats, totaling £ " + total);
				if (del == true){ var loc="boatyard.php?sell_all=true&sell_s=go"; window.location=loc; }
			}
			</script>

<?

$mysql=mysql_query("SELECT * FROM users WHERE username='$username'");
$fetch=mysql_fetch_object($mysql);

if (strip_tags($_GET['sell_s'])){
$vv=$_POST['vv'];
$i=0; $d=0;
foreach($_POST['$vv'] as $val){
$nice=mysql_fetch_object(mysql_query("SELECT * FROM boats WHERE id='$val'"));
$i+=$nice->worth;
$d++;

}
if (strip_tags($_GET['sell_all']) != "true" ){ echo "<script> sell_all('$d', '$i') </script>"; }
 if (strip_tags($_GET['sell_all']) == "true"){
 echo "This feature is currently in progress of being made.";

 }

}
$prc=strip_tags($_GET[prc]);

if (strip_tags($_POST['sell_boat_id']) && intval(strip_tags($_POST['sell_boat_price']))){
$sell_boat_id=strip_tags($_POST['sell_boat_id']);
$sell_boat_price=intval(strip_tags($_POST['sell_boat_price']));
	if ($sell_boat_price == 0 || !$sell_boat_price || ereg('[^0-9]',$sell_boat_price)){
	print "Invalid input.";

}elseif ($sell_boat_price != 0 || $sell_boat_price || !ereg('[^0-9]',$sell_boat_price)){

$a_ready=mysql_num_rows(mysql_query("SELECT * FROM boat_sell WHERE boat_id='$sell_boat_id'"));
if ($a_ready != "0"){
echo "This boat is already up for sale.";
}elseif ($a_ready == "0"){

$check_if_yours = mysql_query("SELECT * FROM boats WHERE owner='$username' AND id='$sell_boat_id'");
$num_check_rows=mysql_num_rows($check_if_yours);
$fetch_info=mysql_fetch_object($check_if_yours);
if ($num_check_rows != "0"){
if ($fetch_info->status == 1 || $fetch_info->status == 2 || $fetch_info->status == 3){
echo "This boat is currently being shipped or is in a auction";
}elseif ($fetch_info->status != "1" || $fetch_info->status != "2"){


mysql_query("INSERT INTO `boat_sell` ( `id` , `owner` , `boat_id` , `price` , `date` , `boat_type`,`location` )
VALUES (
'', '$username', '$sell_boat_id', '$sell_boat_price', '$dtime', '$fetch_info->boat','$fetch->location'
)");

mysql_query("UPDATE boats SET status='2' WHERE id='$sell_boat_id'");
echo "boat has been added";

}}}}}

if (strip_tags($_GET['sell'])){
////HERE CLSS boatS////


$sell=strip_tags($_GET['sell']);

$go=mysql_query("SELECT * FROM boats WHERE owner='$username' AND id='$sell'");
$yours=mysql_num_rows($go);
$ha = mysql_fetch_object($go);

if ($yours != "0"){

if ($ha->status == 1 || $ha->status == 2 || $ha->status == 3 || $ha->status == 4){
echo "This boat is currently being shipped";
}elseif ($ha->status != "1" || $ha->status != "2"){
$n_money = $fetch->money + $ha->worth;
mysql_query("UPDATE users SET money='$n_money' WHERE username='$username'");
mysql_query("DELETE FROM boats WHERE id='$sell'");

echo "boat sold!";


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
document.getElementById('sell_boat_id').value = Item;
}
function ship(Items) {
document.getElementById('ship_boat_id').value = Items;
}
//-->
</SCRIPT>
<form name="form1" method="post" action="?sell_s=go">
  <table width="76%" border="1" align="center" cellpadding="2" cellspacing="0" class=thinline bordercolor=black>
    <tr>
      <td colspan="8" background="includes/grad.jpg"><center>
          Your boats: </center></td>
    </tr>
    <tr bgcolor=white>
      <td width="22%" bgcolor="#000000" class=tip>Type:</td>
      <td width="24%" bgcolor="#000000" class=tip>Damage</td>
      <td width="19%" bgcolor="#000000" class=tip>Origion: </td>
      <td width="19%" bgcolor="#000000" class=tip>Location</td>
      <td width="16%" bgcolor="#000000" class=tip>Stats</td>
    </tr>
    <?
  $gather = mysql_query("SELECT * FROM boats WHERE owner='$username'");
  $count=mysql_num_rows($gather);
  if ($count=="0"){
  echo "<tr><td colspan=6 cellspace=2><center>No boats In boat Yard</center></td></tr>";
  }
 $e=0;
  while($object=mysql_fetch_object($gather)){


if ($e == "0"){ $color="#000000"; $e=1; }else{
$color="#000000"; $e=0; }
  echo
  "  <tr bgcolor=$color>
    <td><input type=checkbox name=vv[] value='$object->id'><a href=?type=$object->id&prc=$for>$object->boat</a></td>
    <td width=13%>$object->damage%</td>

    <td width=16%>$object->origion</td>";
    if($object->status==1){
        $ships=$object->shiptime-time();
        if($ships<1){
            mysql_query("UPDATE boats SET status='0' WHERE id='$object->id'");
        }
      echo"
    <td width=19%>$ships seconds before $object->boat will arive in $object->location</td>
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
$doma = mysql_query("SELECT * FROM boats WHERE id='$remove'");
$dama = mysql_fetch_object($doma);
$check1=mysql_num_rows(mysql_query("SELECT * FROM boats WHERE id='$remove' AND owner='$username'"));
if ($check1 == "0"){
echo "This is not your boat.";
}elseif ($check1 != "0"){

if ($dama->status == "2"){
mysql_query("DELETE FROM boat_sell WHERE boat_id='$dama->id'");
mysql_query("UPDATE boats SET status='0' WHERE id='$remove'");
echo "boat removed from dealership.";
}}}


if (strip_tags($_GET['rep'])){
$repa=$_GET['rep'];
$doma = mysql_query("SELECT * FROM boats WHERE id='$repa'");
$dama = mysql_fetch_object($doma);
$check1=mysql_num_rows(mysql_query("SELECT * FROM boats WHERE id='$rep' AND owner='$username'"));
if ($check1 == "0"){
echo "This is not your boat.";
}elseif ($check1 != "0"){

if ($dama->status == "1" || $dama->status == "2" || $dama->status == "3" ){
echo "This boat is in the dealership or is being shipped!";
}else{
$price=$dama->damage*1000;
 if ($dama->boat == "junkboat"){
 $max="5000";
 }elseif ($dama->boat == "speedboat"){
 $max="18000";
 }
$n_money = $fetch->money - $price;
if($n_money<0){die("You haven't got the £$price  required to repair $dama->boat!");}

mysql_query("UPDATE users SET money='$n_money' WHERE username='$username'");
mysql_query("UPDATE boats SET damage=0 WHERE id='$repa'");
mysql_query("UPDATE boats SET worth=$max WHERE id='$repa'");
die("$dama->boat has been succesfully repaired!<br>");
}}}

if (strip_tags($_POST['ship_boat_id'])){
$shipid=$_POST['ship_boat_id'];
$loca=strip_tags($_POST['loca']);
$ship_inf = mysql_query("SELECT * FROM boats WHERE id='$shipid'");
$ship_sta= mysql_fetch_object($ship_inf);
$check1=mysql_num_rows(mysql_query("SELECT * FROM boats WHERE id='$ship_boat_id' AND owner='$username'"));
if ($check1 == "0"){
echo "This is not your boat.";
}elseif ($check1 != "0"){



if($ship_sta->location!=$loca){
if($ship_sta->status==0){
$shiptime=time()+3600;
mysql_query("UPDATE boats SET shiptime=$shiptime WHERE id='$shipid'");
mysql_query("UPDATE boats SET status='1' WHERE id='$shipid'");
mysql_query("UPDATE boats SET location='$loca' WHERE id='$shipid'");
die("$ship_sta->boat will arrive at $loca in 1 hour!<br>");
}
}else{
die("$ship_sta->boat is already in $loca!<br>");
}
}}

if (strip_tags($_GET['type'])){
$type=$_GET['type'];
$dog_go_fetch = mysql_query("SELECT * FROM boats WHERE id='$type'");
$boat_stuf = mysql_fetch_object($dog_go_fetch);


if ($boat_stuf->boat == "Renault Clio Sport"){ $img = "images/boats/renaultcliosport.jpg"; }
elseif ($boat_stuf->boat == "Audi A3"){ $img = "images/boats/audia3.jpg"; }
elseif ($boat_stuf->boat == "Bmw m3"){ $img = "images/boats/bmw-m3.jpg"; }
elseif ($boat_stuf->boat == "Cadilac Escelade"){ $img = "images/boats/esacallade.gif"; }
elseif ($boat_stuf->boat == "Nissan Skyline"){ $img = "images/boats/nissan.jpg"; }
elseif ($boat_stuf->boat == "Porsche 911"){ $img = "images/boats/porsche.jpg"; }
elseif ($boat_stuf->boat == "GT 40"){ $img = "images/boats/fordgt40.jpg"; }
elseif ($boat_stuf->boat == "Lamborghini Murcielago"){ $img = "images/boats/land.jpg"; }
elseif ($boat_stuf->boat == "Ferrari Enzo"){ $img = "images/boats/ferrarienzo.jpg"; }
elseif ($boat_stuf->boat == "TVR Speed 12"){ $img = "images/boats/tvr12.jpg"; }
elseif ($boat_stuf->boat == "Mclaren f1"){ $img = "images/boats/mcf1.jpg"; }
elseif ($boat_stuf->boat == "Bugatti Veyron"){ $img = "images/boats/BugattiVeyron.jpg"; }

if ($boat_stuf->status == "0"){
$status_boat="Stationary";
}elseif ($boat_stuf->status == "1"){
$status_boat="Shipping";
}elseif ($boat_stuf->status == "2"){
$status_boat="Auctions(<a href='?remove=$boat_stuf->id&type=$type'>Remove</a>)";
}elseif ($boat_stuf->status == "3"){
$status_boat="Street Race";
}elseif ($boat_stuf->status == "4"){
$status_boat="Auctions(Online)";
}

$levels=explode("-", $boat_stuf->upgrades);

$for=round($for);


echo "
<p>
<table width=55% border=1 align=center cellpadding=0 cellspacing=0 class=thinline rules=none>
  <tr>
    <td class=header><center>boat information:</center></td>
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
          <td colspan='2'>boat: $boat_stuf->boat</td>
        </tr>
        <tr>
          <td colspan='2'>Value: £".makecomma($boat_stuf->worth)."</td>
        </tr>
		  <tr>
          <td colspan='2'>Repair: <a href=?rep=$boat_stuf->id>Click here</a></td>
        </tr>
		<tr>
          <td colspan='2'>Ship: <a onclick=ship($boat_stuf->id); href=#ship>Click here</a></td>
        </tr>

        <tr>
          <td colspan='2'>Status: $status_boat</td>
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
</form>
<form action="" method=POST>
  <table width="56%" border="1" align="center" cellpadding="0" cellspacing="0" class=thinline rules=none>
  <tr>
    <td class=header><center>
       Ship boat
      </center></td>
  </tr>
   <tr bgcolor=black><td height=1 colspan=3></td></tr>
  <tr>
    <td width="17%"><table width="100%" border="0" cellspacing="3" cellpadding="0">
        <tr>
          <td width="47%">boat id: </td>
          <td width="53%"><input name="ship_boat_id" type="text" id="ship_boat_id"></td>
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