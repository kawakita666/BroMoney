<?php session_start();
include_once"includes/db_connect.php";
include_once"includes/functions.php";
logincheck();
$username=$_SESSION['username'];

$query=mysql_query("SELECT * FROM users WHERE username='$username'");
$fetch=mysql_fetch_object($query);
$crew=mysql_fetch_object(mysql_query("SELECT * FROM crews WHERE name='$fetch->crew'"));

if ($fetch->crew == $crew->name  && strtolower($crew->rhm) == strtolower($username) ||  strtolower($crew->owner) == strtolower($username)){
////////////////////////////////////////////////////////////////////
if (strip_tags($_POST['invite_button']) && strip_tags($_POST['invite'])){
$invite= strip_tags($_POST['invite']);

$check_query=mysql_query("SELECT * FROM users WHERE username='$invite'");
$check_excist = mysql_num_rows($check_query);
$fetch_check = mysql_fetch_object($check_query);

if ($check_excist == "0"){
echo "There is no such user.";
}elseif ($check_excist != "0"){

if ($fetch_check->crew != "0"){
echo "That user is already in a crew";
}elseif ($fetch_check->crew == "0"){


$message = "<form name=form1 method=post action=>
  <div align=center>You have been invited to join $crew->name<br>
    <input type=radio name=invite_crew value=1>
    Accept 
    <input type=radio name=invite_crew value=2>
    Decline <br>
    <br>
    <input name=join_crew type=submit id=join_crew>
<input name=delete_it type=hidden id=match value=$get->id>
  </div>
</form>
";

mysql_query("INSERT INTO `inbox` ( `id` , `to` , `from` , `message` , `date` , `read` , `saved` , `event_id` ) 
VALUES (
'', '$invite', '$invite', '$message', '$date', '0', '0', '$crew->id'
)");
mysql_query("UPDATE users SET crew_invite='$crew->id' WHERE username='$invite'");

echo "Invite sent";
}}}
////////////////////////////////////////////////////////////////////
//////////////////////////////////
if (strip_tags($_POST['kick_button']) && strip_tags($_POST['kick_username'])){
$kick_username= strip_tags($_POST['kick_username']);
$check_query=mysql_query("SELECT * FROM users WHERE username='$kick_username'");
$check_excist = mysql_num_rows($check_query);
$fetch_check = mysql_fetch_object($check_query);

if ($check_excist == "0"){
echo "There is no such user.";
}elseif ($check_excist != "0"){
if ($fetch_check->crew != $crew->name){
echo "That user is not in your crew.";
}elseif ($fetch_check->crew == $crew->name){

if (strtolower($kick_username) == strtolower($crew->owner) || strtolower($kick_username) == strtolower($crew->rhm)){
echo "You cannot kick the RHM or owner";
}elseif (strtolower($kick_username) != strtolower($crew->owner) && strtolower($kick_username) != strtolower($crew->rhm)){

mysql_query("UPDATE users SET crew='0' WHERE username='$kick_username'");
$message = strip_tags($_POST['kick_message']);
mysql_query("INSERT INTO `inbox` ( `id` , `to` , `from` , `message` , `date` , `read` , `saved` , `event_id` ) 
VALUES (
'', '$kick_username', '$kick_username', 'You have been kicked from $crew->name for the following reason: <br>$message', '$date', '0', '0', ''
)");
echo "User has been kicked";
}
}}}
//////////////////////////////////////

//////////////////////////////////
if (strip_tags($_POST['rhm_button']) && strip_tags($_POST['rhm_username'])){
$rhm_username= strip_tags($_POST['rhm_username']);
$check_query=mysql_query("SELECT * FROM users WHERE username='$rhm_username'");
$check_excist = mysql_num_rows($check_query);
$fetch_check = mysql_fetch_object($check_query);

if ($check_excist == "0"){
echo "There is no such user.";
}elseif ($check_excist != "0"){
if ($fetch_check->crew != $crew->name){
echo "That user is not in your crew.";
}elseif ($fetch_check->crew == $crew->name){

mysql_query("UPDATE crews SET rhm='$rhm_username' WHERE name='$crew->name'");
$message = "You have been promoted to RHM in your crew!";

mysql_query("INSERT INTO `inbox` ( `id` , `to` , `from` , `message` , `date` , `read` , `saved` , `event_id` ) 
VALUES (
'', '$rhm_username', '$rhm_username', '$message', '$date', '0', '0', ''
)");
echo "RHM assigned";
}}}
////////////////////////////////////////////////////////


if (strip_tags($_POST['hand_button']) && strip_tags($_POST['hand_username']) && strtolower($username) == strtolower($crew->owner)){
$hand_username= strip_tags($_POST['hand_username']);
$check_query=mysql_query("SELECT * FROM users WHERE username='$hand_username'");
$check_excist = mysql_num_rows($check_query);
$fetch_check = mysql_fetch_object($check_query);

if ($check_excist == "0"){
echo "There is no such user.";
}elseif ($check_excist != "0"){
if ($fetch_check->crew != "0"){
echo "That user is in a crew";
}elseif ($fetch_check->crew == "0"){

mysql_query("UPDATE users SET crew='0' WHERE username='$username'");
mysql_query("UPDATE crews SET owner='$hand_username' WHERE name='$crew->name'");
mysql_query("UPDATE users SET crew='$crew->name' WHERE username='$hand_username'");
$message = "You know are the owner and founder of $crew->name";

mysql_query("INSERT INTO `inbox` ( `id` , `to` , `from` , `message` , `date` , `read` , `saved` , `event_id` ) 
VALUES (
'', '$hand_username', '$hand_username', '$message', '$date', '0', '0', ''
)");
echo "That user is now the owner of your this crew.";
}}}
if (strip_tags($_POST['mass_button']) && strip_tags($_POST['mass_msg'])){
$mass_msg=strip_tags($_POST['mass_msg']);
$total=0;
$select_all=mysql_query("SELECT * FROM users WHERE crew='$crew->name'");
while($send_to=mysql_fetch_object($select_all)){
mysql_query("INSERT INTO `inbox` ( `id` , `to` , `from` , `message` , `date` , `read` , `saved` , `event_id` ) 
VALUES (
'', '$send_to->username', '$send_to->username', '$mass_msg', '$date', '0', '0', ''
)");
$total++;
}
echo "$total messages sent";
}



?>
<form name="form1" method="post" action="">
<link rel=stylesheet href=includes/in.css type=text/css>

  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="3">
    <tr> 
      <td width="51%"><table width="100%" border="1" cellspacing="0" cellpadding="0" bordercolor="<?php echo "$td_border"; ?>" bgcolor="<?php echo "$td_bg"; ?>" >
          <tr> 
            <td class="header"><center>
                Invite </center></td>
          </tr>
          <tr> 
            <td><table width="100%" border="0" cellspacing="3" cellpadding="0">
                <tr> 
                  <td width="50%"> <div align="left">Username: </div></td>
                  <td width="50%"><input name="invite" type="text" id="invite"></td>
                </tr>
                <tr> 
                  <td>Message:</td>
                  <td><input name="invite_msg" type="text" id="invite_msg"></td>
                </tr>
                <tr> 
                  <td colspan="2"><div align="right"> 
                      <input name="invite_button" type="submit" id="invite_button" value="Invite">
                    </div></td>
                </tr>
              </table></td>
          </tr>
        </table></td>
      <td width="49%"><table width="100%" border="1" cellspacing="0" cellpadding="0" bordercolor="<?php echo "$td_border"; ?>" bgcolor="<?php echo "$td_bg"; ?>" >
          <tr> 
            <td class="header"><center>
                Kick </center></td>
          </tr>
          <tr> 
            <td><table width="100%" border="0" cellspacing="3" cellpadding="0">
                <tr> 
                  <td width="37%">Username: </td>
                  <td width="63%"><input name="kick_username" type="text" id="kick_username"></td>
                </tr>
                <tr> 
                  <td>Message:</td>
                  <td><input name="kick_msg" type="text" id="invite3"></td>
                </tr>
                <tr> 
                  <td colspan="2"><div align="right"> 
                      <input name="kick_button" type="submit" id="kick_button" value="Kick">
                    </div></td>
                </tr>
              </table></td>
          </tr>
        </table></td>
    </tr>
    <tr> 
      <td><table width="100%" border="1" cellspacing="0" cellpadding="0" bordercolor="<?php echo "$td_border"; ?>" bgcolor="<?php echo "$td_bg"; ?>" >
          <tr> 
            <td class="header"><center>
                Trigger crew war </center></td>
          </tr>
          <tr> 
            <td><table width="100%" border="0" cellspacing="3" cellpadding="0">
                <tr> 
                  <td width="43%">Crew id </td>
                  <td width="57%"><input name="war_id" type="text" id="war_id"></td>
                </tr>
                <tr> 
                  <td>Reason</td>
                  <td><input name="war_reason" type="text" id="invite4"></td>
                </tr>
                <tr> 
                  <td height="19" colspan="2"> <div align="right"> 
                      <input name="war_button" type="submit" id="war_button" value="Start crew war">
                    </div></td>
                </tr>
              </table></td>
          </tr>
        </table></td>
      <td><table width="100%" border="1" cellspacing="0" cellpadding="0" bordercolor="<?php echo "$td_border"; ?>" bgcolor="<?php echo "$td_bg"; ?>" >
          <tr> 
            <td class="header"><center>
                Mass message </center></td>
          </tr>
          <tr> 
            <td><table width="100%" border="0" cellspacing="3" cellpadding="0">
                <tr> 
                  <td width="43%">Message:</td>
                  <td width="57%"><input name="mass_msg" type="text" id="profile_pic2"></td>
                </tr>
                <tr> 
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr> 
                  <td colspan="2"><div align="right"> 
                      <input name="mass_button" type="submit" id="mass_button" value="Message">
                    </div></td>
                </tr>
              </table></td>
          </tr>
        </table></td>
    </tr>
    <tr> 
      <td ><table width="100%" border="1" cellspacing="0" cellpadding="0" bordercolor="<?php echo "$td_border"; ?>" bgcolor="<?php echo "$td_bg"; ?>" >
          <tr> 
            <td class="header"><center>
                Assign RHM 
              </center></td>
          </tr>
          <tr> 
            <td><table width="100%" border="0" cellspacing="3" cellpadding="0">
                <tr> 
                  <td width="43%">Current</td>
                  <td width="57%"><?php if ($crew->rhm == "0"){ echo "None"; }else{ echo "$crew->rhm"; } ?></td>
                </tr>
                <tr> 
                  <td>Username</td>
                  <td><input name="rhm_username" type="text" id="war_reason"></td>
                </tr>
                <tr> 
                  <td height="19" colspan="2"> <div align="right"> 
                      <input name="rhm_button" type="submit" id="rhm_button" value="Assign">
                    </div></td>
                </tr>
              </table></td>
          </tr>
        </table></td>
      <td ><table width="100%" border="1" cellspacing="0" cellpadding="0" bordercolor="<?php echo "$td_border"; ?>" bgcolor="<?php echo "$td_bg"; ?>" >
          <tr> 
            <td class="header"><center>
                Hand over control 
              </center></td>
          </tr>
          <tr> <?php if (strtolower($username) == strtolower($crew->owner)){
?>
            <td><table width="100%" border="0" cellspacing="3" cellpadding="0">
                <tr> 
                  <td width="43%">Username</td>
                  <td width="57%"><input name="hand_username" type="text" id="war_id3"></td>
                </tr>
                <tr> 
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr> 
                  <td height="19" colspan="2"> <div align="right"> 
                      <input name="hand_button" type="submit" id="hand_button" value="Hand over crew">
                    </div></td>
                </tr>
              </table></td>
          </tr>
        </table></td>

<? } ?>
    </tr>
  </table>
<?php
///////TO CHECK IF THERE IN THE CREW AND THERE RHM
}
/////// 
?>

</form>
