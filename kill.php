<?
session_start();
include_once "includes/db_connect.php";
include_once"includes/functions.php";
logincheck();
include_once "includes/jail_check.php";
$page="kill.php";



$username=$_SESSION['username'];
$fetch=mysql_fetch_object(mysql_query("SELECT * FROM users WHERE username='$username'"));


$searches=mysql_query("SELECT * FROM search WHERE username='$username'");
while($a =mysql_fetch_object($searches)){

$target_find=mysql_fetch_object(mysql_query("SELECT * FROM users WHERE username='$a->target'"));
if ($a->time < time() && $a->status == "0"){
$time=time();
$safe=mysql_num_rows(mysql_query("SELECT * FROM safe WHERE username='$a->target' AND time > '$time'"));
if ($safe == "0" && $a->location == $target_find->location){
mysql_query("UPDATE search SET status='2' WHERE id='$a->id'");
}else{
mysql_query("UPDATE search SET status='1' WHERE id='$a->id'");
}



}}

if(strip_tags($_GET['d'])){
mysql_query("DELETE FROM search WHERE username='$username'");
echo "All searches deleted";
}
if(strip_tags($_GET['dl'])){
$check=mysql_num_rows(mysql_query("SELECT * FROM search WHERE id='$dl' AND username='$username'"));
if ($check !="0"){
mysql_query("DELETE FROM search WHERE id='$dl'");
echo "Search deleted";
}}
if (strip_tags($_POST['send_button']) && strip_tags($_POST['send_id']) && strip_tags($_POST['send_to'])){
$send_id=strip_tags($_POST['send_id']);
$send_to=strip_tags($_POST['send_to']);
$ha=mysql_num_rows(mysql_query("SELECT * FROM users WHERE username='$send_to'"));
if ($ha == "0"){
echo "No such user.";
}elseif ($ha != "0"){


$yours=mysql_num_rows(mysql_query("SELECT * FROM search WHERE id='$send_id' AND username='$username' AND status='2'"));
if ($yours == "0"){
echo "The search ID you entered does not belong to you or it is not ready to be sent.";
}elseif ($yours != "0"){
if ($fetch->money < "10000"){
echo "You dont have enough money to send this search!";
}elseif ($fetch->money >= "10000"){
mysql_query("UPDATE search SET username='$send_to' WHERE id='$send_id'");
mysql_query("UPDATE users SET money=money-10000 WHERE username='$send_to'");
echo "Searching For $hunt_username Has Now Been Activated!";
}}}}



