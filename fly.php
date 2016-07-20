<?php session_start(); include_once "includes/db_connect.php";  include_once "includes/functions.php"; logincheck();
$username=$_SESSION['username'];
include"includes/jail_check.php";
$query=mysql_query("SELECT * FROM users WHERE username='$username' LIMIT 1");
$fetch=mysql_fetch_object($query);
$query2=mysql_query("SELECT * FROM user_info WHERE username='$username'");
$fly_skill=mysql_fetch_object($query2);

$query1=mysql_query("SELECT * FROM airport WHERE location='$fetch->location' LIMIT 1");
$fetch1=mysql_fetch_object($query1);
$price=explode("-", $fetch1->travel_prices);
$prof=explode("-",$fetch1->profit);

if (strtolower($fetch1->owner) == strtolower($fetch->username)){
$cpanel=$_GET['cpanel'];
if ($cpanel == "yes"){ echo "<a href=fly.php>Back to airport</a>"; }else{  echo "<a href=?cpanel=yes>Airport control panel</a>"; }

if ($cpanel == "yes"){ include_once"airportCP.php"; exit(); }

}


if ($fetch->lasttravel > time()){

echo "You have recently traveled you must wait ".maketime($fetch->lasttravel).".";
exit();
}

if ($_POST['radio']){
$radio=strip_tags($_POST['radio']);

if (!ereg('[^0-9]',$radio)){

if ($radio == "1"){
$costs = $price[0];
$to = "England";


$new0=$prof[0]+$costs;
$update="$new0-$prof[1]-$prof[2]-$prof[3]-$prof[4]-$prof[5]";
/////DRUG PRICES///
$uk[0] = rand(51,104);
$uk[1] = rand(90,412);
$uk[2] = rand(68,296);
$uk[3] = rand(23,47);
$uk[4] = rand(2705,3312);
/////END DRUGS
$implodething = implode("-", $uk);

}elseif ($radio == "2"){
$costs = $price[1];
$to = "Japan";

$new1=$prof[1]+$costs;
$update="$prof[0]-$new1-$prof[2]-$prof[3]-$prof[4]-$prof[5]";

/////DRUGS
$japan[0] = rand(149,259);
$japan[1] = rand(113,582);
$japan[2] = rand(12,74);
$japan[3] = rand(82,150);
$japan[4] = rand(1700,2832);
///France///
$implodething = implode("-", $japan);
/////DRUGS


}elseif ($radio == "3"){
$costs = $price[2];
$to = "France";

$new2=$prof[2]+$costs;
$update="$prof[0]-$prof[1]-$new2-$prof[3]-$prof[4]-$prof[5]";
///////DRUGS
$France[0] = rand(31,301);
$France[1] = rand(80,397);
$France[2] = rand(23,118);
$France[3] = rand(90,123);
$France[4] = rand(316,812);

$implodething = implode("-", $France);
//////DRUGS

}elseif ($radio == "4"){
$costs = $price[3];
$to = "Usa";

$new3=$prof[3]+$costs;
$update="$prof[0]-$prof[1]-$prof[2]-$new3-$prof[4]-$prof[5]";

//////DRUGS
$usa[0] = rand(51,104);
$usa[1] = rand(90,412);
$usa[2] = rand(60,192);
$usa[3] = rand(98,116);
$usa[4] = rand(472,1003);
///China////
$implodething = implode("-", $usa);
//////DERUGS

}elseif ($radio == "5"){
$costs = $price[4];
$to = "China";

$new4=$prof[4]+$costs;
$update="$prof[0]-$prof[1]-$prof[2]-$prof[3]-$new4-$prof[5]";
///////DRUGDS
$China[0] = rand(78,112);
$China[1] = rand(170,194);
$China[2] = rand(118,132);
$China[3] = rand(110,506);
$China[4] = rand(1500,1703);

$implodething = implode("-", $China);
//////DRUGS

}elseif ($radio == "6"){
$costs = $price[5];
$to = "Canada";
$new5=$prof[5]+$costs;
$update="$prof[0]-$prof[1]-$prof[2]-$prof[3]-$prof[4]-$new5";

///////DRUGS
$Canada[0] = rand(70,159);
$Canada[1] = rand(33,68);
$Canada[2] = rand(110,191);
$Canada[3] = rand(12,19);
$Canada[4] = rand(1001,1308);
$implodething = implode("-", $Canada);
//////DRUGS


}
if ($costs > $fetch->money){
echo "You do not have £$costs";
}elseif ($costs <= $fetch->money){
if ($to == $fetch->location){
echo "You are already in this location";
}elseif ($to != $fetch->location){

if ($fetch1->owner == "0"){
$nmoney = $fetch->money - $costs;
$now=time() + 3600;
mysql_query("UPDATE users SET money='$nmoney',location='$to', lasttravel='$now' WHERE username='$username'");
echo "Welcome to $to";
mysql_query("UPDATE airport SET profit='$update' WHERE location='$fetch->location'");


}elseif ($fetch1->owner != "0"){

$nmoney = $fetch->money - $costs;
$ow = mysql_query("SELECT * FROM users WHERE username='$fetch1->owner'");
$ad = mysql_fetch_object($ow);

$good=$ad->money + $costs;
if ($fetch->plane == "None"){
$now = time() + 3600;
}elseif ($fetch->plane == "Fokker"){
$now = time() + 3000;
}elseif ($fetch->plane == "Boeing 777"){
$now = time() + 2600;
}elseif ($fetch->plane == "LV-AZF"){
$now = time() + 2000;
}elseif ($fetch->plane == "PR-GOC"){
$now = time() + 1500;
}elseif ($fetch->plane == "F-HSUN"){
$now = time() + 900;
}elseif ($fetch->plane == "Private Jet"){
$now = time() + 600;
}


$druggy=explode("-",$fetch->drugs);
if ($druggy[0] > "0"){ $drug_name="Hash";  $a = "1"; }
elseif ($druggy[1] > "0"){ $drug_name="Ectasy";  $a = "1"; }
elseif ($druggy[2] > "0"){ $drug_name="Cocaine"; $a = "1"; }
elseif ($druggy[3] > "0"){ $drug_name="Phencyclidine";  $a = "1"; }
elseif ($druggy[4] > "0"){ $drug_name="Amitriptyline"; $a = "1"; }

$event=rand(1,10);

if ($event == "5" && $a == "1"){
 echo "Shit you got found and put in jail for carying $drug_name";
$length=rand(60,140);
$length=time() + $length;
mysql_query("INSERT INTO `jail` (`id`,`username`, `time_left`,`reason`,`location`) VALUES ('', '$username', '$length', 'Carrying $drug_name', '$fetch->location');") or die (mysql_error());
exit();
}

////////////FIX THIS
$as=explode("-",$fetch->drugs);
if ($as[0] > "0"){ $new=rand(1,5); }
elseif ($as[1] > "0"){ $new=rand(1,5); }
elseif ($as[2] > "0"){ $new=rand(1,6); }
elseif ($as[3] > "0"){ $new=rand(1,7); }
elseif ($as[4] > "0"){ $new=rand(1,20); }
if ($fly_info->dealing > "0"){
if ($as[0] > "0" && $as[0] == "0" && $as[1] == "0" && $as[2] == "0" && $as[3] == "0" && $as[4] == "0" ){
$old=rand(1,5);

$old=$fly_info->dealing - $old;
mysql_query("UPDATE user_info SET dealing='$old' WHERE username='$username'");
 }
}



$new_d=$fly_info->dealing + $new;
if ($new_d >= "100"){
$new_d=100;
}

mysql_query("UPDATE user_info SET dealing='$new_d' WHERE username='$username'");
///////////FIX THIS

mysql_query("UPDATE users SET money='$nmoney',location='$to', lasttravel='$now', drugprices='$implodething' WHERE username='$username'");
mysql_query("UPDATE users SET money='$good' WHERE username='$fetch1->owner'");




echo "Welcome to $to";
mysql_query("UPDATE airport SET profit='$update' WHERE location='$fetch->location'");

}}}}}


