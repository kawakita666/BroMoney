<?php
session_start();
include "includes/db_connect.php";
include "includes/functions.php";
logincheck();
$username=$_SESSION['username'];

echo "$style";
$fetch=mysql_fetch_object(mysql_query("SELECT * FROM users WHERE username='$username'"));
$userlevel=$fetch->userlevel;
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
	echo "Wrong Username";
}elseif ($check != "0") {

mysql_query("INSERT INTO `ban` (`id`, `username`, `by`, `type`, `reason`, `length`) VALUES ('', '$ban_username', '$username', '$type', '$ban_reason', '$time_for')");


mysql_query("INSERT INTO `log` ( `id` , `by` , `action` , `level` )
VALUES ('', '$username', 'Banned $ban_username for reason $ban_reason', '$userlevel')");



mysql_query("UPDATE users SET status='Banned' WHERE username='$ban_username'");
	echo "<td><font color=red>That user is now banned!</font></td>";


}} ?>
<form name="form1" method="post" action="?op=ban">
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
            <td>Length (Leave blank for permanent ban).</td>
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
<form name="form1" method="post" action="?op==lvlc">
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
echo "Wrong Username!";
}elseif($check !="0"){
mysql_query("INSERT INTO `inbox` ( `id` , `to` , `from` , `message` , `date` , `read` , `saved` , `event_id` )
VALUES (
'', '$warning_username', '$warning_username', '$warning_msg You have been warned!', '$date', '0', '0', '0'
)");

if($fetch->userlevel == '1'){

mysql_query("INSERT INTO `inbox` ( `id` , `to` , `from` , `message` , `date` , `read` , `saved` , `event_id` )
VALUES ('', '$mod_log->username', 'Admin Logs', '$username warned $warning_userlevel <br><br> $mod->username said $warning_msg', '$date', '0', '0', '0')");


}


}}

?>
<form action="?op=war" method=POST>
<table width="67%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="<?php echo "$td_border"; ?>" bgcolor="<?php echo "$td_bg"; ?>">
  <tr>
    <td height=22 background="<?php echo"$gradient"; ?>"><center class="TableHeading">
        <strong>Send warning</strong>
      </center></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="3" cellpadding="0">
        <tr>
          <td colspan="2">This tool will send a warning to the user inbox. Try to write short warnings. Each warning will get "You have been warned!" automaticly. Please do not abuse the           tool.</td>
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
        <strong>Moderator Control Panel </strong>
    </center></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="3" cellpadding="0">
        <tr>
          <td width="100%">This is the Moderators Control Panel. Use this CP to moderate BTM. Anyone abusing this tool will be fired. Admins monitor moderator's action.</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><div align="center"><strong>Tools:</strong></div></td>
        </tr>
<tr>
          <td>-<a href="dupecheck.php" target="middle">Dupe check</a></td>
        </tr>
        <tr>
          <td>-<a href="?op=ban">Ban</a></td>
        </tr>
        <tr>
          <td>-<a href="?op=lvlc">Change userlevel</a></td>
        </tr>
        <tr>
          <td>-<a href="?op=war">Send warning</a></td>
        </tr>
        <tr>
          <td>-<a href="?op=forum">Forum options</a></td>
        </tr>
		<tr>
          <td>-<a href="">Money Reset </a></td>
        </tr>
		<tr>
          <td>-<a href="">Reset </a></td>
        </tr>
		<tr>
          <td>-<a href="">Give Money </a></td>
        </tr>
		<tr>
          <td>-<a href="">Give Bullets </a></td>
        </tr>
		<tr>
          <td>-<a href="">Give Points </a></td>
        </tr>




<? } ?>

      </table></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>

<? } ?>