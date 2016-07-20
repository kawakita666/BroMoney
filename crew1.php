<?php
session_start();
include "db.php";
$username=$_SESSION['username'];

$locationa = mysql_query("SELECT money, crew, rank FROM users WHERE username='$username'");
while($successa = mysql_fetch_row($locationa)){
	$crew = $successa[1];
	$money = $successa[0];
	$rank = $successa[2];

}

$ab = mysql_query("SELECT bank, size, rhm, crewname, owner, quote, picture, music FROM crews WHERE crewname='$crew'");
while($abc = mysql_fetch_row($abc)){
	$bank = $abc[0];
	$size = $abc[1];
$rhm = $abc[2];
$crewname = $abc[3];
$owner = $abc[4];
   $curr_quote = $abc[5];
$curr_pic = $abc[6];
$curr_music = $abc[7];
}
if ($crew != '0'){
if ($username == $owner || $username == $rhm){






if(isset($_POST['changequote'])){
mysql_query("UPDATE crews SET quote='$nquote' WHERE crewname='$crewname'");
echo "Crew quote changed!";
echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0; URL=../crew1.php\">";
}elseif($_POST['changepic']){
mysql_query("UPDATE crews SET picture='$img' WHERE crewname='$crewname'");
echo "Image added!";
echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0; URL=../crew1.php\">";
}elseif($_POST['cm']){
mysql_query("UPDATE crews SET music='$cc' WHERE crewname='$crewname'");
echo "Music added!";
echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0; URL=../crew1.php\">";
}elseif($_POST['rec']){
if ($choice == 1){
$nrec = 'Yes';
}elseif ($choice == 2){
$nrec = No;
}
mysql_query("UPDATE crews SET recruit='$nrec' WHERE crewname='$crewname'");
echo "Status changed!";
echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0; URL=../crew1.php\">";
}
?>
<html>
<link rel="stylesheet" href="add/style.css" type="text/css">
<center>


<table border=1 cellspacing=0 cellpadding=2 width=90% class=thinline bordercolor=black><tr>
<td colspan=3 align=center background=images/topic.jpg><font color=#000000>Menu</font></td></tr>

<td class=header align=center><center><a href="crew.php">Crew Members</a></center></td>
<td class=header align=center><center><a href="crew1.php">Media Section</a></center></td>
<td class=header align=center><center><a href="crew2.php">Misc Section</a></center></td>



</td></tr>
</table>
<br>

<html>
<link rel="stylesheet" href="add/style.css" type="text/css">
<center>






<table width=100% cellpadding=0 cellspacing=0><tr valign=top><td width=50%>
<table class=thinline width=100% cellspacing=0 cellpadding=2 rules=none><tr><td background=images/topic.jpg align=center><font color=#FFFFFF>Recruitment</font>
<tr><td height=1 bgcolor=black colspan=2></td></tr>
<tr><td bgcolor=white align=center>Recruitment Centre</td></tr>
<tr><td height=1 bgcolor=black></td></tr>

<tr valign="top"><td align=left><form action='' method=post>
<input type=radio name=choice value=1 checked>Recruiting<br>
<input type=radio name=choice value=2>Not Recruiting<br>





<tr><td align=center><input type=submit value="Submit" name='rec'></form></td></tr>
</table>
<br>













<table width=100% class=thinline cellspacing=0 cellpadding=1 rules=none>
<tr><td align=center colspan=2 background=images/topic.jpg><font color=#FFFFFF>Misc Options</font></td></tr>
<tr><td height=1 bgcolor=black colspan=2></td></tr>

<form action='' method=post>
<tr class=text>
<td>Current Music:</td>
<td><?php echo "$curr_music"; ?></td>
</tr>

<tr class=text>
<td>Music:</td>
<td><input name="cc" type="text" value="<?php if ($music == ""){ echo "http://"; }else{ echo "$curr_music"; } ?>" style='width: 80%;'></td>
</tr>


</td>
</tr>
<tr><td align=center><input align=center type=submit name='cm'value="Submit"></form>

</td></tr>

	</table><br>


<table width=100% class=thinline cellspacing=0 cellpadding=1 rules=none>
<tr><td align=center colspan=2 background=images/topic.jpg><font color=#FFFFFF>Misc Options</font></td></tr>
<tr><td height=1 bgcolor=black colspan=2></td></tr>

<form action='' method=post>
<tr class=text>
<td>Current Picture:</td>
<td><? echo "$curr_pic"; ?></td>
</tr>

<tr class=text>
<td>Picture:</td>
<td><input name="img" type="text" value="<?php if ($image == ""){ echo "http://"; }else{ echo "$curr_pic"; } ?>" style='width: 80%;'></td>
</tr>


</td>
</tr>
<tr><td align=center><input align=center type=submit name='changepic' value="Submit"></form>
</form>
</td></tr>

	</table><br></td>




<td width=10>&nbsp;&nbsp;&nbsp;&nbsp;</td><td width=50%>
	<table width=100% class=thinline cellspacing=0 cellpadding=1 rules=none>

<tr><td align=center colspan=2 background=images/topic.jpg><font color=#FFFFFF>Crew</font></td></tr>
<tr><td bgcolor=white align=center>Crew Quote</td></tr>
<tr><td height=1 bgcolor=black></td></tr>
<tr valign="top">
<td align=center><form action='' method=post>Quote: <br><textarea cols=56 rows=14 name=nquote><?php echo "$curr_quote"; ?></textarea></td>
</tr>
<tr><td align=center><input type=submit value="Submit" name='changequote'></form></td></tr>

</td>
</tr>
</table>




<br>

<?  }} ?>




