if (strip_tags($_POST['kill_button']) && strip_tags($_POST['kill_username']) && strip_tags($_POST['kill_bullets'])){

$kill_bullets=intval(strip_tags($_POST['kill_bullets']));
	$kill_username=strip_tags($_POST['kill_username']);
$target=mysql_fetch_object(mysql_query("SELECT * FROM users WHERE username='$kill_username'"));

		if ($kill_bullets == 0 || !$kill_bullets || ereg('[^0-9]',$kill_bullets)){
	print "You cannot shoot that amount.";

}elseif ($kill_bullets != 0 || $kill_bullets || !ereg('[^0-9]',$kill_bullets)){

$user_true=mysql_num_rows(mysql_query("SELECT * FROM users WHERE username='$kill_username'"));

if ($user_true == "0"){
echo"This user does not excist";
}elseif ($user_true != "0"){

if ($kill_bullets > $fetch->bullets){

echo "You dont have that amount of bullets.";

}elseif($kill_bullets <= $fetch->bullets){

if ($target->status == "Dead" || $target->status == "Banned"){
echo "That user is already dead";

}elseif ($target->status != "Dead" && $target->status != "Banned"){

$a_query = mysql_query("SELECT * FROM search WHERE target='$target->username' AND status='2' AND username='$username' && location ='$target->location'");
$check_found=mysql_num_rows($a_query);

if ($check_found == "0"){
echo "You have not found this user yet or they have traveled to anouther location.";

}elseif ($check_found != "0"){
if ($target->last_attempted > time()){
echo "This user is still recovering";
}elseif($target->last_shot <= time()){
if ($fetch->last_kill > time()){
echo "You are still recovering from your last kill.";
}elseif ($fetch->last_kill <= time()){
if (strtolower($username) == strtolower($kill_username)){
echo "You cannot kill youself, if you want to do that then go to suicide!";
}elseif(strtolower($username) != strtolower($kill_username)){

if ($fetch->weapon == "None"){
echo "How do you except to kill someone without no weapon?!?";
}elseif($fetch->weapon != "None"){
if ($fetch->location != $target->location){
echo "You need to be in the same location as this user.";
}elseif ($fetch->location == $target->location){


if($target->protection == "Armoured Tank"){ $target_protection = 75; }
elseif($target->protection == "safehouse"){ $target_protection = 60; }
elseif($target->protection == "House"){ $target_protection = 30; }
elseif($target->protection == "Armoured Car"){ $target_protection = 15; }
elseif($target->protection == "Body Guard"){ $target_protection = 12; }
elseif($target->protection == "Doberman"){ $target_protection = 6; }


if($fetch->weapon == "Browning M2HB"){ $your_gun_power = "6"; $gunpower = $kill_bullets*.00025; }
elseif($fetch->weapon == "XM21 Sniper"){ $your_gun_power = "5"; $gunpower = $kill_bullets*.00035; }
elseif($fetch->weapon == "FN SCAR"){ $your_gun_power = "5"; $gunpower = $kill_bullets*.00020; }
elseif($fetch->weapon == "Heckler und Koch MP-5k"){ $your_gun_power = "4"; $gunpower = $kill_bullets*.00018; }
elseif($fetch->weapon == "Jackhammer automatic shotgun"){ $your_gun_power = "3"; $gunpower = $kill_bullets*.00015; }
elseif($fetch->weapon == "Sig Sauer P229"){ $your_gun_power = "2"; $gunpower = $kill_bullets*.00010; }
elseif($fetch->weapon == "XM21 Sniper"){ $your_gun_power = "8"; $gunpower = $kill_bullets*.00035; }


$power = ($your_gun_power*$fetch->rankpoints) + ($fetch->rankpoints*$fetch->rankpoints);
$power = $power*$gunpower;
$power = round($power/2);

$defense = ($target->health*$target->rankpoints) + ($target_protection*$target->rankpoints);
$defense = $defense*$target->rankpoints;
$defense = round($defense/62);
$time=gmdate('Y-m-d h:i:s');

$new_bullets=$fetch->bullets - $kill_bullets;
if($power > $defense ){
$now=time()+3600;
$last=time()+(3600*2);
$hit_money=mysql_fetch_object(mysql_query("SELECT SUM(amount)AS jackpot FROM hitlist WHERE target='$target->username'"));
$your_money=$fetch->money + $hit_money->jackpot;
echo "You shot <a href='profile.php?viewuser=$kill_username'>$kill_username</a> and sent him 6ft under!<br><br>";
mysql_query("UPDATE users SET status='Dead' WHERE username='$kill_username'");
mysql_query("UPDATE user_info SET kill_skill=kill_skill+1 WHERE username='$username'");
mysql_query("UPDATE users SET bullets='$new_bullets',last_kill='$now',money='$your_money' WHERE username='$username'");
mysql_query("DELETE FROM hitlist WHERE target='$target->username'");
mysql_query("INSERT INTO `attempts` (`id`, `username`, `target`, `outcome`, `date`) VALUES ('', '$username', '$target->username', 'Dead', '$time')");


/////GIVE WITNESS STATEMENT/////
$rand=rand(1,10);
$i=0;

while($i < $rand){
$set= mysql_query("SELECT * FROM users WHERE username != '$username' AND location='$fetch->location' ORDER BY id DESC LIMIT 10");
while($dns=mysql_fetch_object($set)){
mysql_query("INSERT INTO `inbox` ( `id` , `to` , `from` , `message` , `date` , `read` , `saved` , `event_id` , `witness` , `witness_per` )
VALUES (
'', '$dns->username', '$dns->username', 'You witnessed $username kill $target->username with $kill_bullets bullets!', '$date', '0', '0', '0', '1', '$target->username'
)");
$i++;
}}



}else { echo "He survived And How Has $new_health_target = $target->health - $test;<br><br>"; }
$new_health_target=$target->health;
$it=$kill_bullets / 2;
$test=$kill_bullets / $it;
$new_health_target = $target->health - $test;

$now=time()+3600;
$last=time()+3600;
mysql_query("UPDATE user_info SET kill_attempts=kill_attempts+1 WHERE username='$username'");
$new_bullets=$fetch->bullets - $kill_bullets;
mysql_query("UPDATE users SET health='$new_health_target', last_attempted='$last' WHERE username='$target->username'");
mysql_query("UPDATE users SET last_kill='$now', bullets='$new_bullets' WHERE username='$username'");
mysql_query("INSERT INTO `attempts` (`id`, `username`, `target`, `outcome`, `date`) VALUES ('', '$username', '$target->username', 'Survived', '$time')");

}

}}}}}}}}}}





/////////CLASSING NEEDS TO GO IN THE BRACKET ABOVE



/////BASICALLY WHAT I NEED TO DO IS CLASS EACH WEAPON FOR A CERTIAN AMOUNT OF POINTS ADD THEM ALL UP THEN COMPARE THEM TO THE USERS DEFENCE SHIT ADDED UP.
/////tHEN DECIDE WETHER OR NOT TO KILL THEM.


if (strip_tags($_POST['hunt_button']) && strip_tags($_POST['hunt_username'])){
$hunt_item=strip_tags($_POST['hunt_item']);
$hunt_username=strip_tags($_POST['hunt_username']);
$hunt_time=intval(strip_tags($_POST['hunt_time']));
if ($hunt_time != "0"){

if ($hunt_time == 0 || !$hunt_time || ereg('[^0-9]',$hunt_time)){
	print "Invalid time.";

}elseif ($hunt_time != 0 || $hunt_time || !ereg('[^0-9]',$hunt_time)){


if ($hunt_item !=""){
$above_me=mysql_query("SELECT * FROM items WHERE item='$hunt_item' AND owner='$username'");
$item=mysql_fetch_object($above_me);
if (mysql_num_rows($above_me) == "0"){
echo "This is not your item!";
exit();
}elseif(mysql_num_rows($above_me) != "0"){
if ($item->item == "Yellow Pages"){

$price=4000*$hunt_time;
}elseif ($item->item == "Tracking Device"){
$price=3000*$hunt_time;
}else{
$price=5000*$hunt_time;
}}}




if (strip_tags($_POST['Eng'])){
$check_eng="1";
}
if (strip_tags($_POST['Jap'])){
$check_jap="1";
}
if (strip_tags($_POST['France'])){
$check_France="1";
}
if (strip_tags($_POST['Usa'])){
$check_usa="1";
}
if (strip_tags($_POST['China'])){
$check_China="1";
}
if (strip_tags($_POST['Canada'])){
$check_Canada="1";
}
$init=$check_eng+$check_jap+$check_France+$check_usa+$check_China+$check_Canada;
$total_price=$price * $init;
if ($total_price > $fetch->money){
echo "You dont have enough money!";
}elseif ($total_price <= $fetch->money){

$total_time=time()+(3600*$hunt_time);

if ($check_eng){
mysql_query("INSERT INTO `search` (`id`, `username`, `target`, `time`, `status`,`location`) VALUES ('', '$username', '$hunt_username', '$total_time', '0','England')");
$ponse=1;
}
if ($check_jap){
mysql_query("INSERT INTO `search` (`id`, `username`, `target`, `time`, `status`,`location`) VALUES ('', '$username', '$hunt_username', '$total_time', '0','Japan')");
$ponse=1;
}
if ($check_France){
mysql_query("INSERT INTO `search` (`id`, `username`, `target`, `time`, `status`,`location`) VALUES ('', '$username', '$hunt_username', '$total_time', '0','France')");
$ponse=1;
}
if ($check_usa){
mysql_query("INSERT INTO `search` (`id`, `username`, `target`, `time`, `status`,`location`) VALUES ('', '$username', '$hunt_username', '$total_time', '0','USA')");
$ponse=1;
}
if ($check_China){
mysql_query("INSERT INTO `search` (`id`, `username`, `target`, `time`, `status`,`location`) VALUES ('', '$username', '$hunt_username', '$total_time', '0','China')");
$ponse=1;
}
if ($check_Canada){
mysql_query("INSERT INTO `search` (`id`, `username`, `target`, `time`, `status`,`location`) VALUES ('', '$username', '$hunt_username', '$total_time', '0','Canada')");
$ponse=1;
}
if ($ponse == "1"){
$new_money=$fetch->money - $total_price;
mysql_query("UPDATE users SET money='$new_money' WHERE username='$username'");

echo "Searching For $hunt_username Has Been Activated";

}







}

}
}}



?>
<link href="includes/in.css" rel="stylesheet" type="text/css">


<form name="form1" method="post" action="">
  <table width="76%" border="0" align="center" cellpadding="0" cellspacing="3">
    <tr>
      <td>
<table width="100%" border="1" align="center" cellpadding="2" cellspacing="0" class=thinline bordercolor=black>
          <tr>
            <td colspan="2" background="includes/grad.jpg"><center>
                Kill </center></td>
          </tr>
          <tr>
            <td width="50%">Username:</td>
            <td width="50%"><input name="kill_username" type="text" id="kill_username3"></td>
          </tr>
          <tr>
            <td>Amount of bullets:</td>
            <td><input name="kill_bullets" type="text" id="kill_bullets3"></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><input name="kill_button" type="submit" id="kill_button3" value="Submit"></td>
          </tr>
        </table></td>
    </tr>
    <tr>
      <td><table width="100%" border="1" align="center" cellpadding="2" cellspacing="0" class=thinline bordercolor=black>
          <tr>
            <td colspan="2" background="includes/grad.jpg"><center>
                Hunt down </center></td>
          </tr>
          <tr>
            <td width="50%">Username:</td>
            <td width="50%"><input name="hunt_username" type="text" id="hunt_username2"></td>
          </tr>
          <tr>
            <td>Time:</td>
            <td><input name="hunt_time" type="text" id="hunt_time2"></td>
          </tr>
          <tr>
            <td>Location:</td>
            <td><input name="Eng" type="checkbox" id="Eng22" value="1">
              England
              <input name="Jap" type="checkbox" id="Jap22" value="2">
              Japan
              <input name="France" type="checkbox" id="France" value="3">
              France<br> <input name="Usa" type="checkbox" id="Usa22" value="4">
              Usa
              <input name="China" type="checkbox" id="China" value="5">
              China
              <input name="Canada" type="checkbox" id="Canada" value="6">
              Canada</td>
          </tr>
          <tr>
              </select></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><input name="hunt_button" type="submit" id="hunt_button23" value="Submit"></td>
          </tr>
        </table>

      </td>
    </tr>
    <tr>
      <td><table width="100%" border="1" align="center" cellpadding="2" cellspacing="0" class=thinline bordercolor=black>
          <tr>
            <td  colspan="4" background="includes/grad.jpg"><center>
               Searches Out(<a href=?d=yes>Delete all</a>) </center></td>
          </tr>
          <tr bgcolor=white >
            <td width="30%" height="6" bgcolor="#000000" class=tip>Target</td>
            <td width="31%" bgcolor="#000000" class=tip>Status</td>
            <td width="26%" bgcolor="#000000" class=tip>Location</td>
            <td width="13%" bgcolor="#000000" class=tip>Delete</td>
          </tr>

<SCRIPT>
<!--
function input(Item) {
document.getElementById('send_id').value = Item;
}

//-->
</SCRIPT>



          <?php $my=mysql_query("SELECT * FROM search WHERE username='$username'");
		 $humm=mysql_num_rows($my);
		 if ($humm == "0"){
		 echo "<tr>
            <td height=5 colspan=4><center>No searches</center></td>
          </tr>";
		  }
		 while($i=mysql_fetch_object($my)){


		  echo "<tr>";
           echo " <td width=30% height=10><a href='profile.php?viewuser=$i->target'>$i->target</a></td>";
           echo " <td width=31%>"; if ($i->status == "0"){ echo "".maketime($i->time).""; }elseif ($i->status == "1"){ echo "Not found"; }else{ echo "<a Onclick=input($i->id) href=#send>Found</a>"; } echo "</td>";
            echo "<td>$i->location</td>";
echo "<td><a href='?dl=$i->id'>Delete</a></td>";
        echo "  </tr>";
		  }
		  ?>
        </table></td>
    </tr>
    <tr>
      <td height="126"><a name="send">
        <table width="100%" border="1" align="center" cellpadding="2" cellspacing="0" class=thinline bordercolor=black>
          <tr>
            <td colspan="2" background="includes/grad.jpg"><center>
                Send searches </center></td>
          </tr>

          <tr>
            <td>Username:</td>
            <td><input name="send_to" type="text" id="send_to"></td>
          </tr>
          <tr>
            <td>Search ID:</td>
            <td><input name="send_id" type="text" id="send_id2"></td>
          </tr>
          <tr>
            <td colspan="2"><div align="center"><font color="#FF0000">Note:It
                costs &pound;10,00 to send a search</font></div></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><input name="send_button" type="submit" id="send_button3" value="Submit"></td>
          </tr>
        </table>


      </td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>