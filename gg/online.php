<?
session_start();
include "includes/functions.php";
include "includes/db_connect.php";
logincheck();
$username=$_SESSION['username'];

$total_regged=mysql_num_rows(mysql_query("SELECT * FROM users"));
$admins=mysql_num_rows(mysql_query("SELECT * FROM users WHERE userlevel='2'"));
$mods=mysql_num_rows(mysql_query("SELECT * FROM users WHERE userlevel='1'"));
$iti=mysql_fetch_object(mysql_query("SELECT * FROM site_stats WHERE id='1'"));
$most=$iti->online;
?>

<html><head><link rel="stylesheet" href="includes/in.css" type="text/css">
<script type="text/javascript" src="includes/overlib.js"></script><style type="text/css">
<!--
.style1 {color: #339900}
.style2 {color: #000000}
.style3 {color: #FF0000}
.style4 {color: #FFFF00}
.style5 {color: #006600}
-->
</style></head>
<div id=overDiv style="position:absolute; visibility:hidden; z-index:1000;"></div>

</head>

<body>
<table width="67%" border="0" align="center" cellpadding="0" cellspacing="3">
  <tr>
    <td><table class="thinline" width=100% border="1" cellpadding="2" cellspacing="0" bordercolor=black>
        <tr>
          <td background="includes/grad.jpg"><center class=bold>
              Gangsters online </center></td>
        </tr>
        <tr bgcolor=black>
          <td class=tip><div align="center">Users online in past 10mins.</div></td>
        </tr>
        <tr>
          <td>
            <?
				$timenow=time();
$select = mysql_query("SELECT * FROM users WHERE online > '$timenow' ORDER by id");
$num = mysql_num_rows($select);
while ($i = mysql_fetch_object($select)){
if ($i->crew == "0"){
$crew="None";
}else{
$crew=$i->crew;
}
if ($i->last_oc > time()){
$oc="No";
}else{
$oc="Yes";
}


if($i->userlevel=="2"){
$echo = "<font color=#0000CC>$i->username</font>";
}elseif ($i->userlevel=="1"){
$echo = "<font color=red>$i->username</font>";
}elseif ($i->helper=="1"){
$echo = "<font color=#339900>$i->username</font>";
}else{
$echo = "$i->username";
}
$don=mysql_num_rows(mysql_query("SELECT * FROM donaters WHERE username='$i->username'"));
if ($don != "0"){
$echo .= "<font color=GOLD>*</font>";
}
$rhm=mysql_num_rows(mysql_query("SELECT * FROM crews WHERE rhm='$i->username'"));

if ($rhm != "0"){
$echo = "<i>$echo</i>";

}

$leader=mysql_num_rows(mysql_query("SELECT * FROM crews WHERE owner='$i->username'"));

if ($leader != "0"){
$echo = "<b>$echo</b>";

}
$casino=mysql_num_rows(mysql_query("SELECT * FROM casinos WHERE owner='$i->username'"));

if ($casino != "0"){
$echo = "<u>$echo</u>";

}

$friend=mysql_num_rows(mysql_query("SELECT * FROM friends WHERE person='$i->username' AND type='Friend' AND username='$username'"));
if ($friend != "0"){
$echo = "<font color=yellow>$echo</font>";

}



echo "<a onmouseover=\"return overlib('Ready for an OC: $oc<br>Rank: $i->rank<br>Crew: $crew', STICKY, CAPTION, 'User: $i->username', CENTER);\" onmouseout=\"nd();\" href='profile.php?viewuser=$i->username' style=\"\"> $echo </a>,";
} ?>
          </td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td>
      <table width="136" border="1" align="center" cellpadding="2" cellspacing="0" bordercolor=black class="thinline">
        <tr>
          <td background="includes/grad.jpg"><center>
              Total Online </center></td>
        </tr>

        <tr>
          <td><div align="center"><font color="#FFFFFF"><?php echo "$num"; ?></font>
            </div></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td height="235"> <table width="45%" border="1" align="left"  cellpadding="2" cellspacing="0" class=thinline bordercolor=black>
        <tr>

          <td background="includes/grad.jpg"><center class=bold>
              The Key </center></td>
        </tr>
        <tr>
          <td><font color="#0000FF">Blue-</font>   Admins.
            <br> <font color="#FF0000">Red-</font>     Moderators.<br>
             <font color="#2E6C22">Green-</font>   Helpdesk.<br>
            <br> <u>Underlined-</u>These are casino owners.<br>
            <b>Bold-</b>    Crew owners.<br>
        </tr>
      </table>
      <table width="45%" border="1" align="right"  cellpadding="2" cellspacing="0" class=thinline bordercolor=black>
        <tr>
          <td background="includes/grad.jpg"><center class=bold>
        Status Info   </center></td>
        </tr>
        <tr>
          <td><p><font color="#0000FF">Admins:<?php echo "$admins"; ?><br>
            </font></p>
          </td>
        </tr>
        <tr>
          <td><p><font color="#FF0000">Mods:<?php echo "$mods"; ?><br>
        </tr>
        <tr>
          <td><p><font color="#E19E1E">Donaters: Mafia £10 - Leske £5 - Nothingman £5 - Rafx10 £20 - <br>
        </tr>
        <tr><tr>
      </table>      <br>  </td>
  </tr>
</table>
</body>
</html>