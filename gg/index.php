<?php
include_once"includes/db_connect.php";
include_once"includes/functions.php";
$username=$_SESSION['username'];
$fetch=mysql_fetch_object(mysql_query("SELECT * FROM users WHERE username='$username'"));

?>
<html>
<head>
<title>Bloodtown Mafia -=Once You Join Theres No Turning Back=-</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>

<frameset rows="101,*" cols="*" framespacing="0" frameborder="no" border="0">
  <frameset rows="100,*" cols="*" framespacing="0" frameborder="NO" border="0">
    <frame src="mini.php" name="topFrame1" scrolling="NO" noresize >

  </frameset>
  <frameset rows="25<?php if ($fetch->bar == "1"){ ?>,*<? } ?>" cols="*" framespacing="0" frameborder="NO" border="0">
    <?php if ($fetch->bar == "1"){ ?><frame src="" name="topFrame" scrolling="NO" noresize ><? } ?>
    <frameset rows="*" cols="187,*" framespacing="0" frameborder="NO" border="0">
      <frame src="menu.php" name="leftFrame" noresize>
      <frame src="login.php" name="mainFrame">
    </frameset>
  </frameset>
</frameset>
<noframes></noframes>




</html>