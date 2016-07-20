<?php
session_start();
 include_once "includes/db_connect.php"; include_once "includes/functions.php"; logincheck();
$username=$_SESSION['username'];

$query=mysql_query("SELECT * FROM users WHERE username='$username' LIMIT 1");
$fetch=mysql_fetch_object($query);

$shop=mysql_fetch_object(mysql_query("SELECT * FROM cred WHERE location='$fetch->location'"));
$owner=mysql_fetch_object(mysql_query("SELECT * FROM users WHERE username='$cred->owner'"));

if (strtolower($cred->owner) == strtolower($username)){
include_once"shopCP.php";
exit();
}


if (strip_tags($_POST['weapon_button']) && strip_tags($_POST['choose_weapon'])){
$choose_weapon = strip_tags($_POST['choose_weapon']);

if ($choose_weapon == "1"){
$price="10";
$weapon="Sig Sauer P229";
}elseif ($choose_weapon == "2"){
$price="20";
$weapon="Jackhammer automatic shotgun";
}elseif ($choose_weapon == "3"){
$price="30";
$weapon="Heckler und Koch MP-5k";


}elseif ($choose_weapon == "4"){
$price="60";
$weapon="FN SCAR";


}elseif ($choose_weapon == "5"){
$price="80";
$weapon="Browning M2HB";


}elseif ($choose_weapon == "6"){
$price="100";
$weapon="XM21-Sniper";

}

if ($price > $fetch->points){
echo "You do not have enough points";
}elseif ($price <= $fetch->points){

$newpoints=$fetch->points-$price;
if ($shop->owner != "0"){
$per=round($price / 3);
$owner_points = $owner->points + $per;
mysql_query("UPDATE users SET points='$owner_points' WHERE username='$shop->owner'");
mysql_query("UPDATE shop SET profit=profit+$per WHERE location='$fetch->location'");
}

mysql_query("UPDATE users SET points='$newpoints', weapon='$weapon' WHERE username='$username'");
echo "You successfully bought the $weapon";
}}

if (strip_tags($_POST['pro_button']) && strip_tags($_POST['buy_pro'])){
$buy_pro = strip_tags($_POST['buy_pro']);

if ($buy_pro == "1"){
$price="5000";
$protection="Doberman";
}elseif ($buy_pro == "2"){
$price="10000";
$protection="Body Guard";

}elseif ($buy_pro == "3"){
$price="100000";
$protection="Armoured Car";

}elseif ($buy_pro == "4"){
$price="600000";
$protection="House";


}elseif ($buy_pro == "5"){
$price="2000000";
$protection="Safehouse";

}elseif ($buy_pro == "6"){
$price="100";
$protection="Armoured Tank";
}

if ($price > $fetch->points){
echo "You do not have enough points";
}elseif ($price <= $fetch->points){
if ($shop->owner != "0"){
$per=round($price / 3);
$owner_points = $owner->points + $per;
mysql_query("UPDATE users SET points='$owner_points' WHERE username='$shop->owner'");
mysql_query("UPDATE shop SET profit=profit+$per WHERE location='$fetch->location'");
}
$newpoints=$fetch->points-$price;
mysql_query("UPDATE users SET points='$newpoints', protection='$protection' WHERE username='$username'");
echo "You successfully bought the $protection";
}}
if (strip_tags($_POST['plane_button']) && strip_tags($_POST['buy_plane'])){
$buy_plane = strip_tags($_POST['buy_plane']);

if ($buy_plane == "1"){
$price="500000";
$plane="Fokker";
}elseif ($buy_plane == "2"){
$price="1500000";
$plane="Boeing 777";

}elseif ($buy_plane == "3"){
$price="3000000";
$plane="LV-AZF";

}elseif ($buy_plane == "4"){
$price="6000000";
$plane="PR-GOC";


}elseif ($buy_plane == "6"){
$price="100";
$plane="Private Jet";
}

if ($price > $fetch->points){
echo "You do not have enough points";
}elseif ($price <= $fetch->points){
if ($shop->owner != "0"){
$per=round($price / 3);
$owner_points = $owner->points + $per;
mysql_query("UPDATE users SET points='$owner_points' WHERE username='$shop->owner'");
mysql_query("UPDATE shop SET profit=profit+$per WHERE location='$fetch->location'");
}

$newpoints=$fetch->points-$price;
mysql_query("UPDATE users SET points='$newpoints', plane='$plane' WHERE username='$username'");
echo "You successfully bought the $plane";
}}




?>

<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel=stylesheet href=includes/in.css type=text/css>
</head>


