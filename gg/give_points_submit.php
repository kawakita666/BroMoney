<?
session_start();

include "includes/db_connect.php";

include "includes/functions.php";

logincheck();

?>


<html>
<form method="post" action="give_points.php">
Username: <input type="text" name="give_to">
Amount: <input type="text" name="cash_give">
<input type="submit" value="Give Points">
</form>
</html>