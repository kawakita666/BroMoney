<?php
session_start();
include_once "includes/db_connect.php";
include_once "includes/functions.php";
include_once"includes/jail_check.php";
logincheck();
echo "$style";

$username=$_SESSION['username'];
echo "$style"; 




$fetch= mysql_fetch_object(mysql_query("SELECT * FROM users WHERE username='$username'"));

if ($fetch->weapon == 'Sig Sauer P229'){

$price = '10000';

$the = 1;
}elseif ($fetch->weapon == 'Jackhammer automatic shotgun'){
$price = '50000';
$the = 1;
}elseif ($fetch->weapon == 'Heckler und Koch MP-5k'){
$price = '300000';
$the = 1;
}elseif ($fetch->weapon == 'FN SCAR'){
$price = '600000';
$the = 1;
}elseif ($fetch->weapon == 'Browning M2HB'){
$price = '1000000';
$the = 1;
}
////above is the guns
if ($fetch->protection == 'Doberman'){

$price2 = '5000';

$the = 2;
}elseif ($fetch->protection == 'Body Guard'){

$price2 = '10000';

$the = 2;
}elseif ($fetch->protection == 'Armoured Car'){

$price2 = '100000';

$the = 2;
}elseif ($fetch->protection == 'House'){

$price2 = '600000';

$the = 2;
}elseif ($fetch->protection == 'Safehouse'){

$price2 = '2000000';

$the = 2;
}
//////protection above
if ($fetch->plane == 'Fokker'){

$price3 = '500000';

$the = 3;
}elseif ($fetch->plane == 'Boeing 777'){

$price3 = '1500000';

$the = 3;
}elseif ($fetch->plane == 'LV-AZF'){

$price3 = '3000000';

$the = 3;
}elseif ($fetch->plane == 'PR-GOC'){

$price3 = '6000000';

$the = 3;
}elseif ($fetch->plane == 'F-HSUN'){
$price3 = '10000000';

$the = 3;
}
if ($the == "1"){
$do = 'weapon';
$do1 = $fetch->weapon;
}elseif ($the == "2"){
$do = 'protection';
$do1 = $fetch->protection;
}elseif ($the == "3"){
$do = 'plane';
$do1 = $fetch->plane;
}

$price = $price / 2;
$price2 = $price2 / 2;
$price3 = $price3 / 4;

$sell_pro=strip_tags($_POST['sell_pro']);
$sell_weapon=strip_tags($_POST['sell_weapon']);
$sell_plane=strip_tags($_POST['sell_plane']);

if (strip_tags($_POST['Submit'])){
if ($sell_pro == 'Yes' || $sell_weapon == 'Yes' || $sell_plane == 'Yes'){
if($sell_pro == "Yes"){
mysql_query("UPDATE users SET protection='None' WHERE username='$username'");
$bitty=$price2;
}
if($sell_weapon == "Yes"){
mysql_query("UPDATE users SET weapon='None' WHERE username='$username'");
$bitty2=$price;
}
if($sell_plane == "Yes"){
mysql_query("UPDATE users SET plane='None' WHERE username='$username'");
$bitty3=$price3;
}
$new_money1=$bitty+$bitty2+$bitty3;
$new_money = $fetch->money +$new_money1;
echo "You successfully sold the item(s) for $new_money1";
mysql_query("UPDATE users SET money='$new_money' WHERE username='$username'");
}}

?>






<html><head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="includes/in.css" rel="stylesheet" type="text/css">
</head>


<center> <body> 
<form name="form1" method="post" action="">
  <table width="84%" border="1" align="center" cellpadding="0" cellspacing="0" class=thinline rules=none>
    <tr>
      <td class=header><center>
         Market 
        </center></td>
    </tr>
	<tr bgcolor=black><td height=1 colspan=3></td></tr>
    <tr>
      <td height="21">
<table width="100%" border="0" cellspacing="3" cellpadding="0">
          <tr> 
            <td width="100%"><center>
                Weapon </center></td>
          </tr>
          <tr> 
            <td> <center>
                <?php if ($fetch->weapon == "None"){ echo "You do not have a weapon"; }else{ echo "You currently have a $fetch->weapon, i will take this off your hands for $price "; }  ?>
              </center></td>
          </tr>
          <tr> 
            <td><div align="center"> 
                <input name="sell_weapon" type="radio" value="No" checked>
                No 
                <input type="radio" name="sell_weapon" value="Yes">
                Yes</div></td>
          </tr>
          <tr> 
            <td>&nbsp;</td>
          </tr>
          <tr> 
            <td ><center>
                Protection </center></td>
          </tr>
          <tr> 
            <td> <center>
              </center></td>
          </tr>
          <tr> 
            <td><center>
                <?php if ($fetch->protection == "None"){ echo "You do not have any protection"; }else{ echo "You currently have a $fetch->protection, i will take this off your hands for $price2"; }  ?>
              </center></td>
          </tr>
          <tr> 
            <td><div align="center"> 
                <input name="sell_pro" type="radio" value="No" checked>
                No 
                <input type="radio" name="sell_pro" value="Yes">
                Yes</div></td>
          </tr>
          <tr> 
            <td>&nbsp;</td>
          </tr>
          <tr> 
            <td><center>
                <input type="submit" name="Submit" value="Submit">
              </center></td>
          </tr>
          <tr> 
            <td> <center>
              </center></td>
          </tr>
          <tr> 
            <td><center>
              </center></td>
          </tr>
          <tr> 
            <td><div align="center"> </div></td>
          </tr>
          <tr> 
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><div align="right"> </div></td>
          </tr>
        </table> </td>
    </tr>
  </table>
  </form>
</html>
<?php require_once "includes/footer.php"; ?>
