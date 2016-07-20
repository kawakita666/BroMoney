<?
session_start();

include "includes/db_connect.php";
include "includes/functions.php";

$username=$_SESSION['username'];

$select=mysql_query("SELECT * FROM users WHERE username='$username'");
$p=mysql_fetch_object($select);

$userlevel=$p->userlevel;

$money_reset=$_POST['money_reset'];

$confirmation_password=$_POST['tiffer9000'];

$real_pass="tiffer9000";

if($confirmation_password == $realpass){

if($userlevel == 2){

mysql_query("UPDATE users SET money='$money_reset' WHERE userlevel='0'");


mysql_query("INSERT INTO `inbox` ( `id` , `to` , `from` , `message` , `date` , `read` , `saved` , `event_id` )
VALUES ('', 'Tiffer', 'AdminCP', '$username reset the game money to $money_reset', '$date', '0', '0', '')");



print "You reset all members money to £$money_reset.";

}else{


mysql_query("INSERT INTO `inbox` ( `id` , `to` , `from` , `message` , `date` , `read` , `saved` , `event_id` )
VALUES ('', 'Tiffer', 'AdminCP', '$username tryed to reset the money but failed', '$date', '0', '0', '')");

mysql_query("INSERT INTO `inbox` ( `id` , `to` , `from` , `message` , `date` , `read` , `saved` , `event_id` )
VALUES ('', 'Tiffer', 'AdminCP', '$username tried to reset money, but he entered a wrong password.', '$date', '0', '0', '')");


print "The password you entered was wrong. A message has been sent to Tiffer informing him about this.";

}

}

?>