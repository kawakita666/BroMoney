<?
session_start();

include "includes/db_connect.php";
include "includes/functions.php";

logincheck();

?>

<html>
<br><br>
<center><p>Please type your message</p>
<form method="post" action="mass_msg1.php">
Message To Send: <br>
<textarea name="mass_msg" cols="50" rows="8" id="mass_msg"></textarea>
<br><br>
<input type="submit" value="Message All Users"></center>
</form>
</html>