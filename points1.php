<?php
session_start();
 include_once "includes/db_connect.php"; include_once "includes/functions.php"; logincheck();
$username=$_SESSION['username'];

$query=mysql_query("SELECT * FROM users WHERE username='$username' LIMIT 1");
$fetch=mysql_fetch_object($query);

$shop1=mysql_fetch_object(mysql_query("SELECT * FROM shop1 WHERE location='$fetch->location'"));
$owner=mysql_fetch_object(mysql_query("SELECT * FROM users WHERE username='$shop1->owner'"));

if (strtolower($shop1->owner) == strtolower($username)){
include_once"shop1CP.php";
exit();
}


if (strip_tags($_POST['weapon_button']) && strip_tags($_POST['choose_weapon'])){
$choose_weapon = strip_tags($_POST['choose_weapon']);

if ($choose_weapon == "1"){
$cred="15";
$weapon="Sig Sauer P229";
}elseif ($choose_weapon == "2"){
$cred="25";
$weapon="Jackhammer automatic shotgun";
}elseif ($choose_weapon == "3"){
$cred="32";
$weapon="Heckler und Koch MP-5k";


}elseif ($choose_weapon == "4"){
$cred="60";
$weapon="FN SCAR";


}elseif ($choose_weapon == "5"){
$cred="100";
$weapon="Browning M2HB";

}

if ($cred > $fetch->points){
echo "You do not have enough points";
}elseif ($cred <= $fetch->points){

$newpoints=$fetch->points-$cred;
if ($shop1->owner != "0"){
$per=round($cred / 3);
$owner_points = $owner->points + $per;
mysql_query("UPDATE users SET points='$newpoints' WHERE username='$shop1->owner'");
mysql_query("UPDATE shop1 SET profit=profit+$per WHERE location='$fetch->location'");
}

mysql_query("UPDATE users SET points='$points', weapon='$weapon' WHERE username='$username'");
echo "You successfully bought the $weapon";
}}