<body><form name="form1" method="post" action="">
  <table width="76%" border="0" align="center" cellpadding="0" cellspacing="3">
    <tr>
      <td valign="top"> <table width="100%" border="1" cellpadding="0" cellspacing="0" class=thinline rules=none>
          <tr>
            <td colspan="2" class="header"><center>
                Weapons</center></td>
          </tr>
          <tr bgcolor=black>
            <td height=1 colspan=4></td>
          </tr>
          <tr bgcolor=white>
            <td width="299" bgcolor="#000000" class=tip><div align="center">Weapon</div></td>
            <td width="270" bgcolor="#000000" class=tip>Price</td>
          </tr>
          <tr bgcolor=black>
            <td height=1 colspan=4></td>
          </tr>
          <tr>
            <td height="101" colspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="3">
                <tr>
                  <td width="20" height="10"><input name="choose_weapon" type="radio" value="6" checked onClick="this.document.img.src='images/under/pic1.bmp'"></td>
                  <td width="228">XM21-Sniper </td>
                  <td>&pound;100</td>
                  <td width="100" rowspan="5">&nbsp;</td>
                </tr>
                <tr>
                  <td height="21"><input type="radio" name="buy_pro" value="6" onClick="this.document.img.src='images/under/pic2.bmp'"></td>
                  <td height="21">Armoured Tank </td>
                  <td height="21">&pound;100</td>
                </tr>
                <tr>
                  <td height="21"><input type="radio" name="buy_plane" value="6" onClick="this.document.img.src='images/under/pic3.bmp'"></td>
                  <td height="21">Private Jet (Fly Every 10Mins)</td>
                  <td height="21">&pound;100</td>
                </tr>
                <tr>
                  <td height="8">&nbsp;</td>
                  <td height="8">&nbsp;</td>
                  <td height="8" colspan="2"><input name="weapon_button" type="submit" id="weapon_button" value="Buy Weapon"></td>
                  <td height="8">&nbsp;</td>
                  <td height="8">&nbsp;</td>
                  <td height="8" colspan="2"><input name="pro_button" type="submit" id="pro_button" value="Buy Protection"></td>
                <td height="8">&nbsp;</td>
                  <td height="8">&nbsp;</td>
                  <td height="8" colspan="2"><input name="plane_button" type="submit" id="plane_button" value="Buy Plane"></td>
                </tr>
              </table></td>
          </tr>
        </table></td>
    </tr>
<tr>
      <td valign="top"><table width="100%" border="1" cellpadding="0" cellspacing="0" class=thinline rules=none>
          <tr>
            <td colspan="2" class="header"><center>
                Protection </center></td>
          </tr>
          <tr bgcolor=black>
            <td height=1 colspan=4></td>
          </tr>
          <tr bgcolor=white>
            <td width="297" bgcolor="#000000" class=tip><div align="center">Protection</div></td>
            <td width="272" bgcolor="#000000" class=tip><div align="left">Price</div></td>
          </tr>
          <tr bgcolor=black>
            <td height=1 colspan=4></td>
          </tr>
          <tr>
            <td height="101" colspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="3">
                <tr>
                  <td width="20" height="10"><input name="buy_pro" type="radio" value="6" checked onClick="this.document.img1.src='images/under/pic6.bmp'"></td>
                  <td width="228">Armoured Tank</td>
                  <td>P;100</td>
                  <td width="100" rowspan="5">&nbsp;</td>
                </tr>
                <tr>
                  <td height="21"><input type="radio" name="buy_pro" value="2" onClick="this.document.img1.src='images/under/pic7.bmp'"></td>
                  <td height="21">Body Guard</td>
                  <td height="21">P;10,000</td>
                </tr>
                <tr>
                  <td height="21"><input type="radio" name="buy_pro" value="3" onClick="this.document.img1.src='images/under/pic8.bmp'"></td>
                  <td height="21">Armoured Car</td>
                  <td height="21">P;100,000</td>
                </tr>
                <tr>
                  <td height="20"><input type="radio" name="buy_pro" value="4" onClick="this.document.img1.src='images/under/pic9.bmp'"></td>
                  <td height="20">House</td>
                  <td height="20">P;600,000</td>
                </tr>
                <tr>
                  <td height="8"> <input type="radio" name="buy_pro" value="5" onClick="this.document.img1.src='images/under/pic10.bmp'"></td>
                  <td height="8">Safehouse</td>
                  <td width="122" height="8">P;2,000,000</td>
                </tr>
                <tr>
                  <td height="8">&nbsp;</td>
                  <td height="8">&nbsp;</td>
                  <td height="8" colspan="2"><input name="pro_button" type="submit" id="pro_button3" value="Buy"></td>
                </tr>
              </table></td>
          </tr>
        </table></td>
    </tr>
</table></td>
    </tr>
  </table>
