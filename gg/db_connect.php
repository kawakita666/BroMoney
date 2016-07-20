<?php
$mysql_server = "localhost";
$mysql_user = "bf2game_mafia";
$mysql_password = "tiffy";
$mysql_database = "bf2game_mafia";





$connection = mysql_connect("$mysql_server","$mysql_user","$mysql_password") or die ("Unable to connect to MySQL server.");
$db = mysql_select_db("$mysql_database") or die ("Unable to select requested database.");


?>