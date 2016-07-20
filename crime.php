<?php
session_start();
include_once "includes/db_connect.php";
include_once "includes/functions.php";
include_once "includes/jail_check.php";
logincheck();
$page="crime.php";




$username=$_SESSION['username'];
$radiobutton=$_POST['radiobutton'];
$above = mysql_query("SELECT * FROM users WHERE username='$username'");
$info = mysql_fetch_object($above);
$chance = explode("-", $info->crimechance);


if ($info->lastcrime > time()){
$left = $info->lastcrime - time();
echo "<center>You have done a crime recently you have to wait for $left seconds!</center>";
exit();
}



if ($_POST['submit']){

$suc = $chance[$radiobutton];
$ran = rand(1,100);


	if ($ran <= $suc){


if ($radiobutton == "0"){
  $win = rand(100,200);
  $success = $chance[0];
  $quote="<center>The child starts crying</center>";
}elseif ($radiobutton == "1"){
  $win = rand(20,40);
  $success = $chance[1];
  $quote="<center>You smash the coffee machine</center>";

}elseif ($radiobutton == "2"){
  $win = rand(500,1000);
  $success = $chance[2];
  $quote="<center>The old lady attempts to hit you, but she falls over doing so</center>";
}elseif ($radiobutton == "3"){
  $win = rand(1000,2000);
  $success = $chance[3];
  $quote="<center>The supermarket owner starts crying and hands over the cash</center>";
}elseif ($radiobutton == "4"){
  $win = rand(2000,4000);
  $success = $chance[4];
  $quote="<center>You compleate the job and your boss pays you well</center>";
}elseif ($radiobutton == "5"){
  $win = rand(4000,10000);
  $success = $chance[5];
  $quote="<center>The bank owner wets his pants.</center>";
}
$item_rand = rand(1,100);

$new_item = array('Weed seeds','Bandanna','Black boots','Bling','Chain','Yellow Pages','Tracking Device','Cheese Burger','Fries','Chicken Nuggets','Crisps','Curry','Fish');
$rand_item = rand(0,12);
$item_get=$new_item[$rand_item];
if ($item_rand >= "90"){

if ($item_get == "Weed seeds"){
$value="4000";
}elseif ($item_get == "Bandanna"){
$value="500";
}elseif ($item_get == "Black boots"){
$value="300";
}elseif ($item_get == "Bling"){
$value="3000";
}elseif ($item_get == "Chain"){
$value="3000";
}elseif ($item_get == "Yellow Pages"){
$value="10000";
}elseif ($item_get == "Tracking Device"){
$value="20000";
}elseif ($item_get == "Cheese Burger"){
$value="200";
}elseif ($item_get == "Fries"){
$value="110";
}elseif ($item_get == "Chicken Nuggets"){
$value="180";
}elseif ($item_get == "Crisps"){
$value="100";
}elseif ($item_get == "Curry"){
$value="500";
}elseif ($item_get == "Fish"){
$value="250";
}




echo "<center>Congratulations you got away with $item_get</center>";
mysql_query("INSERT INTO `items` ( `id` , `item` , `value`,`owner` )
VALUES (
'', '$item_get', '$value','$username'
)");

}else{
echo "<center>$quote well done! you got away with £$win!!</center>";
rankcheck();
$time= time() + 200;
$newrank=rand(1,10);


$n_money=$info->money+$win;

$new_rank=$info->rankpoints + rand(2,10);
mysql_query("UPDATE users SET money='$n_money', rankpoints='$new_rank' WHERE username='$username'");
mysql_query("UPDATE user_info SET crimes=crimes+1 WHERE username='$username'");
}



  }else{
  if ($radiobutton == "0"){
  $quote="<center>You start crying as the child kicks you in the privates</center>";
}elseif ($radiobutton == "1"){
$quote="<center>hot water starts pouring over your leg</center>";
}elseif ($radiobutton == "2"){

  $quote="<center>The old lady hits you and you run away</center>";
}elseif ($radiobutton == "3"){

  $quote="<center>The security gueards pounce on you</center>";
}elseif ($radiobutton == "4"){

  $quote="<center>The job fails and your boss gets angry</center>";
}elseif ($radiobutton == "5"){

  $quote="<center>You couldnt crack the safe, before the police came</center>";
}
rankcheck();



echo "<center>$quote Bad luck, you got away with Fuck all!</center>";
$new_rank = $info->rankpoints + rand(1,5);
mysql_query("UPDATE users SET rankpoints='$new_rank' WHERE username='$username'");
 mysql_query("UPDATE user_info SET crimes=crimes+1 WHERE username='$username'");
$reason = "Crime";
require_once"includes/failed.php";
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

	if($chance[0] == 1){$chance[3] = 0;}
	elseif(($chance[0] >= 1) && ($chance[0] <= 2)){$chance[3] = rand(0,$chance[0]);}
	elseif(($chance[0] >= 3) && ($chance[0] <= 9)){$chance[3] = rand(7,$chance[0]);}
	elseif(($chance[0] >= 10) && ($chance[0] <= 17)){$chance[3] = rand(14,$chance[0]);}
	elseif(($chance[0] >= 18) && ($chance[0] <= 37)){$chance[3] = rand(35,$chance[0]);}
	elseif(($chance[0] >= 38) && ($chance[0] <= 76)){$chance[3] = rand(60,$chance[0]);}
	elseif($chance[0] >= 77){$chance[3] = rand(70,$chance[0]);}
//echo
	if($chance[0] == 1){$chance[4] = 0;}
	elseif(($chance[0] >= 1) && ($chance[0] <= 3)){$chance[4] = rand(0,$chance[0]);}
	elseif(($chance[0] >= 4) && ($chance[0] <= 11)){$chance[4] = rand(9,$chance[0]);}
	elseif(($chance[0] >= 12) && ($chance[0] <= 19)){$chance[4] = rand(16,$chance[0])-14;}
	elseif(($chance[0] >= 20) && ($chance[0] <= 39)){$chance[4] = rand(28,$chance[0])-14;}
	elseif(($chance[0] >= 40) && ($chance[0] <= 79)){$chance[4] = rand(69,$chance[0])-14;}
	elseif($chance[0] >= 80){$chance[4] = rand(75,$chance[0])-14;}


//echo
	if($chance[0] == 1){$chance[5] = 0;}
	elseif(($chance[0] >= 1) && ($chance[0] <= 3)){$chance[5] = rand(0,$chance[0]);}
	elseif(($chance[0] >= 4) && ($chance[0] <= 11)){$chance[5] = rand(9,$chance[0]);}
	elseif(($chance[0] >= 12) && ($chance[0] <= 19)){$chance[5] = rand(16,$chance[0])-14;}
	elseif(($chance[0] >= 20) && ($chance[0] <= 39)){$chance[5] = rand(28,$chance[0])-14;}
	elseif(($chance[0] >= 40) && ($chance[0] <= 79)){$chance[5] = rand(69,$chance[0])-14;}
	elseif($chance[0] >= 80){$chance[5] = rand(75,$chance[0])-14;}


if($chance[0] > 100){
		$chance[0] = 100;
	}
	if($chance[1] > 100){
		$chance[1] = 100;
	}
	if($chance[2] > 100){
		$chance[2] = 100;
	}
	if($chance[3] > 100){
		$chance[3] = 100;
	}
	if($chance[4] > 100){
		$chance[4] = 100;
	}
	if($chance[5] > 100){
		$chance[5] = 100;
	}



	$chance[0]++;
	if ($chance[0] > 110){
		$chance[0] = 110;
	}

$arrayrates = array($chance[0], $chance[1], $chance[2], $chance[3], $chance[4], $chance[5]);
	$newrates = implode("-", $arrayrates);
	$tim = time() + rand(60,200);
	mysql_query("UPDATE users SET crimechance='$newrates',lastcrime='$tim' WHERE username='$username'");
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
  <p>&nbsp;</p>
  <table width="53%" height="127" border="1" align="center" cellpadding="2" cellspacing="0" bordercolor=black class=thinline>
    <!--DWLayoutTable-->
    <tr>
      <td colspan="3" background="includes/grad.jpg"><center>
          <strong>Crimes</strong> </center></td>
    </tr>
    <tr bgcolor="#000000">
      <td height="8" colspan="2" valign="top" > <div align="center"> <img src="images/crimes/main.jpg" name="img" width="150" height="150" border="0" id="img">
        </div></td>
    </tr>
    <tr bgcolor="#000000">
      <td width="67%" height="9" valign="top"  > <input type="radio" name="radiobutton" value="0" onClick="this.document.img.src='images/crimes/phone_boy.jpg'">
        Rob a young child </td>
      <td width="33%" valign="top" ><?php echo "$chance[0]"; ?>&nbsp;%</td>
    </tr>
    <tr bgcolor="#000000">
      <td height="17" valign="top" ><input type="radio" name="radiobutton" value="1" onClick="this.document.img.src='images/crimes/coffee.jpg'">
        Smash a coffee machine </td>
      <td width="33%" valign="top"><?php echo "$chance[1]"; ?>%</td>
    </tr>
    <tr bgcolor="#000000">
      <td height="4" valign="top"  > <input type="radio" name="radiobutton" value="2" onClick="this.document.img.src='images/crimes/old_lady.jpg'">
        Rob a old lady </td>
      <td width="33%" valign="top" ><?php echo "$chance[2]"; ?>%</td>
    </tr>
    <tr bgcolor="#000000">
      <td height="4" valign="top"  > <input type="radio" name="radiobutton" value="3" onClick="this.document.img.src='images/crimes/tesco.jpg'">
        Hold up a supermarket</td>
      <td width="33%" valign="top" ><?php echo "$chance[3]"; ?>%</td>
    </tr>
    <tr bgcolor="#000000">
      <td height="4" valign="top"  ><input type="radio" name="radiobutton" value="4" onClick="this.document.img.src='images/crimes/ass.jpg'">
        Hire out an assassin</td>
      <td width="33%" valign="top" ><?php echo "$chance[4]"; ?>%</td>
    </tr>
    <tr bgcolor="#000000">
      <td height="4" valign="top"  > <input type="radio" name="radiobutton" value="5" onClick="this.document.img.src='images/crimes/bank_vault.jpg'">
        Rob a bank</td>
      <td width="33%" valign="top" ><?php echo "$chance[5]"; ?>%</td>
    </tr>
    <tr bgcolor="#000000">
      <td height="29" valign="top" ><!--DWLayoutEmptyCell-->&nbsp;</td>
      <td width="33%" valign="top"> <input name="submit" type="submit" id="submit" value="Lets do it.">
      </td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</html>