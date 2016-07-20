<?php
session_start();
include "includes/db_connect.php";
include "includes/functions.php";
logincheck();
$username=$_SESSION['username'];
echo "$style"; 
?>
<head>
<script language="javascript">
function doit (){
	var del = confirm("Welcome to Bloodtown Mafia . Click ok to Start Playing.");
	if (del == true){
		var loc = "mail.php";
		parent.top.location.href=middle;
	}
}
function toggle(idname){
    document.getElementById(idname).style.display = (document.getElementById(idname).style.display == 'none') ? 'block' : 'none';
}
</script></head><?




$fetch=mysql_fetch_object(mysql_query("SELECT * FROM users WHERE username='$username'"));
if ($fetch->tut == "0"){

echo "<SCRIPT language=\"JavaScript\"> doit(); </SCRIPT>";
mysql_query("UPDATE users SET tut='1' WHERE username='$username'");
}


?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<body>

<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>
<meta http-equiv="refresh" content="300"> 


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
						<span style="FONT-WEIGHT:bold">Rank: </span><?php echo "$fetch->rank"; ?>
						<span  ></span>&nbsp;&nbsp;
						<span  style="FONT-WEIGHT:bold">Money: </span><?php echo "£".makecomma($fetch->money).""; ?>
						<span  ></span>&nbsp;&nbsp;
						<span  style="FONT-WEIGHT:bold">Location:</span><?php echo "$fetch->location"; ?>
						<span></span>&nbsp;
						<span  style="FONT-WEIGHT:bold">Health:</span><?php echo "$fetch->health%"; ?>
						<span  ></span>&nbsp;&nbsp;
						<span  style="FONT-WEIGHT:bold">Bullets:</span><?php echo "".makecomma($fetch->bullets).""; ?>
						<span  ></span>&nbsp;
						<span  style="FONT-WEIGHT:bold">Energy:</span><?php echo "$fetch->energy%"; ?>[<b><a href=mini.php>Refresh</a> MafiaWarz will be reset! This is just to have some fun!</b>]
						<?php if ($inbox > 0){ echo "<span  style=FONT-WEIGHT:bold><a href=inbox.php 

ONMOUSEOUT=\"javascript:document.location.reload();\"

 target=middle><font color=red>You have $inbox new messages!</a></font></span>"; } ?>
<span  ></span>&nbsp;
						<span  style="color:Yellow;font-weight:bold;"></span></TD></a>


				</TR>
			</TABLE>
</body>
</html>
