<?php
session_start();
include_once "includes/db_connect.php";
include_once "includes/functions.php";
include_once"includes/jail_check.php";
echo "$style";
include_once"probe.php";
$page="boat.php";

$username=$_SESSION['username'];
$radiobutton=$_POST['radiobutton'];
$above = mysql_query("SELECT * FROM users WHERE username='$username'");
$info = mysql_fetch_object($above);
$chance = explode("-", $info->boatchance);


if ($info->lastboat > time()){
$left = $info->lastboat - time();
echo "Mate, Take A Break, Wait Another $left seconds!";
exit();
}



if ($_POST['submit']){

$suc = $chance[$radiobutton];
$ran = rand(1,100);
	if ($ran <= $suc){


if ($radiobutton == "0"){
  $success = $chance[0];
     $boats = array('Aquaquick DS-280','Apreamare 10m');

 $quote="You Get A Boat And Make A Break.";
 ////NEXT RADIO
}elseif ($radiobutton == "1"){
  $success = $chance[1];
     $boats = array('Aquaquick DS-280','Apreamare 10m','Back Cove 26','Rodman 64');

$quote="You got away with the boat";
  ////NExT RADIO
}elseif ($radiobutton == "2"){
  $success = $chance[2];
     $boats = array('Aquaquick DS-280','Apreamare 10m','Back Cove 26','Rodman 64','Sunseeker 827','World Cat 250 SF');

  $quote="The salesperson just sits there and laughs";


}
$win=rand(0,11);

echo "$quote well done! you got away with $boats[$win]!!";
mysql_query("UPDATE user_info SET boat=boat+1 WHERE username='$username'");

$time= time() + (60*5);
$newrank=rand(1,20);
$damage=rand(1,50);

 if ($boats[$win] == "Aquaquick DS-280"){
  $max="10000";
  if ($damage == "0"){
  $for=$max;
  }elseif ($damage == "50"){
  $for = "0";
  }else{
$for = $max / $damage *2;
  }
  }

//////////////////////////////////////


 if ($boats[$win] == "Apreamare 10m"){
  $max="60000";
  if ($damage == "0"){
  $for=$max;
  }elseif ($damage == "50"){
  $for = "0";
  }else{
$for = $max / $damage *2;
  }
  }

/////////////////////////////////////////



 if ($boats[$win] == "Back Cove 26"){
  $max="100000";
  if ($damage == "0"){
  $for=$max;
  }elseif ($damage == "50"){
  $for = "0";
  }else{
$for = $max / $damage *2;
  }
  }



////////////////////////////////////




 if ($boats[$win] == "Rodman 64"){
  $max="130000";
  if ($damage == "0"){
  $for=$max;
  }elseif ($damage == "50"){
  $for = "0";
  }else{
$for = $max / $damage *2;
  }
  }

//////////////////////////////////




 if ($boats[$win] == "Sunseeker 827"){
  $max="160000";
  if ($damage == "0"){
  $for=$max;
  }elseif ($damage == "50"){
  $for = "0";
  }else{
$for = $max / $damage *2;
  }
  }


/////////////////////////////////////
if ($boats[$win] == "World Cat 250 SF"){
  $max="180000";
  if ($damage == "0"){
  $for=$max;
  }elseif ($damage == "50"){
  $for = "0";
  }else{
$for = $max / $damage *2;
  }
  }


$for=round($for);
//print "$for!!";
mysql_query("INSERT INTO `boats` ( `id` , `owner` , `boat` , `damage`,`origion`,`location`,`worth`)
VALUES (
'', '$username', '$boats[$win]', '$damage','$info->location','$info->location','$for'
)");

mysql_query("UPDATE users SET rankpoints=rankpoints+$newrank WHERE username='$username'");


  }else{
  if ($radiobutton == "0"){
  $quote="The old man scared you away with his walking stick!";
}elseif ($radiobutton == "1"){
$quote="The police were everywhere";
}elseif ($radiobutton == "2"){
$quote="The boats were locked";
}
$reason = "BTA";
require_once"includes/failed.php";
echo "You got away with jack all because $quote";
mysql_query("UPDATE user_info SET boat=boat+1 WHERE username='$username'");


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
	elseif($chance[0] >= 75){$chance[1] = rand(65,$chance[0]);}

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
	mysql_query("UPDATE users SET boatchance='$newrates',lastboat='$tim'  WHERE username='$username'");
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
          <strong>Choose a GrandTheftBoat:</strong> </center></td>
    </tr>
    <tr bgcolor="#cccccc">
      <td height="8" colspan="2" valign="top" >
        <div align="center"><img src="images/boat/main.jpg" name="img" width="150" height="150" border="0" id="img">
        </div></td>
    </tr>
    <tr bgcolor="#999999">
      <td width="67%" height="9" valign="top" bgcolor="#999999" ><input type="radio" name="radiobutton" value="0" onClick="this.document.img.src='images/boat/house.jpg'">
        Steal from a rich mans house </td>
      <td width="33%" valign="top" bgcolor="#999999"><?php echo "$chance[0]"; ?>&nbsp;%</td>
    </tr>
    <tr bgcolor="#cccccc">
      <td height="17" valign="top" > <input type="radio" name="radiobutton" value="1" onClick="this.document.img.src='images/boat/streets.jpg'">
        Jack from harbor</td>
      <td width="33%" valign="top"><?php echo "$chance[1]"; ?>%</td>
    </tr>
    <tr bgcolor="#999999">
      <td height="8" valign="top" > <input type="radio" name="radiobutton" value="2" onClick="this.document.img.src='images/boat/dealership.jpg'">
        Jack from a dealership</td>
      <td width="33%" valign="top"><?php echo "$chance[2]"; ?>%</td>
    </tr>
    <tr bgcolor="#cccccc">
      <td height="29" valign="top" ><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td width="33%" valign="top"> <input name="submit" type="submit" id="submit" value="Lets do it.">
      </td>
    </tr>
  </table>
  </form>
</html>
<?php require_once "includes/footer.php"; ?>