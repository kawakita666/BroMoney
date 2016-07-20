<?
session_start();
include "includes/db_connect.php";
include "includes/functions.php";
include"includes/smile.php";
logincheck();
$forum=$_GET['forum'];
$username=$_SESSION['username'];
$viewtopic = $_GET['viewtopic'];
$forum_look=$_GET['forum_look'];


if (!$viewtopic){
$viewtopic = "1";
}
$fetch=mysql_fetch_object(mysql_query("SELECT * FROM users WHERE username='$username'"));
if ($forum == "Crew" && $fetch->crew != "0"){
$crew="1";

}
$owner=mysql_num_rows(mysql_query("SELECT * FROM crews WHERE owner='$username' OR rhm='$username'"));


$userlevel=$fetch->userlevel;


	$select = mysql_fetch_object(mysql_query("SELECT * FROM topics WHERE id='$viewtopic' AND forum='$forum'"));

	$forum_count = 15;

function index_navigation($index, $count, $num) {
$forum = $_GET['forum'];
$viewtopic = $_GET['viewtopic'];
	if ($index != 0) {
		print "<a href=\"right.php?forum=$forum&viewtopic=$viewtopic&forum_look=" . ($index - $count) . "\">Previous</a> ";
	}
	if ($num == $count) {
		print " <a href=\"right.php?forum=$forum&viewtopic=$viewtopic&forum_look=" . ($index + $count) . "\">Next</a>";
	}


}
if (! isset($forum_look) ) {
				$forum_look = 0;
			}

	?>


<html><head>
<link href="includes/in.css" rel="stylesheet" type="text/css">
</head><body><center>
<table width="551" border=1 align="center" cellpadding=2 cellspacing=0 class=thinline rules=none>
  <tr>
    <td class=header align=center><?php echo "$select->title"; ?></td>
  </tr>
  <tr>
    <td bgcolor=black height=1><a name="<?php echo "$select->id"; ?></a>"></a></td>
  </tr>
  <tr>
    <td bgcolor="white" class=tip>Poster: <a href="profile.php?viewuser=<? echo "$select->username"; ?>" style="color:red;font-weight=bold"><?php echo "$select->username"; ?></a>
      Time: <?php echo "$select->made"; ?> </td>
  </tr>
  <tr>
    <td bgcolor=black height=2></td>
  </tr>
  <tr>
    <td width="80%"> <table width="100%" border="0" cellspacing="3" cellpadding="0">
        <tr>
          <td><?php echo "$select->topictext"; ?></td>
        </tr>
      </table></td>
  </tr>
  <?php $replys=mysql_query("SELECT * FROM replys WHERE idto = '$viewtopic' AND forum='$forum' ORDER by `id` DESC LIMIT $forum_look, $forum_count");
  while($curr=mysql_fetch_object($replys)){
  ?>
  <tr>
    <td bgcolor=black height=2><a name="39453"></a></td>
  </tr>
  <tr>
    <td bgcolor="white" class=tip>Poster: <a href="profile.php?viewuser=<?php echo "$curr->username"; ?>" style="color:black" title=""><?php echo "$curr->username"; ?></a>
      Time: <?php echo "$curr->made"; ?></td>
  </tr>
  <tr>
    <td bgcolor=black height=2></td>
  </tr>
  <tr>
    <td width="80%"> <table width="100%" border="0" cellspacing="3" cellpadding="0">
        <tr>
          <td><?php echo "$curr->text"; ?></td>
        </tr>
      </table></td>
  </tr>


  <? } ?>
      <tr>
    <td bgcolor=black height=2></td>
  </tr>
  <tr bgcolor=white>
    <td colspan=2 align=right class=tip><?php if ($select->locked == "1"){ echo "This topic is locked. No more replys can be made."; }else{ ?><a href=reply.php?forum=<?php echo "$forum"; ?>&viewtopic=<?php echo "$viewtopic"; ?>><font color="#000000">Add
      reply </font></a><? } ?></td>
  </tr>
  <tr bgcolor=white>
    <td colspan=2 align=right class=tip><div align="center">



<?php
	index_navigation($forum_look, $forum_count, $num);
?>
      </div></td>
  </tr>
</table>
</body></html>