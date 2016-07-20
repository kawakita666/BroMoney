<?php
session_start();
include "db.php";
include "functions.php";
include "jailcheck.php";
$username=$_SESSION['username'];

$locationa = mysql_query("SELECT money, crew, rank FROM users WHERE username='$username'");
while($successa = mysql_fetch_row($locationa)){
	$crew = $successa[1];
	$money = $successa[0];
	$rank = $successa[2];
	
}

$ab = mysql_query("SELECT bank, size, rhm, crewname, owner, picture, quote, music, succ, id, ckills FROM crews WHERE crewname='$crew'");
while($abc = mysql_fetch_row($ab)){
	$bank = $abc[0];
	$size = $abc[1];
$rhm = $abc[2];
$crewname = $abc[3];
$owner = $abc[4];
$image = $abc[5];
$quote = $abc[6];
$music = $abc[7];
$succs = $abc[8];
$id = $abc[9];
  $ckills = $abc[10]; 
}
if ($crew != '0'){
if ($username == $owner || $username == $rhm){

if ($_POST['Go']){
if ($_POST['with']){
if ($with > $bank){
echo "You dont have that much in the crew bank.";
}elseif ($with <= $bank){
if  (ereg('[^0-9]',$with))
   {
    echo "Invalid Numbers!";
}elseif(!ereg('[^0-9]',$with)){
$newbank = $bank - $with;
mysql_query("UPDATE crews SET bank='$newbank' WHERE crewname='$crewname'");
echo "money has been withdrewn";
}}}
if ($_POST['dep']){
if ($dep > $money){
echo "You dont have that much money";
}elseif ($dep <= $money){
if  (ereg('[^0-9]',$dep))
   {
    echo "Invalid Numbers!";
}elseif(!ereg('[^0-9]',$dep)){
$newbank = $bank + $dep;
mysql_query("UPDATE crews SET bank='$newbank' WHERE crewname='$crewname'");
echo "Money has been added.";
}}}}

if ($_POST['crewper']){
$checkforuser = mysql_query("SELECT * FROM `users` WHERE `crewacc` = '1' AND username='$crewper'");
$aretheytrue = mysql_num_rows($checkforuser);
if ($aretheytrue != 0){
echo "That user has forum access";
}elseif ($aretheytrue == 0){
$checkforuser1 = mysql_query("SELECT * FROM `users` WHERE `crew` = '$crewname' AND username='$crewper'");
$aretheytrue1 = mysql_num_rows($checkforuser1);

if ($aretheytrue1 == 0){
echo "Error, that user is not in your crew.";
}elseif ($aretheytrue1 != 0){
mysql_query("UPDATE users SET crewacc='1' WHERE crew='$crewname' AND username='$crewper'");
echo "That user now has access to the crew forums.";
}}}

if ($_POST['crewtake']){
$checkforuser = mysql_query("SELECT * FROM `users` WHERE `crewacc` = '0' AND username='$crewtake'");
$aretheytrue = mysql_num_rows($checkforuser);
if ($aretheytrue != 0){
echo "That doesnt have forum access to take away!";
}elseif ($aretheytrue == 0){
$checkforuser1 = mysql_query("SELECT * FROM `users` WHERE `crew` = '$crewname' AND username='$crewtake'");
$aretheytrue1 = mysql_num_rows($checkforuser1);

if ($aretheytrue1 == 0){
echo "Error, that user is not in your crew.";
}elseif ($aretheytrue1 != 0){
mysql_query("UPDATE users SET crewacc='0' WHERE crew='$crewname' AND username='$crewtake'");
echo "That user no longer has access to the crews forums.";
}}}

if ($_POST['fuckerupit']){
if (!$changerhm){
}elseif ($changerhm){
if ($changerhm == $username){
echo "Error, you cannot make the RHM yourself.";
}elseif ($changerhm != $username){

$checkforuser1 = mysql_query("SELECT * FROM `users` WHERE `crew` = '$crewname' AND username='$changerhm'");
$aretheytrue1 = mysql_num_rows($checkforuser1);
if ($aretheytrue1 == 0){
echo "Error, that user is not in your crew.";
}elseif ($aretheytrue1 != 0){

mysql_query("UPDATE crews SET rhm='$changerhm' WHERE crewname='$crew'");
echo "That user has been promoted to RHM";
}}}}

if ($_POST['duh']){
if (!$csucc){
}elseif ($csucc){
if ($csucc == $username){
echo "Error, you cannot make the Successor yourself.";
}elseif ($csucc != $username){


$checkforuser1 = mysql_query("SELECT * FROM `users` WHERE `crew` = '$crewname' AND username='$csucc'");
$aretheytrue1 = mysql_num_rows($checkforuser1);
if ($aretheytrue1 == 0){
echo "Error, that user is not in your crew.";
}elseif ($aretheytrue1 != 0){

mysql_query("UPDATE crews SET succ='$csucc' WHERE crewname='$crew'");
echo "That user has been promoted to the Crew Successor";
}}}}
if ($_POST['userinni']){
if (!$invuser){
}elseif ($invuser){
if ($invuser == $username){
echo "Error, you cannot send an invite to yourself.";
}elseif ($invuser != $username){

$retuin="SELECT * FROM users WHERE username='$invuser' AND crew !='0'";
$heas=mysql_query($retuin);
$thishoe=mysql_numrows($heas);
if ($thishoe != '0'){
echo "This user is in a crew."; 
}elseif ($thishoe == '0'){
$cool = gmdate('Y-m-d h:i:s');
$text = "You have been invited to join $crewname.
 <br> <form name=form1 method=post action=\"msg.php?crewaccept=$id\">
   <input type=hidden name=real value=$crew>
<div align=center>
    <input type=radio name=crewc value=1>
    <strong> Accept<br>
    <input type=radio name=crewc value=2>
    Decline</strong><br>
    <input type=submit name=joindacrew value=Submit>
  </div>
</form>";
$sql = mysql_query("INSERT INTO `pm` (`id`, `username`, `from`, `msg`, `read`, `date`) VALUES ('', '$invuser', '$username', '$text', '0', '$cool');") or die (mysql_error());
}}}}
$boo="SELECT * FROM users WHERE crew='$crewname'";
$he=mysql_query($boo);
$increw=mysql_numrows($he);


?>

<html>
<link rel="stylesheet" href="add/style.css" type="text/css">
<center>


<table border=1 cellspacing=0 cellpadding=2 width=90% class=thinline bordercolor=black><tr>
<td colspan=3 align=center background=images/topic.jpg><font color=#FFFFFF>Menu</font></td></tr>

<td class=header align=center><center><a href="crew.php">Crew Members</a></center></td>
<td class=header align=center><center><a href="crew1.php">Media Section</a></center></td>
<td class=header align=center><center><a href="crew2.php">Misc Section</a></center></td>



</td></tr>
</table>
<br>

<center>

<table width=100% cellpadding=0 cellspacing=0><tr valign=top><td width=50%>
<table class=thinline width=100% cellspacing=0 cellpadding=2 rules=none><tr><td background=images/topic.jpg align=center><font color=#FFFFFF>Misc</font>
<tr><td height=1 bgcolor=black colspan=2></td></tr>
<tr><td bgcolor=white align=center>Crew Bank</td></tr>
<tr><td height=1 bgcolor=black></td></tr>
<tr valign="top">

<tr><td width=160><tr><td><center>You Currently Have <?php echo "$".makecomma($bank).""; ?>  in your Crew Bank</center><p></tr></td></tr></td>
<td align=center> 

<table><tr><td width=160> <form action='' HERE method=post>

Deposit:</td><td><input type=text name=dep></td></tr><tr><td>
Withdraw:</td><td><input type=text name=with></td></tr>
</table></td>
</tr>
<tr><td align=center><input type=submit value="Submit" name='Go'></form></td></tr>
</table>
<br>



















<table width=100% class=thinline cellspacing=0 cellpadding=1 rules=none>
<tr><td align=center colspan=2 background=images/topic.jpg><font color=#FFFFFF>Misc</font></td></tr>
<tr><td height=1 bgcolor=black colspan=2></td></tr>

	<tr><td bgcolor=white align=center>Give A Member Crew Forum Acsess</td></tr>
<tr><td height=1 bgcolor=black></td></tr>

<td align=center> 

<table><tr><td width=160> <form action='' method=post>

Username (Give):</td><td><input type=text name=crewper></td></tr><tr><td>
Username (Take Away):</td><td><input type=text name=crewtake></td></tr>
</table></td>
</tr>


</td>
</tr>
<tr><td align=center><input align=center name='addyit' type=submit value="Submit"></form>
<p>

<tr><td height=1 bgcolor=black colspan=2></td></tr>
<tr><td bgcolor=white align=center>Members With Access</td></tr>
<tr><td height=1 bgcolor=black></td></tr>
<tr><td>
<? 

$test = mysql_query("SELECT * FROM users WHERE crew='$crew' AND crewacc='1'");
while($man = mysql_fetch_object($test)) {


echo "Users: $man->username-";
}
$haf=mysql_numrows($test);

if ($haf == 0){
echo "None";
}

?>

</td>
</tr>
<tr><td align=center><input align=center type=submit value="Submit"></form>

</td></tr>

	</table><br></td>




<td width=10>&nbsp;&nbsp;&nbsp;&nbsp;</td><td width=50%>

	
<table width=100% class=thinline cellspacing=0 cellpadding=1 rules=none>
<tr><td align=center colspan=2 background=images/topic.jpg><font color=FFFFFF>Right Hand Man</font></b></td></tr>
<tr><td height=1 bgcolor=black colspan=2></td></tr>
<tr valign="top">

<form action='' method=post>
<tr class=text>
<td>Current RHM:</td>
<td><?php if($rhm=='0'){ echo "None"; }else{ echo "$rhm";} ?></td>
</tr>

<tr class=text>
<td>Username:</td>
<td><input name="changerhm" type="text" style='width: 80%;'></td>
</tr>


<tr class=title>
<td>&nbsp;</td>
<td><input name="fuckerupit" type="submit" value="Submit" class=submit></td>
</tr>
</form>

</table><br>



<table width=100% class=thinline cellspacing=0 cellpadding=1 rules=none>
<tr><td align=center colspan=2 background=images/topic.jpg><font color=FFFFFF>Crew Sucsessor</font></b></td></tr>
<tr><td height=1 bgcolor=black colspan=2></td></tr>
<tr valign="top">

<form action='' method=post>
<tr class=text>
<td>Current Sucsessor:</td>
<td><?php if ($succs == '0'){ echo "None"; }else{ echo "$succs";} ?></td>
</tr>

<tr class=text>
<td>Username:</td>
<td><input name="csucc" type="text" style='width: 80%;'></td>
</tr>


<tr class=title>
<td>&nbsp;</td>
<td><input name="duh" type="submit" value="Submit" class=submit></td>
</tr>
</form>

</table><br>


<table width=100% class=thinline cellspacing=0 cellpadding=1 rules=none>
<tr><td align=center colspan=2 background=Images/topic.jpg><font color=#FFFFFF>Information</font></td></tr>
<tr><td height=1 bgcolor=black colspan=2></td></tr>



<p>

<tr><td>Members Killed : <?php if ($ckills == 0){ echo "None"; }else{ echo "$ckills"; } ?></td><td>

	</table>
	</td></tr>
	</table>
<table width=100% cellpadding=0 cellspacing=0><tr valign=top><td width=50%>
<table class=thinline width=100% cellspacing=0 cellpadding=2 rules=none><tr><td background=images/topic.jpg align=center><font color=#FFFFFF>Misc</font>
<tr><td height=1 bgcolor=black colspan=2></td></tr>
<tr><td bgcolor=white align=center>Invite</td></tr>
<tr><td height=1 bgcolor=black></td></tr>
<tr valign="top">

<tr><td width=160><tr><td><center>You Currently Have <?php echo "".makecomma($increw).""; ?>  members in your crew</center><p></tr></td></tr></td>
<td align=center> 

<table><tr><td width=160> <form action='' HERE method=post>
Username:</td><td><input type=text name=invuser></td></tr><tr><td>
</table></td>
</tr>
<tr><td align=center><input type=submit value="Submit" name='userinni'></form></td></tr>
</table>
<br>


<?php }} ?>






























