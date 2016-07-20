<?php include "includes/db_connect.php";
include "includes/functions.php";
logincheck();
$mysql=mysql_query("SELECT * FROM users WHERE username='$username'");
$fetch=mysql_fetch_object($mysql);
echo "$style";
$page="Oc_2.php";


$price = "500000";


if ($fetch->get_away_time > time()){
echo "You need to wait ".maketime($fetch->get_away_time)." untill you can join or start anouther getaway";
}elseif ($fetch->get_away_time <= time()){

if ($fetch->get_away == "0"){
if (strip_tags($_POST['start']) && strip_tags($_POST['share'])){
$share=strip_tags($_POST['share']);
if ($share == "1" || $share == "2"){
if ($fetch->money < $price){
echo "You dont have the required amount of money to create a Getaway";
}elseif ($fetch->money >= $price){
$new_money=$fetch->money-$price;
mysql_query("UPDATE users SET money='$new_money', get_away='1' WHERE username='$username'");
mysql_query("INSERT INTO `get_away` ( `id` , `leader` , `person` , `weapon` , `car` )
VALUES (
'', '$username', '0', 'None', '0'
)");
echo "Get away has been created";


}}}

?>

<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<form name="form1" method="post" action="">
  <table width="60%" border="1" align="center" cellpadding="0" cellspacing="0" class=thinline rules=none>
    <tr>
      <td class=header><center>
          Getaway</center></td>
    </tr>
	 <tr bgcolor=black><td height=1 colspan=3></td></tr>
    <tr>
      <td><table width="100%" border="0" cellspacing="3" cellpadding="0">
          <tr>
            <td>Here you can create a Getaway and invite 1 other person to it,
              you and the other person choose a item and then attempt to get away
              with allot of money. It costs <?php echo "£".makecomma($price).""; ?> </td>
          </tr>
          <tr>
            <td> <div align="left">
                <input type="radio" name="share" value="2" checked>
                Shared</div></td>
          </tr>
          <tr>
            <td height="24"> <div align="center">
                <input name="start" type="submit" id="start" value="Start a Getaway">
              </div></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
        </table></td>
    </tr>
  </table>
</form>
</body>
</html><?php }else{

$get_away = mysql_fetch_object(mysql_query("SELECT * FROM get_away WHERE leader='$username'"));

if (strtolower($get_away->leader) == strtolower($username)){

$person=mysql_fetch_object(mysql_query("SELECT * FROM users WHERE username='$get_away->person'"));

if($_POST['Disband']){

		mysql_query("UPDATE users SET get_away = '0' WHERE username='$username'");
		mysql_query("UPDATE users SET get_away = '0' WHERE username='$get_away->person'");

				mysql_query("DELETE from get_away WHERE id='$get_away->id'");
echo "The Getaway has been disbanded";
}
if (strip_tags($_GET['kick'])){
$kick = strip_tags($_GET['kick']);
mysql_query("UPDATE get_away SET person='0' WHERE id='$get_away->id'");
echo "That person has been kicked";
}

if (strip_tags($_POST['invite_button']) && strip_tags($_POST['invite_person'])){
$invite_person=strip_tags($_POST['invite_person']);
if (strtolower($invite_person) == strtolower($username)){
echo "You cannot invite yourself";
}elseif (strtolower($invite_person) != strtolower($username)){


if ($get_away->person != "0"){
echo "Please kick the person first before inviting someone else";
}elseif ($get_away->person == "0"){
$nene=mysql_fetch_object(mysql_query("SELECT * FROM users WHERE username='$invite_person'"));
if ($nene->get_away_time > time()){
echo "This user cannot do a Getaway yet.";
}elseif ($nene->get_away_time < time()){
if ($nene->get_away == "1"){
echo "This user is in a Getaway";
}elseif ($nene->get_away == "0"){


$invite_text="
  <div align=center>You have been invited to join $username s Getaway as the partner,<br> please
    choose one of the following options:<br>
    <input name=Decline_get_away type=submit id=Decline value=Decline>
    |
    <input name=Accept_get_away type=submit value=Accept>
  </div><input type=hidden name=place value=person><input type=hidden name=get_away_id value=$get_away->id>
";

mysql_query("INSERT INTO `inbox` ( `id` , `to` , `from` , `message` , `date` , `read` )
VALUES (
'', '$invite_person', '$invite_person', '$invite_text', '$date', '0'
)");
mysql_query("UPDATE get_away SET invite_get ='$invite_person' WHERE id='$get_away->id'");

echo "Invite has been sent to <a href='profile.php?viewuser=$invite_person'><b>$invite_person</b></a>";
}}}}}





if ($_POST['go'] &&  $get_away->person != "0" && $get_away->person_ready == "Ready"){
$car = mysql_fetch_object(mysql_query("SELECT * FROM garage WHERE id='$get_away->car'"));

if ($car->car == "Renault Clio Sport"){ $points=1; }
if ($car->car == "Audi A3"){ $points=2; }
if ($car->car == "Bmw m3"){ $points=3; }
if ($car->car == "Cadilac Escelade"){ $points=4; }
if ($car->car == "Nissan Skyline"){ $points=5; }
if ($car->car == "Porsche 911"){ $points=6; }
if ($car->car == "GT 40"){ $points=7; }
if ($car->car == "Lamborghini Murcielago"){ $points=8; }
if ($car->car == "Ferrari Enzo"){ $points=9; }
if ($car->car == "TVR Speed 12"){ $points=10; }
if ($car->car == "Mclaren f1"){ $points=11; }
if ($car->car == "Bugatti Veyron"){ $points=12; }


if ($get_away->weapon == "Sig Sauer P229"){ $points= $points + 1; }
if ($get_away->weapon == "Jackhammer automatic shotgun"){ $points= $points + 2; }
if ($get_away->weapon == "Heckler und Kget_awayh MP-5k"){ $points= $points + 3; }
if ($get_away->weapon == "Browning M2HB"){ $points= $points + 4; }


if ($person->rank == "Scum"){ $points= $points+ 1; }
elseif  ($person->rank == "Wonnabe"){ $points= $points+ 2; }
elseif  ($person->rank == "Goon"){ $points= $points+ 3; }
elseif  ($person->rank == "Hired Thug"){ $points= $points+ 4; }
elseif  ($person->rank == "Criminal"){ $points= $points+ 5; }
elseif  ($person->rank == "Hitman"){ $points= $points+ 6; }
elseif  ($person->rank == "Wanted Criminal"){ $points= $points+ 7; }
elseif  ($person->rank == "Hired Gunner"){ $points= $points+ 8; }
elseif  ($person->rank == "Assassin"){ $points= $points+ 9; }
elseif  ($person->rank == "Boss"){ $points= $points+ 10; }
elseif  ($person->rank == "Don"){ $points= $points+ 11; }
elseif  ($person->rank == "Enemy of the State"){ $points= $points+ 12; }
elseif  ($person->rank == "Global Dominator"){ $points= $points+ 13; }
elseif  ($person->rank == "Legend"){ $points= $points+ 14; }
elseif  ($person->rank == "'Legendary Legend"){ $points= $points+ 15; }


if ($person->rank == "Scum"){ $points= $points+ 1; }
elseif  ($person->rank == "Wonnabe"){ $points= $points+ 2; }
elseif  ($person->rank == "Goon"){ $points= $points+ 3; }
elseif  ($person->rank == "Hired Thug"){ $points= $points+ 4; }
elseif  ($person->rank == "Criminal"){ $points= $points+ 5; }
elseif  ($person->rank == "Hitman"){ $points= $points+ 6; }
elseif  ($person->rank == "Wanted Criminal"){ $points= $points+ 7; }
elseif  ($person->rank == "Hired Gunner"){ $points= $points+ 8; }
elseif  ($person->rank == "Assassin"){ $points= $points+ 9; }
elseif  ($person->rank == "Boss"){ $points= $points+ 10; }
elseif  ($person->rank == "Don"){ $points= $points+ 11; }
elseif  ($person->rank == "Enemy of the State"){ $points= $points+ 12; }
elseif  ($person->rank == "Global Dominator"){ $points= $points+ 13; }
elseif  ($person->rank == "Legend"){ $points= $points+ 14; }
elseif  ($person->rank == "'Legendary Legend"){ $points= $points+ 15; }


$winornot = rand(10,20);
if ($winornot < $points){
$cash = $points *100000;
$cash1 = rand(10000, $cash);



if ($get_away->share == "1"){
$cash = round($cash1 / 2);
$person_cash = $person->money + $cash;
$leader_cash=$fetch->money + $cash;
$message = "You got away with $cash1 and you got ".makecomma($cash)."";

}elseif ($get_away->share == "2"){
$person_cash = $person->money;
$leader_cash = $fetch->money + $cash1;
$message = "You got away with $cash1 ask the leader for your share";
}

mysql_query("INSERT INTO `inbox` ( `id` , `to` , `from` , `message` , `date` , `read` )
VALUES (
'', '$person->username', '$person->username', '$message', '$date', '0'
)");
mysql_query("INSERT INTO `inbox` ( `id` , `to` , `from` , `message` , `date` , `read` )
VALUES (
'', '$fetch->username', '$fetch->username', '$message', '$date', '0'
)");

$now=time()+86400;
$new_rank_points=$fetch->rankpoints + rand(1,60);

$new_rank_points1=$person->rankpoints + rand(1,60);

mysql_query("UPDATE users SET money='$person_cash', get_away_time='$now', rankpoints='$new_rank_points1', get_away='0' WHERE username='$person->username'");
mysql_query("UPDATE users SET money='$leader_cash', get_away_time='$now', rankpoints='$new_rank_points', get_away='0' WHERE username='$username'");


echo "<center><font size=8><font color=red>Congratulations. you got away with ".makecomma($cash1)."</font></font></center>";

mysql_query("DELETE from get_away WHERE id='$get_away->id'");
exit();

}elseif ($winornot > $points){
$message="The Getaway was a compleate failure";
mysql_query("INSERT INTO `inbox` ( `id` , `to` , `from` , `message` , `date` , `read` )
VALUES (
'', '$person->username', '$person->username', '$message', '$date', '0'
)");
mysql_query("INSERT INTO `inbox` ( `id` , `to` , `from` , `message` , `date` , `read` )
VALUES (
'', '$fetch->username', '$fetch->username', '$message', '$date', '0'
)");

$now=time()+86400;
$new_rank_points=rand(1,10) + $fetch->rankpoints;
$new_rank_points_other=rand(1,10) + $person->rankpoints;

mysql_query("UPDATE users SET get_away_time='$now', rankpoints='$new_rank_points_other', get_away='0' WHERE username='$person->username'");
mysql_query("UPDATE users SET get_away_time='$now', rankpoints='$new_rank_points', get_away='0' WHERE username='$fetch->username'");
echo "<center><font size=8><font color=red>You failed!</font></font></center>";
	mysql_query("DELETE from get_away WHERE id='$get_away->id'");
exit();
}
}
?>
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<form name="form1" method="post" action="">
  <table width="60%" border="1" align="center" cellpadding="0" cellspacing="0" class=thinline rules=none>
    <tr>
      <td class=header><center>
       Getaway
        </center></td>
    </tr>
	 <tr bgcolor=black><td height=1 colspan=3></td></tr>
    <tr>
      <td><table width="100%" border="0" cellspacing="3" cellpadding="0">
          <tr>
            <td height="10" colspan="4"> <div align="center">Info: </div></td>
          </tr>
          <tr>
            <td height="-1">Username</td>
            <td>Weapon</td>
            <td>Kick</td>
            <td>Location</td>
          </tr>
          <tr>
            <td height="2">
              <?php if ($get_away->person == "0"){ echo "None"; }else{ echo "$get_away->person"; } ?>
              &nbsp;</td>
           <td height="2">
              <?php echo "$get_away->weapon"; ?>
              &nbsp;</td>
            <td height="2">
              <a href='?kick=ys'>Kick</a>
              &nbsp;</td>
            <td height="2">
              <?php if ($get_away->person == "0"){ echo "N/A"; }else{ echo "$person->location"; } ?>
              &nbsp;</td>
          </tr>
          <tr>
            <td height="0" colspan="4">Invite:
              <input name="invite_person" type="text" id="invite_person">
              <input name="invite_button" type="submit" id="invite_button" value="Submit"></td>
          </tr>
          <tr>
            <td height="-1" colspan="4">&nbsp;</td>
          </tr>
          <tr>
            <td height="-1" colspan="4">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="4"><div align="center">
                <input name="go" type="submit" id="go" value="Go for it">
                |
                <input name="Disband" type="submit" id="Disband" value="Disband">
              </div></td>
          </tr>
        </table></td>
    </tr>
  </table>
</form>
</body>
</html><?
}
$get_away = mysql_fetch_object(mysql_query("SELECT * FROM get_away WHERE person='$username'"));

if (strtolower($get_away->person) == strtolower($username)){
if ($get_away->person_ready == "Ready"){
echo "You are ready";
exit();
}
if (strip_tags($_POST['Ready'])){
mysql_query("UPDATE get_away SET person_ready='Ready' WHERE id='$get_away->id'");
echo "You are now ready";
}
if (strip_tags($_POST['Leave'])){
mysql_query("UPDATE get_away SET person='0' WHERE id='$get_away->id'");
mysql_query("UPDATE users SET get_away='0' WHERE id='$get_away->id'");
echo "You have left the oc";
exit();
}
if (strip_tags($_POST['select_weapon'])){
$weapon=strip_tags($_POST['weapon']);
if ($weapon == "Sig Sauer P229"){
$price ="5000";
}elseif ($weapon == "Jackhammer automatic shotgun"){
$price="10000";
}elseif ($weapon == "Heckler und Koch MP-5k"){
$price="30000";
}elseif ($weapon == "Browning M2HB"){
$price="100000";

}
if ($price > $fetch->money){
echo "You dont have enough money";
}elseif ($price <= $fetch->money){
$gay_money = $fetch->money - $price;
mysql_query("UPDATE users SET money='$gay_money' WHERE username='$username'");
mysql_query("UPDATE get_away SET weapon='$weapon' WHERE id='$get_away->id'");
echo "You bought the weapon";
}}
?>
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<form name="form1" method="post" action="">
  <table width="60%" border="1" align="center" cellpadding="0" cellspacing="0" class=thinline rules=none>
    <tr>
      <td class=header><center>
          Getaway
        </center></td>
    </tr>
    <tr>
      <td height="158">
<table width="100%" border="0" cellspacing="3" cellpadding="0">
          <tr>
            <td width="33%">Buy weapon: </td>
            <td width="32%"><select name="weapon">
                <option value="Sig Sauer P229">Sig Sauer P229-&pound;5,000</option>
                <option value="Jackhammer automatic shotgun">Jackhammer automatic
                shotgun-&pound;10,000</option>
                <option value="Heckler und Koch MP-5k">Heckler und Koch MP-5k-&pound;30,000</option>
                <option value="Browning M2HB">Browning M2HB-&pound;100,000</option>
              </select> </td>
            <td width="35%"><input type="submit" name="select_weapon" value="Submit"></td>
          </tr>
          <tr>
            <td colspan="3">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="3">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="3">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><input name="Ready" type="submit" id="Ready3" value="Ready"></td>
            <td><input name="Leave" type="submit" id="Leave" value="Leave"></td>
          </tr>
        </table></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
</body>
</html>



<?
}

/////MAJOR SUBMIT ETC....




}}
 ?>


<?php include_once"includes/footer.php"; ?>