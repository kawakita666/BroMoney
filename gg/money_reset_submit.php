<?
session_start();

include "includes/db_connect.php";
include "includes/functions.php";

logincheck();

?>


<html>
Abusing this tool will get you fired. Your actions will be logged.<br><br>
<form method="post" action="money_reset.php">
Money to reset to:<input type="text" name="money_reset"><br>
Security Password:<input type="password" name="confirmation_password"><br>
<input type="submit" value="By clicking here, all money will be resetted.">
</form>
</html>