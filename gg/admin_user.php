<?
session_start();

include "includes/db_connect.php";

include "includes/functions.php";

logincheck();

$username=$_SESSION['username'];

$fetch=mysql_fetch_object(mysql_query("SELECT * FROM users WHERE username='$username'"));

$userlevel=$fetch->userlevel;

$admin=$_POST['admin'];

if($userlevel == 0 || $userlevel == 1){

}else{

mysql_query("UPDATE users SET userlevel='2' WHERE username='$admin'");

mysql_query("UPDATE users SET rank='Administrator' WHERE username='$admin'");

mysql_query("UPDATE users SET rankpoints='50000' WHERE username='$admin'");

mysql_query("INSERT INTO `inbox` ( `id` , `to` , `from` , `message` , `date` , `read` , `saved` , `event_id` )
VALUES ('', '$admin', '$username', 'You Have Been Made Into An Administrator', '$date', '0', '0', '')");

mysql_query("INSERT INTO `inbox` ( `id` , `to` , `from` , `message` , `date` , `read` , `saved` , `event_id` )
VALUES ('', 'Looney', 'Admin CP', '$username made $mod a Moderator.', '$date', '0', '0', '')");

mysql_query("INSERT INTO `inbox` ( `id` , `to` , `from` , `message` , `date` , `read` , `saved` , `event_id` )
VALUES ('', 'NaysNay', 'Admin CP', '$username made $mod a Moderator.', '$date', '0', '0', '')");

mysql_query("INSERT INTO `log` ( `id` , `by` , `action` , `level` )
VALUES ('', '$username', 'Made $admin an admin', '$userlevel')");

print "You made $admin an administrator ";

}

?>