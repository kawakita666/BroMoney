<?php
session_start();
$username=$_SESSION['username'];
include_once"includes/db_connect.php";
$fetch=mysql_fetch_object(mysql_query("SELECT * FROM users WHERE username='$username'"));
$string = md5(rand(0,9999)); 
$verify_string = substr($string, 3, 4);
mysql_query("UPDATE users SET ver_code='$verify_string' WHERE username='$username'");
$code = $verify_string;

$img_number = imagecreate(60,25);
$backcolor = imagecolorallocate($img_number,000,051,204);
$textcolor = imagecolorallocate($img_number,255,255,255);

imagefill($img_number,0,0,$backcolor);

Imagestring($img_number,10,5,5,$code,$textcolor);

header("Content-type: image/jpeg");
imagejpeg($img_number);
ImageDestroy($img_number); 

?>



