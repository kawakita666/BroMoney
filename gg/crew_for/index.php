<?
session_start();
include "includes/db_connect.php";
include "includes/functions.php";
$locationa = mysql_query("SELECT money, crew, rank, crewacc FROM users WHERE username='$username'");
	$crew = $successa[1];
	$money = $successa[0];
	$rank = $successa[2];
$crewacc = $successa[3];


$ab = mysql_query("SELECT bank, size, rhm, crewname, owner FROM crews WHERE crewname='$crew'");

	$bank = $abc[0];
	$size = $abc[1];
$rhm = $abc[2];
$crewname = $abc[3];
$owner = $abc[4];

if ($crew != '0'){
if ($crewacc == '0'){
}else{
?>
<html>
<head>
<title>Beyond The Mafia</title>
<frameset  cols="50%,*" border="0">
<frame name="frameleft" src="forumleft.php" marginwidth="10" marginheight="10" scrolling="auto" frameborder="0" noresize>
<frame name="frameright" src="forumright.php" marginwidth="10" marginheight="10" scrolling="auto" frameborder="0" noresize>
</frameset>
</frameset>
</head>
</html>



<? }}elseif ($crew == '0' || $crewacc == 0){ echo "Your not in a crew, or you do not have access to crew forums."; } ?>
