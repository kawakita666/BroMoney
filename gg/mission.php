<?php
session_start();
include_once "includes/db_connect.php";
include_once "includes/functions.php";
include_once "includes/jail_check.php";
logincheck();
$page="mission.php";
$username=$_SESSION['username'];
$fetch=mysql_fetch_object(mysql_query("SELECT * FROM users WHERE username='$username'"));




echo "<link rel=stylesheet href=includes/in.css type=text/css>";

?>

<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<table width="68%" border="1" align="center" cellpadding="0" cellspacing="0" class=thinline rules=none>
  <tr>
    <td class=header><center>
        Missions
      </center></td>
  </tr>
<tr bgcolor=black><td height=1 colspan=3></td></tr>
  <tr>
    <td> <?php

if ($fetch->mission == "1"){


	if (strip_tags($_POST['Submit']) && strip_tags($_POST['amount'])){
	$amount=intval(strip_tags($_POST['amount']));


if ($amount == 0 || !$amount || ereg('[^0-9]',$amount)){
	print "Invalid amount of drugs";

}elseif ($amount != 0 || $amount || !ereg('[^0-9]',$amount)){
$drugs=explode("-",$fetch->drugs);
if ($amount > $drugs[3]){
echo "You dont have that much Phencyclidine!";
}elseif ($amount <= $drugs[3]){
if ($fetch->location !="England"){
echo "The drugs must be stored in england.";
}elseif ($fetch->location =="England"){


$new_amount=$drugs[3] - $amount;
$new_mission=$amount + $fetch->total_drugs_mission;

$new_drugs="$drugs[0]-$drugs[1]-$drugs[2]-$new_amount-$drugs[4]";

mysql_query("UPDATE users SET drugs='$new_drugs',total_drugs_mission='$new_mission' WHERE username='$username'");

	echo "Drugs added!";

}}}}

if ($fetch->total_drugs_mission >= "30"){
$new_money=$fetch->money + 10000;
$new_bullets=$fetch->bullets + 50;
$new_rank=$fetch->rankpoints + rand(1,30);


mysql_query("UPDATE users SET money='$new_money',rankpoints='$new_rank', mission='2',bullets='$new_bullets',total_drugs_mission='0' WHERE username='$username'");

mysql_query("INSERT INTO `inbox` ( `id` , `to` , `from` , `message` , `date` , `read` , `saved` , `event_id` )
VALUES (
'', '$username', '$username', 'Thanks man..<br> Your a great guy i will give you all what ive got i almost got capped! <br><b>Your rewards:</b> £10,000 <br>50 Bullets ', '$date', '0', '0', '0'
)");

	}


	?>
	<form action="" method=POST>
	    <table width="100%" border="0" cellspacing="3" cellpadding="0">
          <tr>
            <td colspan="2">Damn man...I cant believe it mcabby has done it again
              he owes a Crew 30units of Phencyclidine, one thing though the gang
              say it must be from anywere but England So hurry up and help him..
              Get 30units of Phencyclidine to England... And do it quick.</td>
          </tr>
          <tr>
            <td width="52%">Drugs left</td>
            <td width="48%"><?php echo "$fetch->total_drugs_mission/30"; ?></td>
          </tr>
          <tr>
            <td>Add</td>
            <td><input type="text" name="amount"></td>
          </tr>
          <tr>
            <td colspan="2"><div align="center">
                <input type="submit" name="Submit" value="Submit">
              </div></td>
          </tr>
        </table>
      </form>

	  <?php }elseif ($fetch->mission == "2"){
if (strip_tags($_GET['car'])){
$car=strip_tags($_GET['car']);
$check=mysql_query("SELECT * FROM garage WHERE id='$car' AND owner='$username'");
$true=mysql_num_rows($check);
$stuff=mysql_fetch_object($check);
if ($true != "0"){
$explode=explode("-", $stuff->upgrades);
if ($explode[0] >= "4"){ $a= "<font colour=red>Yes</font>"; $tyre="Yes"; }else{ $a= "<font colour=red>No</font>"; }
if ($explode[4] >= "4"){ $b= "<font colour=red>Yes</font>"; $nos ="Yes"; }else{ $b= "<font colour=red>No</font>"; }
if ($explode[2] >= "4"){ $c= "<font colour=red>Yes</font>"; $int="Yes"; }else{ $c= "<font colour=red>No</font>"; }
if ($stuff->car == "Bugatti Veyron"){ $d="<font colour=red>Yes</font>"; $car_yes="Yes"; }else{ $d= "<font colour=red>No</font>"; }
if ($stuff->location == "France"){ $e= "<font colour=red>Yes</font>"; $loc="Yes"; }else{ $e= "<font colour=red>No</font>"; }

if ($tyre == "Yes" && $nos == "Yes" && $int == "Yes" && $car_yes == "Yes" && $loc=="Yes"){
if (strip_tags($_POST['SUBMIT'])){
if ($fetch->location != "France"){
echo "Your mate needs you to be in France aswell!";
}elseif ($fetch->location == "France"){
mysql_query("DELETE FROM garage WHERE id='$car'");
echo "You successfully compleated the mission!";
$new_money=$fetch->money + 100000;
$new_rank=$fetch->rankpoints + 35;
$new_bullets=$fetch->bullets + 1000;


mysql_query("UPDATE users SET mission='3', money='$new_money',bullets='$new_bullets',rankpoints='$new_rank' WHERE username='$username'");


mysql_query("INSERT INTO `inbox` ( `id` , `to` , `from` , `message` , `date` , `read` , `saved` , `event_id` )
VALUES (
'', '$username', '$username', 'Quality That cars blinging! We gotta take it out for a ride sometime!..<br>Anyways, im a man of my word heres your new stuff: <br>1000 Bullets<br>£100,000', '$date', '0', '0', '0'
)");

}

}

}

}}
 ?>


<script language="JavaScript" type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>

<form action="" method=POST>

        <table width="100%" border="0" cellspacing="3" cellpadding="0">
          <tr>
            <td colspan="2">This is it the big money! Your mate has enetered a
              street race and bet all his cash, now all he needs is a car! Heres
              his specifications:<br> <br> <font color="#0000FF">Bugatti Veyron</font>
              <?php echo "$d"; ?> <br> <font color="#0000FF">Level 4 NOS</font>
              <?php echo "$b"; ?><br> <font color="#0000FF">Level 4 Tyres</font>
              <?php echo "$a"; ?><br> <font color="#0000FF">Level 4 interior</font>
              <?php echo "$c"; ?><br> <font color="#0000FF">Location</font> <?php echo "$e"; ?><br>
              <br> </font>Get him this to <b>France</b> and he will be happy.</td>
          </tr>
          <tr>
            <td width="52%">Select car:</td>
            <td width="48%"> <select name="choose" id="choose" onChange="MM_jumpMenu('this',this,0)">
                <option selected>Choose car</option>
                <?php $get=mysql_query("SELECT * FROM garage WHERE owner='$username'");
while($it=mysql_fetch_object($get)){


echo "<option value=?car=$it->id>$it->car, $it->damage%</option>";
}
?>
              </select></td>
          </tr>
          <tr>
            <td colspan="2"><div align="center">
                <input type="submit" name="SUBMIT" value="Submit">
              </div></td>
          </tr>
        </table>
</form>



<? }elseif ($fetch->mission == "3"){  ?>

<form action="" method=POST>

        <table width="100%" border="0" cellspacing="3" cellpadding="0">
          <tr>
            <td width="100%">Your mate Jhon booti has been grassed on. Go to Canada
              and bust him out Watch out though its a high security jail, and
              you have a high risk of getting put in jail.<br>
              Good Luck<br>
              Hes a rich guy so it will be worth it. <br> <br></font>
              </td>
          </tr>
        </table>
</form>






	  <? } ?>
	  </td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>

<?php include_once"includes/footer.php"; ?>