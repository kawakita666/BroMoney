<?
session_start();

include "includes/db_connect.php";
include "includes/functions.php";

$username=$_SESSION['username'];

$select=mysql_query("SELECT * FROM users WHERE username='$username'");
$p=mysql_fetch_object($select);

$userlevel=$p->userlevel;

if($userlevel == 2){

$mass_msg=strip_tags($_POST['mass_msg']);

$total=0;

$select_all=mysql_query("SELECT * FROM users WHERE status='Alive'");

while($send_to=mysql_fetch_object($select_all)){
mysql_query("INSERT INTO `inbox` ( `id` , `to` , `from` , `message` , `date` , `read` , `saved` , `event_id` )
VALUES (
'', '$send_to->username', 'Mass Message', '$mass_msg', '$date', '0', '0', ''
)");
$total++;
}

echo "$total messages sent";

}else{

exit();

}

?>