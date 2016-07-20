<?php
$mysql_server = "localhost";
$mysql_user = "blood_bloodtown";
$mysql_password = "mafiagame";
$mysql_database = "blood_bloodtown";





$connection = mysql_connect("$mysql_server","$mysql_user","$mysql_password") or die ("Unable to connect to MySQL server.");
$db = mysql_select_db("$mysql_database") or die ("Unable to select requested database.");


?>