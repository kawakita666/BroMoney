<?
session_start();

include "includes/db_connect.php";

include "includes/functions.php";

logincheck();

?>


<html>
<form method="post" action="give_bullets.php">
Username: <input type="text" name="give_to">
Amount Of Bullets: <input type="text" name="bullets">
<input type="submit" value="Give Bullets">
</form>
</html>