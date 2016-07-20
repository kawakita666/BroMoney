<?
session_start();

include "includes/db_connect.php";

include "includes/functions.php";

logincheck();

?>


<html>
Only the Admins and Head Moderator are allowed to make Moderators. Actions are logged..<br><br>
<form method="post" action="mod_user.php">
Username To Make Moderator: <input type="text" name="mod"><br>
<input type="submit" value="Make User Moderator">
</form>
</html>