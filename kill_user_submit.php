<?
session_start();

include "includes/db_connect.php";

include "includes/functions.php";

logincheck();

?>


<html>
Do not kill for no reason. Actions are logged.<br><br>
<form method="post" action="kill_user.php">
Username To Kill: <input type="text" name="kill"><br>
<input type="submit" value="Kill User">
</form>
</html>