<?php
session_start();
include "includes/db_connect.php";
include "includes/functions.php";
logincheck();
$username=$_SESSION['username'];

echo "$style";
$fetch=mysql_fetch_object(mysql_query("SELECT * FROM users WHERE username='$username'"));
$userlevel=$fetch->userlevel;

if ($fetch->userlevel == "2"){

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
          <td width="100%"> This is the Admin CP for Bloodtown Mafia. Please note that the Admins           monitor all your actions and movement here. You could be fired for doing wrong things. Be           warned.</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><div align="center"><strong>Tools:</strong></div></td>
        </tr>

     <? if ($fetch->userlevel == "2"){ ?>
        <tr>
          <td>-<a href="give_money_submit.php">Give Money</a></td>
        </tr>
          <tr>
          <td>-<a href="give_bullets_submit.php" target="middle">Give Bullets</a></td>
</tr>
            <tr>
              <td>-<a href="give_points_submit.php" target="middle">Give              Points</a></td>
        </tr>
          <tr>
              <td>-<a href="take_money_submit.php" target="middle">Take Money</a></td>
        </tr>
        <tr>
          <td>-<a href="mass_msg.php">Message All Users</a></td>
        </tr>
        <tr>
          <td>-<a href="money_reset_submit.php">Money Reset</a></td>
        </tr>
         <tr>
          <td>-<a href="?op=lvlc">Change userlevel</a></td>
        </tr>
        <tr>
          <td>-<a href="mod_user_submit.php">Make a user a Moderator</a></td>
        </tr>
          <td>-<a href="admin_user_submit.php">Make a user a Admin</a></td>
        </tr>
        <td>-<a href="view_user_mail_submit.php">View Last Mail</a></td>
        </tr>
        <tr>
         <td>-<a href="kill_user_submit.php">Instant Kill</a></td>
        </tr>
         <tr>
         <td>-<a href="view_user_stats_submit.php">View a User's Stats</a></td>
        </tr>
         <tr>
         <td>-<a href="view_user_stats_submit.php">Bann</a></td>
        </tr>
        <tr>
         <td>-<a href="MODcP.php?op=forum">Forum Options</a></td>
        </tr>
        <tr>
         <td>-<a href="MODcP.php?op=war">Send Warning</a></td>
        </tr>
        <tr>
         <td>-<a href="oeticket.php">Ticket System</a></td>
        </tr>
<? } ?>



      </table></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>

<? } ?>