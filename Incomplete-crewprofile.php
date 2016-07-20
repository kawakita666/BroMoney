<?php
session_start();
include "db.php";
include "includes/functions.php";
include "includes/jail_check.php";
$username=$_SESSION['username'];


$ab = mysql_query("SELECT bank, size, rhm, crewname, owner, quote, picture, music, est FROM crews WHERE crewname='$viewcrew'");
while($abc = mysql_fetch_row($ab)){
	$bank = $abc[0];
	$size = $abc[1];
$rhm = $abc[2];
$crewname = $abc[3];
$owner = $abc[4];
   $curr_quote = $abc[5];
$curr_pic = $abc[6];
$curr_music = $abc[7];
$est = $abc[8];
}

$in_crew = mysql_query("SELECT * FROM `users` WHERE `crew` = '$crewname'");
$totalmembers = mysql_num_rows($in_crew);



?>
<html>
<link rel="stylesheet" href="add/style.css" type="text/css">
<title>:: DownTown Mafia ::</title>
<center>


<center><br>
	<table border=1 cellpadding=2 cellspacing=0 class=thinline width=70% bordercolor=black>
	<tr><td colspan=3 background=images/topic.jpg><center><font color=#FFFFFF>Crew Profile For <?php echo $crewname; ?></font></center></td></tr>
<tr><td width=15%><b>Name:</b></td><td><?php echo "$crewname"; ?></a></td>
<td rowspan=6 width=30% align=center valign=center><img src="<?php if ($curr_pic == ""){ echo "images/default.jpg"; }else{ echo "$curr_pic"; } ?> " width=300 height=250></td></tr>
<tr><td width=15%><b>Leader:</b></td><td><a href=profile.php?viewuser=<? echo "$owner"; ?>><?php echo "$owner"; ?></a></td></tr>
<tr><td width=15%><b>RHM:</b></td><td><a href=<?php echo "$rhm"; ?>><?php if ($rhm == 0){ echo "None"; }else{ echo "$rhm";} ?></td></tr>
<tr><td width=15%><b>Bank:</b></td><td><?php echo "$".makecomma($bank).""; ?></td></tr>
<tr><td width=15%><b>Created:</b></td><td><?php echo "$est"; ?></td></tr></tr>
<tr><td width=15%><b>Members:</b></td><td><?php echo "$totalmembers"; ?></td></tr>
<tr><td width=15% height=30%><b>Quote:</b></td><td width=55%></td><td> <?php echo "$curr_quote"; ?> </td></tr>
<tr><td width=15%><b>Members:</b></td><td width=55%></td><td>

<? while($man = mysql_fetch_object($in_crew)) {


echo "<a href='profile.php?viewuser=$man->username'>$man->username</a> / ";
}

?>
</td></td></tr>
</table>
</center>