?>





  <form name="form1" method="post" action="">
  <table width=348 border=1 align=center cellpadding="2" cellspacing=0 bordercolor="black"  class=thinline>
    <tr>
      <td colspan=2 background="includes/grad.jpg"><center class=bold>
          Fly
</center></td>
    </tr>
    <tr class=title>
      <td height="209" colspan=2><div align=center><img src="images/plane1.jpg" width="345" height="207"></div></td>
    </tr>
    <tr bgcolor=#FFFFFF>
      <td width="169" bgcolor="#000000" class=tip><div align=center>Country</div></td>
      <td bgcolor="#000000" class=tip><div align=center>Price</div></td>
    </tr>
    <tr class=text>
      <th height="32"><div align="left">
          <input name=radio type=radio value="1" id=radio10>
          <label id=label1 for=radio10>England</label>
        </div></th>
      <td width="123"> <?php echo "£$price[0]"; ?></td>
    </tr>
    <tr class=text>
      <th height="34"><div align="left">
          <input name=radio type=radio value="2" id=radio9>
          <label id=label2 for=radio9>Japan</label>
        </div></th>
      <td> <?php echo "£$price[1]"; ?></td>
    </tr>
    <tr class=text>
      <th height="33"><div align="left">
          <input name=radio type=radio value="3" id=radio8>
          <label id=label3 for=radio8>France</label>
        </div></th>
      <td><?php echo "£$price[2]"; ?> </td>
    </tr>
    <tr class=text>
      <th><div align="left">
          <input name=radio type=radio value="4" id=radio7>
          <label id=label4 for=radio7>Usa</label>
        </div></th>
      <td> <?php echo "£$price[3]"; ?></td>
    </tr>
    <tr class=text>
      <th><div align="left">
          <input name=radio type=radio value="5" id=radio6>
          <label id=label5 for=radio6>China</label>
        </div></th>
      <td> <?php echo "£$price[4]"; ?></td>
    </tr>
    <tr class=text>
      <th><div align="left">
          <input name=radio type=radio value="6" id=radio>
          <label id=label6 for=radio>Canada</label>
        </div></th>
      <td> <?php echo "£$price[5]"; ?></td>
    </tr>
    <tr class=title>
      <td><input name=travel_button type=submit class=submit id="travel_button" value=Fly></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
</form><BR><BR><BR>
<table width=411 cellspacing=1 cellpadding=1 border=0 bordercolor=black class=black align=center>
  <tr class=text>
    <td><div align=center>
        <?php if ($fetch1->owner == "0"){ echo "This airport is not owned."; }else{ echo "This airport is owned by $fetch1->owner"; } ?>
      </div></td>
  </tr>
</table>


  <center>
  <br>
  </center>