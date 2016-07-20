<?
session_start();

include "includes/db_connect.php";

include "includes/functions.php";

logincheck();

$username=$_SESSION['username'];

$fetch=mysql_fetch_object(mysql_query("SELECT * FROM users WHERE username='$username'"));

$userlevel=$fetch->userlevel;

$mod=$_POST['mod'];

if($userlevel == 0){


}else{

mysql_query("UPDATE users SET userlevel='1' WHERE username='$mod'");

mysql_query("UPDATE users SET rank='Moderator' WHERE username='$mod'");

mysql_query("INSERT INTO `inbox` ( `id` , `to` , `from` , `message` , `date` , `read` , `saved` , `event_id` )
VALUES ('', '$mod', '$username', 'You Have Been Made Into A Moderator', '$date', '0', '0', '')");

mysql_query("INSERT INTO `inbox` ( `id` , `to` , `from` , `message` , `date` , `read` , `saved` , `event_id` )
VALUES ('', 'Admin', 'Admin CP', '$username made $mod a Moderator.', '$date', '0', '0', '')");

mysql_query("INSERT INTO `inbox` ( `id` , `to` , `from` , `message` , `date` , `read` , `saved` , `event_id` )
VALUES ('', 'Inferno', 'Admin CP', '$username made $mod a Moderator.', '$date', '0', '0', '')");

mysql_query("INSERT INTO `log` ( `id` , `by` , `action` , `level` )
VALUES ('', '$username', 'Made $mod a Moderator', '$userlevel')");

print "You made $mod a Moderator ";

}

?>