if (strip_tags($_POST['pro_button']) && strip_tags($_POST['buy_pro'])){
$buy_pro = strip_tags($_POST['buy_pro']);

if ($buy_pro == "1"){
$cred="10";
$protection="Doberman";
}elseif ($buy_pro == "2"){
$cred="20";
$protection="Body Guard";

}elseif ($buy_pro == "3"){
$cred="40";
$protection="Armoured Car";

}elseif ($buy_pro == "4"){
$cred="50";
$protection="House";


}elseif ($buy_pro == "5"){
$cred="90";
$protection="Safehouse";
}

if ($cred > $fetch->points){
echo "You do not have enough points";
}elseif ($cred <= $fetch->points){
if ($shop1->owner != "0"){
$per=round($cred / 3);
$owner_points = $owner->points + $per;
mysql_query("UPDATE users SET points='$newpoints' WHERE username='$shop1->owner'");
mysql_query("UPDATE shop1 SET profit=profit+$per WHERE location='$fetch->location'");
}
$newpoints=$fetch->points-$cred;
mysql_query("UPDATE users SET points='$newpoints', protection='$protection' WHERE username='$username'");
echo "You successfully bought the $protection";
}}
if (strip_tags($_POST['plane_button']) && strip_tags($_POST['buy_plane'])){
$buy_plane = strip_tags($_POST['buy_plane']);

if ($buy_plane == "1"){
$cred="10";
$plane="Fokker";
}elseif ($buy_plane == "2"){
$cred="20";
$plane="Boeing 777";

}elseif ($buy_plane == "3"){
$cred="40";
$plane="LV-AZF";

}elseif ($buy_plane == "4"){
$cred="50";
$plane="PR-GOC";


}elseif ($buy_plane == "5"){
$cred="100";
$plane="F-HSUN";
}

if ($cred > $fetch->points){
echo "You do not have enough points";
}elseif ($cred <= $fetch->points){
if ($shop1->owner != "0"){
$per=round($cred / 3);
$owner_points = $owner->points + $per;
mysql_query("UPDATE users SET points='$newpoints' WHERE username='$shop1->owner'");
mysql_query("UPDATE shop1 SET profit=profit+$per WHERE location='$fetch->location'");
}

$newpoints=$fetch->points-$cred;
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
            <td width="270" bgcolor="#000000" class=tip>cred</td>
          </tr>
          <tr bgcolor=black>
            <td height=1 colspan=4></td>
          </tr>
          <tr>
            <td height="101" colspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="3">
                <tr>
                  <td width="20" height="10"><input name="choose_weapon" type="radio" value="1" checked onClick="this.document.img.src='images/under/pic1.bmp'"></td>
                  <td width="228">Sig Sauer P229 </td>
                  <td>15</td>
                  <td width="100" rowspan="5">&nbsp;</td>
                </tr>
                <tr>
                  <td height="21"><input type="radio" name="choose_weapon" value="2" onClick="this.document.img.src='images/under/pic2.bmp'"></td>
                  <td height="21">Jackhammer automatic shotgun </td>
                  <td height="21">25</td>
                </tr>
                <tr>
                  <td height="21"><input type="radio" name="choose_weapon" value="3" onClick="this.document.img.src='images/under/pic3.bmp'"></td>
                  <td height="21">Heckler und Koch MP-5k</td>
                  <td height="21">32</td>
                </tr>
                <tr>
                  <td height="20"><input type="radio" name="choose_weapon" value="4" onClick="this.document.img.src='images/under/pic4.bmp'"></td>
                  <td height="20">FN SCAR</td>
                  <td height="20">60</td>
                </tr>
                <tr>
                  <td height="8"> <input type="radio" name="choose_weapon" value="5" onClick="this.document.img.src='images/under/pic5.bmp'"></td>
                  <td height="8">Browning M2HB </td>
                  <td width="122" height="8">100</td>
                </tr>
                <tr>
                  <td height="8">&nbsp;</td>
                  <td height="8">&nbsp;</td>
                  <td height="8" colspan="2"><input name="weapon_button" type="submit" id="weapon_button" value="Buy"></td>
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
            <td width="272" bgcolor="#000000" class=tip><div align="left">cred</div></td>
          </tr>
          <tr bgcolor=black>
            <td height=1 colspan=4></td>
          </tr>
          <tr>
            <td height="101" colspan="2" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="3">
                <tr>
                  <td width="20" height="10"><input name="buy_pro" type="radio" value="1" checked onClick="this.document.img1.src='images/under/pic6.bmp'"></td>
                  <td width="228">Doberman</td>
                  <td>&pound;5,000</td>
                  <td width="100" rowspan="5">&nbsp;</td>
                </tr>
                <tr>
                  <td height="21"><input type="radio" name="buy_pro" value="2" onClick="this.document.img1.src='images/under/pic7.bmp'"></td>
                  <td height="21">Body Guard</td>
                  <td height="21">&pound;10,000</td>
                </tr>
                <tr>
                  <td height="21"><input type="radio" name="buy_pro" value="3" onClick="this.document.img1.src='images/under/pic8.bmp'"></td>
                  <td height="21">Armoured Car</td>
                  <td height="21">&pound;100,000</td>
                </tr>
                <tr>
                  <td height="20"><input type="radio" name="buy_pro" value="4" onClick="this.document.img1.src='images/under/pic9.bmp'"></td>
                  <td height="20">House</td>
                  <td height="20">&pound;600,000</td>
                </tr>
                <tr>
                  <td height="8"> <input type="radio" name="buy_pro" value="5" onClick="this.document.img1.src='images/under/pic10.bmp'"></td>
                  <td height="8">Safehouse</td>
                  <td width="122" height="8">&pound;2,000,000</td>
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
<br><center><table class=thinline width=25% cellspacing=0 cellpadding=2 rules=none><tr><td background=images/topic.jpg align=center><font color=#FFFFFF>shop1 Stats</font></td></tr>
<tr><td bgcolor=black height=1></td></tr>
<tr><td>


<center><?php if ($shop1->owner == "0"){ echo "This shop1 is not owned"; }else{ echo "This shop1 is owned by <a href='profile.php?viewuser=$shop1->owner'>$shop1->owner</a>. <br>".makecomma($slots->max).""; } ?>
<br>
</td></tr></table><br></center>
