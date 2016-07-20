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
	var del = confirm("Welcome to Bloodtown Mafia. Click ok to go to the tutorial and learn how to play the game properly.");
	if (del == true){
		var loc = "faq.php";
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


					<div align="center"><span class="WhiteText" style="FONT-WEIGHT:bold">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
						<span ></span>&nbsp;
						<span style="FONT-WEIGHT:bold">Rank: </span><?php echo "$fetch->rank"; ?>
						<span  ></span>&nbsp;&nbsp;
                        <br>
                        <br>
						<span  style="FONT-WEIGHT:bold">Money: </span><?php echo "£".makecomma($fetch->money).""; ?>
						<span  ></span>&nbsp;&nbsp;
                        <br>
                        <br>
						<span  style="FONT-WEIGHT:bold">Location:</span><?php echo "$fetch->location"; ?>
						<span></span>&nbsp;
                        <br>
                        <br>
						<span  style="FONT-WEIGHT:bold">Health:</span><?php echo "$fetch->health%"; ?>
						<span  ></span>&nbsp;&nbsp;
                        <br>
                        <br>
						<span  style="FONT-WEIGHT:bold">Bullets:</span><?php echo "".makecomma($fetch->bullets).""; ?>
						<span  ></span>&nbsp;
                        <br>
                        <br>
						<span  style="FONT-WEIGHT:bold">Energy:</span><?php echo "$fetch->energy%"; ?>[<b><a href=mini.php>Refresh</a></b>]
						<?php if ($inbox > 0){ echo "<span  style=FONT-WEIGHT:bold><a href=inbox.php

ONMOUSEOUT=\"javascript:document.location.reload();\"

 target=middle><font color=red>You have $inbox new messages!</a></font></span>"; } ?>
<span  ></span>&nbsp;
						<span  style="color:Yellow;font-weight:bold;"></span></TD></a></div>
                        <br>
                         <br>
                         <br>
                          <br> 
                        <body>
<table width="74%" border="1" align="center" cellpadding="2" cellspacing="0" bordercolor="#111111" class=thinline>
  <tr>
    <td width="29%">Cash: &pound;<?php echo "".makecomma($info->money).""; ?></td>
    <td width="29%">Crew: <?php if ($info->crew == "0"){ echo "None"; }else{ echo "$info->crew"; } ?> </td>
    <td width="17%">Energy:</td>
    <td width="25%"><table width="<?php echo "$info->energy"; ?>%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td bgcolor="#009999"><?php echo "$info->energy"; ?>%</td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td colspan="2">Weapon: <?php echo "$info->weapon"; ?>(<?php echo "".makecomma($info->bullets).""; ?>)</td>
    <td>Health:</td>
    <td><table width="<?php echo "$info->health"; ?>%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td bgcolor="#009999"><?php echo "$info->health%"; ?></td>
        </tr>
      </table></td>
  </tr>

				</TR>
			</TABLE>
</body>
</html>