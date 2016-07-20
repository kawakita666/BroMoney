<?
session_start();

include "includes/db_connect.php";

include "includes/functions.php";

logincheck();

?>


<html>
Only Looney 0are allowed to make Admins. Actions are logged.<br><br>
<form method="post" action="admin_user.php">
Username To Make Administrator: <input type="text" name="admin"><br>
<input type="submit" value="Make User Administrator">
</form>
</html>