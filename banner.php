<?php session_start(); include "includes/db_connect.php"; include"includes/functions.php"; logincheck();
$username=$_SESSION['username'];
$query=mysql_query("SELECT * FROM users WHERE username='$username'");
$fetch=mysql_fetch_object($query);
$inbox_msg=mysql_num_rows(mysql_query("SELECT * FROM `inbox` WHERE `read`='0' AND `to`='$username'"));


?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="includes/in.css" type="text/css">
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
</script>
</head>

<body bgcolor="#000033">
<center><div id="Layer1" style="position:absolute; left:2px; top:4px; width:795px; height:65px; z-index:1"><img src="Banner.jpg" valign="center" width="610" height="30"></div></center>
<div align="center"></div>
<br>
<br>
<br>
<meta http-equiv="refresh" content="120">


<?php
$check = mysql_query("SELECT * FROM `inbox` WHERE `read`='0' AND `to`='$username'");
$inbox=mysql_num_rows($check);

?>
<body>
<TABLE id="Table1" style="LEFT: 0px; POSITION: absolute; TOP: 0px" cellSpacing="0" cellPadding="1"
				width="110%" border="0">
				<TR valign="middle">
					<TD valign="middle">


					<span class="WhiteText" style="FONT-WEIGHT:bold">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
						<span ></span>&nbsp;
                        <b><a href=mini.php>Refresh</a></b>&nbsp;&nbsp;
						<span style="FONT-WEIGHT:bold">Rank: </span><?php echo "$fetch->rank"; ?>
						<span  ></span>&nbsp;&nbsp;
						<span  style="FONT-WEIGHT:bold">Money: </span><?php echo "£".makecomma($fetch->money).""; ?>
						<span  ></span>&nbsp;&nbsp;
						<span  style="FONT-WEIGHT:bold">Location:</span><?php echo "$fetch->location"; ?>
						<span></span>&nbsp;
                                                <span  style="FONT-WEIGHT:bold">Crew:</span><?php if ($fetch->crew == "0"){ echo "None"; }else{ echo "$fetch->crew"; } ?>
						<span  ></span>&nbsp;&nbsp;
						<span  style="FONT-WEIGHT:bold">Health:</span><?php echo "$fetch->health%"; ?>
						<span  ></span>&nbsp;&nbsp;
                                                <span  style="FONT-WEIGHT:bold">Weapon:</span><?php echo "$fetch->weapon"; ?>
						<span  ></span>&nbsp;&nbsp;
						<span  style="FONT-WEIGHT:bold">Bullets:</span><?php echo "".makecomma($fetch->bullets).""; ?>
						<span  ></span>&nbsp;
						<span  style="FONT-WEIGHT:bold">Protection:</span><?php echo "$fetch->protection"; ?>
						<?php if ($inbox > 0){ echo "<span  style=FONT-WEIGHT:bold><a href=inbox.php

ONMOUSEOUT=\"javascript:document.location.reload();\"

 target=right><font color=White>You have $inbox new message(s)</a></font></span>"; } ?>
<span  ></span>&nbsp;
						<span  style="color:Yellow;font-weight:bold;"></span></TD></a>


				</TR>
			</TABLE>
</body>
</html>