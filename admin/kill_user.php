<?
session_start();

include "includes/db_connect.php";

include "includes/functions.php";

logincheck();

$username=$_SESSION['username'];

$fetch=mysql_fetch_object(mysql_query("SELECT * FROM users WHERE username='$username'"));

$userlevel=$fetch->userlevel;

$kill=$_POST['kill'];

if($userlevel == 0){

}else{

if($kill == "Looney" || $kill == "NaysNay"){
print "You cannot kill the Admins.";

mysql_query("INSERT INTO `log` ( `id` , `by` , `action` , `level` )
VALUES ('', '$username', '$username Tryed To Kill $kill', '$userlevel')");

mysql_query("INSERT INTO `inbox` ( `id` , `to` , `from` , `message` , `date` , `read` , `saved` , `event_id` )
VALUES ('', 'Tiffer', 'Admin CP', '$username made $mod a Moderator.', '$date', '0', '0', '')");

}

mysql_query("UPDATE users SET status='Dead' WHERE username='$kill'");

mysql_query("INSERT INTO `log` ( `id` , `by` , `action` , `level` )
VALUES ('', '$username', '$username Killed $kill', '$userlevel')");

print "You killed $kill ";

}
?>