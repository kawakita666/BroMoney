<?php 
session_start(); 
header("Cache-control: private"); 
include "includes/db_connect.php";
include "includes/functions.php";
echo "$style";
logincheck();
$userlevl = mysql_query("SELECT userlevel FROM users WHERE username='$username'");
while($successa = mysql_fetch_row($userlevl)){
	$userlevel = $successa[0];
	
}
if ($userlevel == 0){
echo "Error.";
}elseif ($userlevel > 0){




?>

<html>
<link rel="stylesheet" href="add/style.css" type="text/css">
<center>

<table border=1 cellspacing=0 cellpadding=2 width=90% class=thinline bordercolor=black><tr>
<td colspan=3 align=center background=images/topic.jpg><font color='#FFFFFF'>OC Dupe Checker</font></td></tr>
<div id="lt">
<td class=header align=center width=33%>Username</td>
<td class=header align=center width=33%>ip</td>
<td class=header align=center width=70%>Last OC (1970-01-01 12:00:00 = NO OC)</td>
<td class=header align=center width=33%>Ban</td>
</tr>	
<?
$test = mysql_query("SELECT * FROM users WHERE status='Alive' ORDER BY r_ip DESC");
while($man = mysql_fetch_object($test)) {

$lol = mysql_query("SELECT * FROM users WHERE r_ip = '$man->r_ip'");
$rows = mysql_num_rows($lol);

?>


<? 

$loc = gmdate('Y-m-d h:i:s',$man->octim);

$last_oc = gmdate('Y-m-d h:i:s',$man->last_oc);



if ($bgcolorswithcer == "0"){

$color_td = "#FFFFFF";
$bgcolorswithcer = '1';
 }
if ($bgcolorswithcer == '1'){

$color_td = "#666666"; 
$bgcolorswithcer = '0';
} 

if($rows > 1) {




if ($man->oc_time == ""){
echo "<tr bgcolor=$color_td><td><b><center>$man->username</center></a></td> <td><center>$man->r_ip</center></td><td><center>$last_oc</center></td> <td><a href= 'ban.php?banwho=$man->username'>Ban</a></td></tr>";
}else{

echo "<tr bgcolor=$color_td><td><b>$man->username</a></td> <td>$man->r_ip</td><td>$last_oc</td> <td><a href= 'ban.php?banwho=$man->username'>Ban</a></td></tr>";
}

}
}
}
?>
