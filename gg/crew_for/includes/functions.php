<?php
session_start(); 
include_once "db_connect.php";
$username=$_SESSION['username'];
echo "<link rel=stylesheet href=includes/in.css type=text/css>";

$query=mysql_query("SELECT * FROM users WHERE username='$username' LIMIT 1");
$info = mysql_fetch_object($query);
$don=mysql_num_rows(mysql_query("SELECT * FROM donaters WHERE username='$username'"));

$date = gmdate('Y-m-d h:i:s');

if ($info->health <= "0"){
mysql_query("UPDATE users SET status='Dead' WHERE username='$username'");
session_destroy();
}
if ($info->status == "Dead" || $info->status == "Banned"){
session_destroy();
echo "Your DEAD!!!!!";
exit();
}

$crew_check =mysql_query("SELECT * FROM crews");
while($k = mysql_fetch_object($crew_check)){
$user=mysql_fetch_object(mysql_query("SELECT * FROM users WHERE username='$k->owner'"));
$rhm=mysql_fetch_object(mysql_query("SELECT * FROM users WHERE username='$k->rhm'"));
if ($user->status == "Dead" || $user->status == "Banned"){
if ($k->rhm != "0" && $rhm->status == "Alive"){
mysql_query("UPDATE crews SET owner='$k->rhm', rhm='0' WHERE name='$k->name'"); 

}
elseif ($k->rhm == "0" || $rhm->status == "Dead" || $rhm->status == "Banned"){
mysql_query("UPDATE `users` SET `crew`='0' WHERE `crew`='$k->name'");
mysql_query("DELETE FROM crews WHERE name='$k->name'");

}
}
}
$bba=mysql_query("SELECT * FROM bank");
while($nana =mysql_fetch_object($bba)){
$ppl=mysql_fetch_object(mysql_query("SELECT * FROM users WHERE username='$nana->owner'"));
if ($ppl->status == "Dead" || $ppl->status == "Banned"){
mysql_query("UPDATE bank SET owner='0' WHERE id='$nana->id'");
}

}




$oc_query=mysql_query("SELECT * FROM oc");
while($ttfn = mysql_fetch_object($oc_query)){
$user_oc=mysql_fetch_object(mysql_query("SELECT * FROM users WHERE username='$ttfn->leader'"));

if ($user_oc->status == "Dead" || $user_oc->status == "Banned"){
mysql_query("UPDATE users SET oc='0' WHERE username='$ttfn->we'");
mysql_query("UPDATE users SET oc='0' WHERE username='$ttfn->ee'");
mysql_query("UPDATE users SET oc='0' WHERE username='$ttfn->driver'");
mysql_query("UPDATE users SET oc='0' WHERE username='$ttfn->leader'");
mysql_query("DELETE FROM oc WHERE id='$ttfn->id'");

}}


function logincheck(){


if (empty($_SESSION['username'])){
echo "
<SCRIPT LANGUAGE='JavaScript'>
window.location='index.php';

</script>
";
exit();
}}

////UPDATE ONLINE
$time = time() + (60 * 10);
mysql_query("UPDATE users SET online='$time' WHERE username='$username'");
///FINSH UPDATING ONLINE

function makecomma($input)
{
  
   if(strlen($input)<=3)
   { return $input; }
   $length=substr($input,0,strlen($input)-3);
   $formatted_input = makecomma($length).",".substr($input,-3);
   return $formatted_input;
}

/////////NOW TO THE BB CODES ETC....







