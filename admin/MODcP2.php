<?php
session_start();
include "includes/db_connect.php";
include "includes/functions.php";
logincheck();
$username=$_SESSION['username'];

echo "$style";
$fetch=mysql_fetch_object(mysql_query("SELECT * FROM users WHERE username='$username'"));
$userlevel=$fetch->userlevel;
$mod_log=mysql_fetch_object(mysql_query("SELECT * FROM users WHERE rank='Admin'"));
if ($fetch->userlevel != "0"){
if (strip_tags($_GET['op']) == "dupe"){

}elseif (strip_tags($_GET['op']) == "ban"){
if(strip_tags($_POST['Ban']) && strip_tags($_POST['ban_username']) && strip_tags($_POST['ban_reason'])){
$time=strip_tags($_POST['time']);
$ban_username = strip_tags($_POST['ban_username']);
$ban_reason = strip_tags($_POST['ban_reason']);
if(!$time){
		$type = "0";
		$time_for = "N/A";


	}elseif($time){
		$type = "1";
				$time_for = time() + (86400*$time);

}
$check = mysql_num_rows(mysql_query("SELECT username FROM users WHERE username='$ban_username'"));

if ($check == "0") {
	echo "No such user";
}elseif ($check != "0") {

mysql_query("INSERT INTO `ban` (`id`, `username`, `by`, `type`, `reason`, `length`) VALUES ('', '$ban_username', '$username', '$type', '$ban_reason', '$time_for')");


mysql_query("INSERT INTO `log` ( `id` , `by` , `action` , `level` )
VALUES ('', '$username', 'Banned $ban_username for reason $ban_reason', '$userlevel')");



mysql_query("UPDATE users SET status='Banned' WHERE username='$ban_username'");
	echo "<td><font color=red>That user is now banned!</font></td>";


}} ?>
<form name="form1" method="post" action="">
  <table width="67%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="<?php echo "$td_border"; ?>" bgcolor="<?php echo "$td_bg"; ?>">
    <tr>
      <td height=22 background="<?php echo"$gradient"; ?>"><center class="TableHeading">
          <strong>Ban a user</strong> </center></td>
    </tr>
    <tr>
      <td><table width="100%" border="0" cellspacing="3" cellpadding="0">
          <tr>
            <td width="50%">Username</td>
            <td width="50%"><input name="ban_username" type="text" id="ban_username"></td>
          </tr>
          <tr>
            <td>Length (Leave empty for a permanent ban).</td>
            <td><input name="time" type="text" id="time">
              Hours</td>
          </tr>
          <tr>
            <td>Reason</td>
            <td><textarea name="ban_reason" cols="40" rows="7" id="ban_reason"></textarea></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><input name="Ban" type="submit" id="Ban" value="Ban this user"></td>
          </tr>
        </table></td>
    </tr>
  </table>
</form>
<p><br>
  <br>
</p>
</body>
</html>
<?

}elseif (strip_tags($_GET['op']) == "lvlc"){

?>
<form name="form1" method="post" action="">
  <table width="67%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="<?php echo "$td_border"; ?>
    <tr>
      <td height=22 background="<?php echo"$gradient"; ?>&nbsp;<center class="TableHeading">
          Change userlevel</center></td>
    </tr>
    <tr>
      <td><table width="100%" border="0" cellspacing="3" cellpadding="0">
          <tr>
            <td width="50%">Username</td>
            <td width="50%">
            <input name="jjj" type="text" id="ban_username" size="20"></td>
          </tr>
          <tr>
            <td>Userlevel:</td>
            <td><select size="1" name="userlevel">
            <option value="1">Player</option>
            <option value="2">Moderator</option>
            <option value="3">Admin</option>
            </select></td>
          </tr>
          <tr>
            <td>State:</td>
            <td><select size="1" name="state">
            <option value="Banned">Banned</option>
            <option value="Alive">Alive</option>
            <option value="Dead">Dead</option>
            </select></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>
            <input name="change" type="submit" id="Ban" value="Change level!"></td>
          </tr>
        </table></td>
    </tr>
  </table>
</form>
<p><br>
  <br>
</p>
</body>
</html>
<?php



}elseif (strip_tags($_GET['op']) == "war"){
if (strip_tags($_POST['warning_username']) && strip_tags($_POST['warning_msg'])){
$warning_username=strip_tags($_POST['warning_username']);
$warning_msg=strip_tags($_POST['warning_msg']);
$check=mysql_num_rows(mysql_query("SELECT * FROM users WHERE username='$warning_username'"));
if ($check =="0"){
echo "No such user!";
}elseif($check !="0"){
mysql_query("INSERT INTO `inbox` ( `id` , `to` , `from` , `message` , `date` , `read` , `saved` , `event_id` )
VALUES (
'', '$warning_username', '$warning_username', '$warning_msg You Have Been Warned!', '$date', '0', '0', '0'
)");

if($fetch->userlevel == '1'){

mysql_query("INSERT INTO `inbox` ( `id` , `to` , `from` , `message` , `date` , `read` , `saved` , `event_id` )
VALUES ('', '$mod_log->username', 'Admin Logs', '$username warned $warning_userlevel <br><br> $mod->username said $warning_msg', '$date', '0', '0', '0')");


}


}}

?>
<form action="" method=POST>
<table width="67%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="<?php echo "$td_border"; ?>" bgcolor="<?php echo "$td_bg"; ?>">
  <tr>
    <td height=22 background="<?php echo"$gradient"; ?>"><center class="TableHeading">
        <strong>Send warning</strong>
      </center></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="3" cellpadding="0">
        <tr>
          <td colspan="2">This will send a warning to the user inbox. It will automaticly attach "You            Have Been Warned!" at the end.</td>
        </tr>
        <tr>
          <td width="49%">Username:</td>
          <td width="51%"><input name="warning_username" type="text" maxlength="40"></td>
        </tr>
        <tr>
          <td>Message:</td>
          <td><input name="warning_msg" type="text" maxlength="200"></td>
        </tr>
        <tr>
          <td colspan="2"><div align="center">
              <input name="Send" type="submit" id="Send" value="Send warning">
            </div></td>
        </tr>
      </table></td>
  </tr>
</table></form><?


}elseif (strip_tags($_GET['op']) == "forum"){
if (strip_tags($_POST['dall']) && strip_tags($_POST['dallbut'])){
$dall=strip_tags($_POST['dall']);
$check=mysql_num_rows(mysql_query("SELECT * FROM users WHERE username='$dall'"));
if ($check =="0"){
echo "No such user!";
}elseif($check !="0"){
mysql_query("DELETE FROM topics WHERE username='$dall'");
echo "".mysql_affected_rows()." topics deleted";
mysql_query("DELETE FROM replys WHERE username='$dall'");

echo "".mysql_affected_rows()." replys deleted";

}}elseif (strip_tags($_POST['stick']) && strip_tags($_POST['sticky_but'])){
$stick=strip_tags($_POST['stick']);

$check1=mysql_query("SELECT * FROM topics WHERE title='$stick'");
$check=mysql_num_rows($check1);
$chech=mysql_fetch_object($check1);
$new_tit="<b>$chech->title</b>";

if ($check == "0"){
echo "Invalid Topic Name";
}elseif($check != "0"){
mysql_query("UPDATE topics SET sticky='1', lastreply='999999999999999', title='$new_tit' WHERE title='$stick'");
echo "Sticky topic made";

}}elseif (strip_tags($_POST['lock']) && strip_tags($_POST['locky_but'])){
$lock=strip_tags($_POST['lock']);

$check=mysql_num_rows(mysql_query("SELECT * FROM topics WHERE title='$lock'"));
if ($check == "0"){
echo "Invalid title";
}elseif($check != "0"){
mysql_query("UPDATE topics SET locked='1' WHERE title='$lock'");
echo "Topic locked";

}}


?><form action="" method=POST>
<table width="67%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="<?php echo "$td_border"; ?>" bgcolor="<?php echo "$td_bg"; ?>">
  <tr>
    <td height=22 background="<?php echo"$gradient"; ?>"><center class="TableHeading">
        <strong>Forum options</strong>
      </center></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="3" cellpadding="0">
        <tr>
          <td colspan="2"><div align="center">Delete all posts/topics made by
              a user</div></td>
        </tr>
        <tr>
          <td width="49%">Username:</td>
          <td width="51%"><input name="dall" type="text" maxlength="40">
            <input name="dallbut" type="submit" id="Send22" value="Delete"></td>
        </tr>
        <tr>
          <td colspan="2"><div align="center">Make a sticky topic</div>
            <div align="center"> </div></td>
        </tr>
        <tr>
          <td>Topic Title</td>
          <td><input type="text" name="stick"> <input name="sticky_but" type="submit" id="Delete" value="Stick"></td>
        </tr>
        <tr>
          <td colspan="2"><div align="center">Lock a topic</div></td>
        </tr>
        <tr>
          <td>Topic Title</td>
          <td><input name="lock" type="text" id="lock_id"> <input name="locky_but" type="submit" id="Stick" value="Lock"></td>
        </tr>
      </table></td>
  </tr>
</table></form>
<?


}




?>


<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<table width="67%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="<?php echo "$td_border"; ?>" bgcolor="<?php echo "$td_bg"; ?>">
  <tr>
    <td height=22 background="<?php echo"$gradient"; ?>"><center class="TableHeading">
        <strong>ModCP</strong>
      </center></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="3" cellpadding="0">
        <tr>
          <td width="100%"> This is the AdminCP for LA-Mafia. Please note that Looney and NaysNay will be monitor all your actions and movement here. You could be fired for doing wrong things. Be           warned.</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><div align="center"><strong>Tools:</strong></div></td>
        </tr>
<? if ($fetch->userlevel == "2"){ ?>
        <tr>
          <td>-<a href="dupecheck.php" target="middle">Dupe check</a></td>
        </tr>
<? } ?>
        <tr>
          <td>-<a href="">Ban</a></td>
        </tr>
        <tr>
<? if ($fetch->userlevel == "2"){ ?>


          <td>-<a href="">Change userlevel</a></td>
        </tr>

<? } ?>
        <tr>
          <td>-<a href="">Send warning</a></td>
        </tr>
        <tr>
          <td>-<a href="">Forum options</a></td>
        </tr>
        <tr>
          <td>-<a href="oeticket.php" target="middle">Ticket system</a></td>
        </tr>
<? if ($fetch->userlevel == "2"){ ?>
        <tr>
          <td>-<a href="">Give Money</a></td>
        </tr>
<tr>
          <td>-<a href="give_bullets_submit.php" target="middle">Give Bullets</a></td>
</tr>
<tr>
<td>-<a href="hp" target="middle">Give Points</a></td>
        </tr>
        <tr>
          <td>-<a href="mass_msg.php">Message All Users</a></td>
        </tr>
        <tr>
          <td>-<a href="money_reset_submit.php">Money Reset</a></td>
        </tr>
        <tr>
          <td>-<a href="MODcP2.php">Refresh</a></td>
        </tr>
        <tr>
        <td>-<a href="mb.php">Back To Game</a></td>
        </tr>

<? } ?>



      </table></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>

<? } ?>