<?php
session_start();
include "includes/db_connect.php";
include "includes/functions.php";
$username=$_SESSION['username'];

?>
<head>
<link rel=stylesheet href=includes/in.css type=text/css>
</head><?




$fetch=mysql_fetch_object(mysql_query("SELECT * FROM users WHERE username='$username'"));



?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<body>

<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>
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
                    <center><img src="Banner.jpg" valign="center" width="600" height="65"></center>
                    <b><center><a href=mini.php>Refresh</a></center></b>
                        <span class="WhiteText" style="FONT-WEIGHT:bold"></span>
						<span ></span>
						<span style="FONT-WEIGHT:bold">Rank: </span><?php echo "$fetch->rank"; ?>
						<span  ></span>&nbsp;&nbsp;
						<span  style="FONT-WEIGHT:bold">Money: </span><?php echo "£".makecomma($fetch->money).""; ?>
						<span  ></span>&nbsp;&nbsp;
						<span  style="FONT-WEIGHT:bold">Location: </span><?php echo "$fetch->location"; ?>
						<span></span>&nbsp;
                                                <span  style="FONT-WEIGHT:bold">Crew:</span><?php if ($fetch->crew == "0"){ echo "None"; }else{ echo "$fetch->crew"; } ?>
						<span  ></span>&nbsp;&nbsp;
						<span  style="FONT-WEIGHT:bold">Health:</span><?php echo "$fetch->health%"; ?>
                        <span  ></span>&nbsp;&nbsp;
                                                <span  style="FONT-WEIGHT:bold">Weapon:</span><?php echo "$fetch->weapon"; ?>
						<span  ></span>&nbsp;&nbsp;
						<span  style="FONT-WEIGHT:bold">Bullets: </span><?php echo "".makecomma($fetch->bullets).""; ?>
						<span  ></span>&nbsp;
                        <?php if ($inbox > 0){ echo "<span  style=FONT-WEIGHT:bold>


 <font color=White>You have $inbox new message(s)</a></font></span>"; } ?>
<span  ></span>&nbsp;
						<span  style="color:Yellow;font-weight:bold;"></span></TD></a>


				</TR>
			</TABLE>
</body>
</html>