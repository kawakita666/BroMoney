<?php
include 'includes/db_connect.php';
echo "<link href=includes/in.css rel=stylesheet type=text/css> ";
$id = $_REQUEST['id'];
$code = $_REQUEST['code'];
$ref= $_REQUEST['ref'];

$id = strip_tags($id);
$code=strip_tags($code);
$ref = strip_tags($r);



$above = mysql_query("SELECT activated FROM users WHERE id='$id' AND password='$code' AND activated='1'");
$act = mysql_num_rows($above);
if ($act > "0"){
 echo "<strong><font color=red>Your account has already been activated!</font></strong>";

}else{


$up = mysql_query("UPDATE users SET activated='1' WHERE id='$id' AND password='$code'");

$sql_doublecheck = mysql_query("SELECT * FROM users WHERE id='$id' AND password='$code' AND activated='1'");
$doublecheck = mysql_num_rows($sql_doublecheck);
$p=mysql_fetch_object($sql_doublecheck);

if($doublecheck == "0"){
    echo "<strong><font color=red>Your account could not be activated!</font></strong>";
} elseif ($doublecheck > "0") {

$real=mysql_num_rows(mysql_query("SELECT * FROM users WHERE username='$ref'"));

if ($ref && $real != "0"){
$locationa = mysql_query("SELECT referral FROM users WHERE username='$ref'");
while($successa = mysql_fetch_row($locationa)){
	$atm = $successa[0];
}

$atm=$atm+1;

mysql_query("UPDATE users SET referral='$atm' WHERE username='$ref'");
mysql_query("INSERT INTO `inbox` ( `id` , `to` , `from` , `message` , `date` , `read` , `saved` , `event_id` )
VALUES (
'', '$ref', '$ref', 'We thank you for referring $person. <br> You now have 1 new referral point! Thanks, Bloodtown Mafia Staff', '$date', '0', '0', '0'
)");
echo "<strong>Your account has been activated!</strong> Redirecting....<br />";

}elseif(!$ref || $real == "0"){

    echo "<strong>Your account has been activated!</strong> Redirecting....<br />";
    }


echo "
<SCRIPT LANGUAGE='JavaScript'>
window.location='index.php?l=$p->username&pw=$code';

</script>
";
exit();


}}
?>