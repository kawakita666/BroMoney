<?
session_start();
include "includes/functions.php";
logincheck();
$username=$_SESSION['username'];
include "includes/db_connect.php";
include"includes/smile.php";
?>
 <?
$fetch=mysql_fetch_object(mysql_query("SELECT * FROM users WHERE username='$username'"));
$userlevel=$fetch->userlevel;

$forum=$_GET['forum'];

if ($forum == "Crew" && $fetch->crew != "0"){
$crew="1";

}
$owner=mysql_num_rows(mysql_query("SELECT * FROM crews WHERE owner='$username' OR rhm='$username'"));




$forum_look=$_GET['forum_look'];
echo "<link rel=stylesheet href=includes/in.css type=text/css>";





$forum_count = 30;

function index_navigation($index, $count, $num) {
$forum = $_GET['forum'];
	if ($index != 0) {
		print "<a href=\"left.php?forum=".$forum."&forum_look=" . ($index - $count) . "\">Previous</a> ";
	}
	if ($num == $count) {
		print " <a href=\"left.php?forum=".$forum."&forum_look=" . ($index + $count) . "\">Next</a>";
	}


}
if (! isset($forum_look) ) {
				$forum_look = 0;
			}
?>


<table border="1" cellspacing="0" cellpadding="2" class=thinline width="100%" bordercolor=black>
  <tr><td background="includes/grad.jpg" colspan="2"><a href="topic.php?forum=<? echo "$forum"; ?>"><center>New Topic</center></a></td></tr>



<?
if ($crew == "1"){
$query="SELECT * FROM `topics` WHERE `forum`='$forum' AND crew='$fetch->crew' ORDER BY `lastreply` DESC LIMIT $forum_look, $forum_count";
}else{
$query="SELECT * FROM `topics` WHERE `forum`='$forum' ORDER BY `lastreply` DESC LIMIT $forum_look, $forum_count";
}


$query=mysql_query("$query");
$num=mysql_num_rows($query);
$col="0";
while($fo=mysql_fetch_object($query)){
if ($col=="0"){ $td="#333333"; $col="1"; }else{ $td="#000000"; $col="0"; }

$hehe=mysql_num_rows(mysql_query("SELECT * FROM replys WHERE idto='$fo->id'"));




if ($userlevel > 0 || strtolower($by) == strtolower($username)){
echo "<tr bgcolor=$td><td width='92%'>"; if ($fo->sticky == "1" ){ echo"<img src=images/sticky.jpg>"; } echo "<a href='right.php?viewtopic=$fo->id&forum=$forum' target='frameright'>$fo->title</a>  <a href='left.php?clean=$fo->id&forum=$forum'><font color=red>D</font></a></td>";
}elseif ($crew == "1" && $owner != "0"){
echo "<tr  bgcolor=$td><td width='92%'>"; if ($fo->sticky == "1" ){ echo"<img src=images/topic.jpg>"; } echo "<a href='right.php?viewtopic=$fo->id&forum=$forum' target='frameright'>$fo->title</a>  <a href='left.php?clean=$fo->id&forum=$forum'><font color=red>D</font></a></td>";
}else{
echo "<tr  bgcolor=$td><td width='92%'>"; if ($fo->sticky == "1" ){ echo"<img src=images/topic.jpg>"; } echo "<a href='right.php?viewtopic=$fo->id&forum=$forum' target='frameright'>$fo->title</a></td>";
}


echo "<td width='8%' align='right'>$hehe</td></tr>";




}



if($_GET[clean]) {
$clean = $_GET[clean];
$cc=mysql_num_rows(mysql_query("SELECT * FROM topics WHERE username='$username' AND id='$clean'"));

if($userlevel > 0 || $clean != "0" ){
if ($forum == "Crew" && $crew == "1"){
mysql_query("DELETE FROM topics WHERE id='$clean' AND crew='$fetch->crew'");
mysql_query("DELETE FROM replys WHERE idto='$clean' AND crew='$fetch->crew'");
}else{
mysql_query("DELETE FROM topics WHERE id='$clean'");
mysql_query("DELETE FROM replys WHERE idto='$clean'");
}

echo "Cleaned";
echo "<META HTTP-EQUIV='Refresh' CONTENT='2; URL=left.php?forum=$forum'>";
}
}


?>
</table><br>

<?php
	index_navigation($forum_look, $forum_count, $num);
?>