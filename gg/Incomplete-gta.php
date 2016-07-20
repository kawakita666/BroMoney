<?php
session_start();
include_once "includes/db_connect.php";
include_once "includes/functions.php";
include_once"includes/jail_check.php";
logincheck();
echo "$style";
$page="jack.php";


$username=$_SESSION['username'];
$radiobutton=$_POST['radiobutton'];
$above = mysql_query("SELECT * FROM users WHERE username='$username'");
$info = mysql_fetch_object($above);
$chance = explode("-", $info->gtachance);


if ($info->lastgta > time()){
$left = $info->lastgta - time();
echo "$left seconds left before you can steal a car again.";
exit();
}



if ($_POST['submit']){

$suc = $chance[$radiobutton];
$ran = rand(1,100);
	if ($ran <= $suc){


if ($radiobutton == "0"){
  $success = $chance[0];
     $cars = array('Renault Clio Sport','Audi A3','Bmw m3','Cadilac Escelade','Nissan Skyline','Porsche 911','GT 40','Lamborghini Murcielago','Ferrari Enzo','TVR Speed 12','Mclaren f1','Bugatti Veyron');

 $quote="You successfully stole the car.";
 ////NEXT RADIO
}elseif ($radiobutton == "1"){
  $success = $chance[1];
         $cars = array('Renault Clio Sport','Audi A3','Bmw m3','Cadilac Escelade','Nissan Skyline','Porsche 911','GT 40','Lamborghini Murcielago','Ferrari Enzo','TVR Speed 12','Mclaren f1','Bugatti Veyron');

$quote="You successfully stole the car.";
  ////NExT RADIO
}elseif ($radiobutton == "2"){
  $success = $chance[2];
         $cars = array('Renault Clio Sport','Audi A3','Bmw m3','Cadilac Escelade','Nissan Skyline','Porsche 911','GT 40','Lamborghini Murcielago','Ferrari Enzo','TVR Speed 12','Mclaren f1','Bugatti Veyron');

  $quote="You successfully stole the car.";


}
$win=rand(0,11);
if ($cars[$win] == "Renault Clio Sport"){ $img = "images/cars/renaultcliosport.jpg"; }
elseif ($cars[$win] == "Audi A3"){ $img = "images/cars/audia3.jpg"; }
elseif ($cars[$win] == "Bmw m3"){ $img = "images/cars/bmw-m3.jpg"; }
elseif ($cars[$win] == "Cadilac Escelade"){ $img = "images/cars/esacallade.gif"; }
elseif ($cars[$win] == "Nissan Skyline"){ $img = "images/cars/nissan.jpg"; }
elseif ($cars[$win] == "Porsche 911"){ $img = "images/cars/porsche.jpg"; }
elseif ($cars[$win] == "GT 40"){ $img = "images/cars/fordgt40.jpg"; }
elseif ($cars[$win] == "Lamborghini Murcielago"){ $img = "images/cars/land.jpg"; }
elseif ($cars[$win] == "Ferrari Enzo"){ $img = "images/cars/ferrarienzo.jpg"; }
elseif ($cars[$win] == "TVR Speed 12"){ $img = "images/cars/tvr12.jpg"; }
elseif ($cars[$win] == "Mclaren f1"){ $img = "images/cars/mcf1.jpg"; }
elseif ($cars[$win] == "Bugatti Veyron"){ $img = "images/cars/BugattiVeyron.jpg"; }



echo "$quote well done! you got away with <a href='$img'>$cars[$win]</a> !!";
mysql_query("UPDATE user_info SET gtas=gtas+1 WHERE username='$username'");

$time= time() + (60*5);
$newrank=rand(1,20);
$damage=rand(1,50);

 if ($cars[$win] == "Renault Clio Sport"){
  $max="5000";
  if ($damage == "0"){
  $for=$max;
  }elseif ($damage == "50"){
  $for = "0";
  }else{
$for = $max / $damage *2;
  }
  }

//////////////////////////////////////


 if ($cars[$win] == "Audi A3"){
  $max="6000";
  if ($damage == "0"){
  $for=$max;
  }elseif ($damage == "50"){
  $for = "0";
  }else{
$for = $max / $damage *2;
  }
  }

/////////////////////////////////////////



 if ($cars[$win] == "Bmw m3"){
  $max="10000";
  if ($damage == "0"){
  $for=$max;
  }elseif ($damage == "50"){
  $for = "0";
  }else{
$for = $max / $damage *2;
  }
  }



////////////////////////////////////




 if ($cars[$win] == "Cadilac Escelade"){
  $max="13000";
  if ($damage == "0"){
  $for=$max;
  }elseif ($damage == "50"){
  $for = "0";
  }else{
$for = $max / $damage *2;
  }
  }

//////////////////////////////////




 if ($cars[$win] == "Nissan Skyline"){
  $max="16000";
  if ($damage == "0"){
  $for=$max;
  }elseif ($damage == "50"){
  $for = "0";
  }else{
$for = $max / $damage *2;
  }
  }


/////////////////////////////////////
if ($cars[$win] == "Porsche 911"){
  $max="18000";

  if ($damage == "0"){
  $for=$max;
  }elseif ($damage == "50"){
  $for = "0";
  }else{
$for = $max / $damage *2;
  }
  }


/////////////////////////////////////
if ($cars[$win] == "GT 40"){
  $max="20000";
  if ($damage == "0"){
  $for=$max;
  }elseif ($damage == "50"){
  $for = "0";
  }else{
$for = $max / $damage *2;
  }
  }


/////////////////////////////////////
if ($cars[$win] == "Lamborghini Murcielago"){
  $max="25000";
  if ($damage == "0"){
  $for=$max;
  }elseif ($damage == "50"){
  $for = "0";
  }else{
$for = $max / $damage *2;
  }
  }


/////////////////////////////////////
if ($cars[$win] == "Ferrari Enzo"){
  $max="29000";
  if ($damage == "0"){
  $for=$max;
  }elseif ($damage == "50"){
  $for = "0";
  }else{
$for = $max / $damage *2;
  }
  }


/////////////////////////////////////
if ($cars[$win] == "TVR Speed 12"){
  $max="32000";
  if ($damage == "0"){
  $for=$max;
  }elseif ($damage == "50"){
  $for = "0";
  }else{
$for = $max / $damage *2;
  }
  }


/////////////////////////////////////
if ($cars[$win] == "Mclaren f1"){
  $max="37000";
  if ($damage == "0"){
  $for=$max;
  }elseif ($damage == "50"){
  $for = "0";
  }else{
$for = $max / $damage *2;
  }
  }


/////////////////////////////////////
if ($cars[$win] == "Bugatti Veyron"){
  $max="43000";
  if ($damage == "0"){
  $for=$max;
  }elseif ($damage == "50"){
  $for = "0";
  }else{
$for = $max / $damage *2;
  }
  }
/////////////////////////////////////


$for=round($for);
//print "$for!!";
mysql_query("INSERT INTO `garage` ( `id` , `owner` , `car` , `damage`,`origion`,`location`,`worth`)
VALUES (
'', '$username', '$cars[$win]', '$damage','$info->location','$info->location','$for'
)");


mysql_query("UPDATE users SET rankpoints=rankpoints+$newrank WHERE username='$username'");


  }else{
  if ($radiobutton == "0"){
  $quote="The old man scared you away with his walking stick!";
}elseif ($radiobutton == "1"){
$quote="The police were everywhere";
}elseif ($radiobutton == "2"){
$quote="The cars were locked";
}
$reason = "GTA";
require_once"includes/failed.php";
echo "You got away with jack all because $quote";
mysql_query("UPDATE user_info SET gtas=gtas+1 WHERE username='$username'");



}
if($chance[0] == 1){$chance[1] = 1;}
	elseif(($chance[0] >= 1) && ($chance[0] <= 2)){$chance[0] = rand(1,$chance[0]);}
	elseif(($chance[0] >= 2) && ($chance[0] <= 10)){$chance[0] = rand(10,$chance[0]);}
	elseif(($chance[0] >= 5) && ($chance[0] <= 25)){$chance[0] = rand(25,$chance[0]);}
	elseif(($chance[0] >= 18) && ($chance[0] <= 36)){$chance[0] = rand(36,$chance[0]);}
	elseif(($chance[0] >= 25) && ($chance[0] <= 49)){$chance[0] = rand(49,$chance[0]);}
        elseif(($chance[0] >= 36) && ($chance[0] <= 58)){$chance[0] = rand(58,$chance[0]);}
        elseif(($chance[0] >= 49) && ($chance[0] <= 55)){$chance[0] = rand(55,$chance[0]);}
	elseif($chance[0] >= 55){$chance[0] = rand(55,$chance[0]);}


	if($chance[0] == 1){$chance[1] = 0;}
	elseif(($chance[0] >= 1) && ($chance[0] <= 2)){$chance[1] = rand(0,$chance[0]);}
	elseif(($chance[0] >= 3) && ($chance[0] <= 8)){$chance[1] = rand(7,$chance[0]);}
	elseif(($chance[0] >= 9) && ($chance[0] <= 15)){$chance[1] = rand(14,$chance[0]);}
	elseif(($chance[0] >= 16) && ($chance[0] <= 34)){$chance[1] = rand(33,$chance[0]);}
	elseif(($chance[0] >= 35) && ($chance[0] <= 74)){$chance[1] = rand(45,$chance[0]);}
	elseif($chance[0] >= 75){$chance[1] = rand(50,$chance[0]);}

	if($chance[0] == 1){$chance[2] = 0;}
	elseif(($chance[0] >= 1) && ($chance[0] <= 2)){$chance[2] = rand(0,$chance[0]);}
	elseif(($chance[0] >= 3) && ($chance[0] <= 8)){$chance[2] = rand(6,$chance[0]);}
	elseif(($chance[0] >= 9) && ($chance[0] <= 15)){$chance[2] = rand(13,$chance[0]);}
	elseif(($chance[0] >= 16) && ($chance[0] <= 34)){$chance[2] = rand(32,$chance[0]);}
	elseif(($chance[0] >= 35) && ($chance[0] <= 74)){$chance[2] = rand(60,$chance[0]);}
	elseif($chance[0] >= 75){$chance[2] = rand(85,$chance[0]);}


if($chance[0] > 50){
		$chance[0] = 40;
	}
	if($chance[1] > 49){
		$chance[1] = 40;
	}
	if($chance[2] > 48){
		$chance[2] = 40;
	}





	$chance[0]++;
	if ($chance[0] > 50){
		$chance[0] = 40;
	}

$arrayrates = array($chance[0], $chance[1], $chance[2]);
	$newrates = implode("-", $arrayrates);
	$tim = time() + (60*5);
	mysql_query("UPDATE users SET gtachance='$newrates',lastgta='$tim'  WHERE username='$username'");
		exit;

}

?>






<html><head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel=stylesheet href=includes/in.css type=text/css>
</head>


<center> <body>
<form name="form1" method="post" action="">
  <table width="53%" height="127" border="1" align="center" cellpadding="2" cellspacing="0" bordercolor=black class=thinline>
    <!--DWLayoutTable-->
    <tr>
      <td colspan="3" background="includes/grad.jpg"><center>
          <strong>Choose a Gta:</strong> </center></td>
    </tr>
    <tr bgcolor="#999999">
      <td width="67%" height="9" valign="top" bgcolor="#999999" ><input type="radio" name="radiobutton" value="0" onClick="this.document.img.src='images/jack/house.gif'">
        Steal from streets</td>
      <td width="33%" valign="top" bgcolor="#999999"><?php echo "$chance[0]"; ?>&nbsp;%</td>
    </tr>
    <tr bgcolor="#cccccc">
      <td height="17" valign="top" > <input type="radio" name="radiobutton" value="1" onClick="this.document.img.src='images/jack/streets.gif'">
        Steal from public parking lot</td>
      <td width="33%" valign="top"><?php echo "$chance[1]"; ?>%</td>
    </tr>
    <tr bgcolor="#999999">
      <td height="8" valign="top" > <input type="radio" name="radiobutton" value="2" onClick="this.document.img.src='images/jack/dealership.gif'">
        Steal form private praking lot</td>
      <td width="33%" valign="top"><?php echo "$chance[2]"; ?>%</td>
    </tr>
    <tr bgcolor="#cccccc">
      <td height="29" valign="top" ><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td width="33%" valign="top"> <input name="submit" type="submit" id="submit" value="Jack">
      </td>
    </tr>
  </table>
  </form>
</html>
