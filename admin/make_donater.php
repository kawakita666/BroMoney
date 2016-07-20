<?
session_start();

include "includes/db_connect.php";

include "includes/functions.php";

logincheck();

$username=$_SESSION['Rafx10'];

$fetch=mysql_fetch_object(mysql_query("SELECT * FROM users WHERE username='$username'"));

$userlevel=$fetch->userlevel;

$don8er=$_POST['donater'];


if($userlevel == 0){

}else{

mysql_query("INSERT INTO `donaters` ( `id` , `username` )
VALUES ('', '$don8er')");

}

?>