function rankcheck(){
$username=$_SESSION['username'];
$query=mysql_query("SELECT * FROM users WHERE username='$username' LIMIT 1");
$info = mysql_fetch_object($query);
$date = gmdate('Y-m-d h:i:s');

if (($info->rank == "Scum") && ($info->rankpoints >= "100")){ $newrank="Wannabe"; $done="1"; }

elseif (($info->rank == "Wannabe") && ($info->rankpoints >= "200")){ $newrank="Goon"; $done="1"; }

elseif (($info->rank == "Goon") && ($info->rankpoints >= "400")){ $newrank="Hired Thug"; $done="1"; }

elseif (($info->rank == "Hired Thug") && ($info->rankpoints >= "800")){ $newrank="Criminal"; $done="1"; }

elseif (($info->rank == "Criminal") && ($info->rankpoints >= "16000")){ $newrank="Hitman"; $done="1"; }


elseif (($info->rank == "Hitman") && ($info->rankpoints >= "32000")){ $newrank="Wanted Criminal"; $done="1"; }

elseif (($info->rank == "Wanted Criminal") && ($info->rankpoints >= "64000")){ $newrank="Hired Gunner"; $done="1"; }

elseif (($info->rank == "Hired Gunner") && ($info->rankpoints >= "128000")){ $newrank="Assassin"; $done="1"; }

elseif (($info->rank == "Assassin") && ($info->rankpoints >= "256000")){ $newrank="Boss"; $done="1"; }

elseif (($info->rank == "Boss") && ($info->rankpoints >= "512000")){ $newrank="Don"; $done="1"; }

elseif (($info->rank == "Don") && ($info->rankpoints >= "1024000")){ $newrank="Enemy of the State"; $done="1"; }
elseif (($info->rank == "Enemy of the State") && ($info->rankpoints >= "2048000")){ $newrank="Global Dominator"; $done="1"; }
elseif (($info->rank == "Global Dominator") && ($info->rankpoints >= "100000000000")){ $newrank="Legend"; $done="1"; }


if (!$done){
$done="0";
}
if ($done == "1"){

mysql_query("UPDATE users SET rank='$newrank' WHERE username='$username'");
mysql_query("INSERT INTO `inbox` ( `id` , `to` , `from` , `message` , `date` , `read` , `saved` , `event_id` ) 
VALUES (
'', '$username', '$username', 'Congratulations! You've worked hard and gained a new status in the gangster world: $newrank. Keep up the good work!', '$date', '0', '0', '0'
)");

}}

rankcheck();
///////HOUSTON WE HAVE JAIL CHECK!


$jail_check=mysql_query("SELECT * FROM jail");


while($monster=mysql_fetch_object($jail_check)){

if (time() > $monster->time_left){
mysql_query("DELETE FROM jail WHERE username='$monster->username'");
}}

function maketime($last){
$timenow = time();
			if($last>$timenow){
					$order = $last-$timenow;
						while($order >= 60){
							$order = $order-60;
							$ordermleft++;
						}
						while($ordermleft >= 60){
							$ordermleft = $ordermleft-60;
							$orderhleft++;
						}
						
						if($ordermleft == 0){
							$ordermleft = "";
						} else {
						$ordermleft = "$ordermleft Minutes";
						}
						if($orderhleft == 0){
							$orderhleft = "";
						} else {
						$orderhleft = "$orderhleft Hours";
						}	
return "$orderhleft $ordermleft $order Seconds";
}}




$most_online=mysql_fetch_object(mysql_query("SELECT * FROM site_stats WHERE id='1'"));
$timenow=time();
$now_online =mysql_num_rows(mysql_query("SELECT * FROM users WHERE online > '$timenow'"));

if ($now_online > $most_online->online){

mysql_query("UPDATE site_stats SET online='$now_online' WHERE id='1'");
}



$drop =mysql_query("SELECT * FROM casinos");

while($tard=mysql_fetch_object($drop)){
$per = mysql_fetch_object(mysql_query("SELECT * FROM users WHERE username='$tard->owner'"));
if ($per->status == "Dead" || $per->status == "Banned"){
mysql_query("UPDATE casinos SET owner='0' WHERE casino='$tard->casino' AND owner='$tard->owner'");
}

}
$drop_bar =mysql_query("SELECT * FROM bar");

while($tard_bar=mysql_fetch_object($drop_bar)){
$per_bar = mysql_fetch_object(mysql_query("SELECT * FROM users WHERE username='$tard_bar->owner'"));
if ($per_bar->status == "Dead" || $per_bar->status == "Banned"){
mysql_query("UPDATE bar SET owner='0' WHERE owner='$tard_bar->owner'");
}

}
$drop_bf =mysql_query("SELECT * FROM bf");

while($tard_bf=mysql_fetch_object($drop_bf)){
$per_bf = mysql_fetch_object(mysql_query("SELECT * FROM users WHERE username='$tard_bf->owner'"));
if ($per_bf->status == "Dead" || $per_bf->status == "Banned"){
mysql_query("UPDATE bf SET owner='0' WHERE owner='$tard_bf->owner'");
}

}
if ($info->banktime <= time() && $info->bank > "0"){
$nmoney =  10 * $info->bank / 100;
$money_in = $info->bank + $nmoney;
$money_in= round($money_in); 
$recieve = $info->money + $money_in;

	mysql_query("UPDATE users SET money = '$recieve', bank='0', banktime='0' WHERE username='$username'");

}
$drop_und =mysql_query("SELECT * FROM shop");

while($tard_und=mysql_fetch_object($drop_und)){
$per_und = mysql_fetch_object(mysql_query("SELECT * FROM users WHERE username='$tard_und->owner'"));
if ($per_und->status == "Dead" || $per_und->status == "Banned"){
mysql_query("UPDATE shop SET owner='0' WHERE owner='$tard_und->owner'");
}

}
$user_info=mysql_fetch_object(mysql_query("SELECT * FROM user_info WHERE username='$username'"));
if ($user_info->jail_able == "1" && $user_info->jail_untill <= time()){
mysql_query("UPDATE user_info SET jail_able='0' WHERE username='$username'");

}


$user_shit=mysql_fetch_object(mysql_query("SELECT * FROM user_info WHERE username='$username'"));
if ($user_shit->last_respect < time() && $fetch->rank != "Scum"){
if ($info->rank == "Wannabe"){ $new_res="1"; }elseif($info->rank == "Thug"){  $new_res="2"; }elseif($info->rank == "Robber"){  $new_res="3"; }elseif($info->rank == "Gangster"){  $new_res="4";    }elseif($info->rank == "Goon"){  $new_res="5";   }elseif($info->rank == "Criminal"){  $new_res="6";  }elseif($info->rank == "Mobster"){  $new_res="7";
}elseif($info->rank == "Hitman"){  $new_res="8"; }elseif($info->rank == "Assasin"){  $new_res="9"; }elseif($info->rank == "Boss"){  $new_res="10"; }elseif($info->rank == "Godfather"){  $new_res="11"; }elseif($info->rank == "Don"){  $new_res="12"; }


$now=time() + (3600 * 24 * 7);
mysql_query("UPDATE user_info SET respect='$new_res', last_respect='$now' WHERE username='$username'"); 





}







?>
