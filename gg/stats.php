<?php
session_start();
include "includes/db_connect.php";
include "includes/functions.php";
$username=$_SESSION['username'];
///////MONEY IN GAME AND PER USER

$result11111 = mysql_query("SELECT money, bank FROM users WHERE userlevel='0'");
	$moneytot = 0;
	while($row=mysql_fetch_array($result11111)){
		$moneytot+=$row[0]+$row[1];
	}
		$nums=mysql_num_rows($result11111);
	$per_user = round($moneytot / $nums);

$ud=mysql_num_rows(mysql_query("SELECT * FROM users"));

///END
////SITE STATS
$site=mysql_fetch_object(mysql_query("SELECT * FROM site_stats WHERE id='1'"));
////END
////FORUM TOPICS
$totaltopics = mysql_num_rows(mysql_query("SELECT id FROM topics"));
//?END
/////USERS DEAD
$dead= mysql_num_rows(mysql_query("SELECT username FROM users WHERE status = 'Dead'"));
/////TOTAL ATTEMPTS
$attempts= mysql_num_rows(mysql_query("SELECT id FROM attempts WHERE outcome = 'Survived'"));
///?END
$result11111swiss = mysql_query("SELECT money FROM swiss");
	$moneyswiss = 0;
	while($rowswiss=mysql_fetch_array($result11111swiss)){
		$moneyswiss+=$rowswiss[0];
	}
?>


<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="2">
  <!--DWLayoutTable-->
  <tr>
    <td width="48%"  height="202" valign="top"><table width="100%" border="1" cellpadding="2" cellspacing="0" class=thinline bordercolor="black">
        <!--DWLayoutTable-->
        <tr>
          <td background="includes/grad.jpg" colspan="2"><div align="center">Site
              stats</div></td>
        </tr>
        <tr>
          <td width="165" height="25">Total users</td>
          <td width="170"><?php echo "".makecomma($ud).""; ?></td>
        </tr>
        <tr>
          <td height="25">Most ever online</td>
          <td height="25"><?php echo "$site->online"; ?></td>
        </tr>
        <tr>
          <td height="25">Money in game</td>
          <td height="25"><?php echo "£".makecomma($moneytot)." (Aprox £".makecomma($per_user)."Per user.)"; ?></td>
        </tr>
        <tr>
          <td height="25">Total forum topics</td>
          <td height="25"><?php if($totaltopics == 1){ echo "$totaltopics Topic"; }else{ echo "$totaltopics Topics "; }
			 $percent_tops=round($totaltopics / $nums, 2); echo "($percent_tops Per user)";
			?></td>
        </tr>
        <tr>
          <td height="25">Money in swiss bank</td>
          <td height="25"><?php echo "£".makecomma($moneyswiss).""; ?></td>
        </tr>
        <tr>
          <td height="25">Users dead</td>
          <td height="25"><?php echo "$dead"; ?></td>
        </tr>
        <tr>
          <td height="25">Total Attempts</td>
          <td height="25"><?php echo "$attempts"; ?></td>
        </tr>
      </table> </td>
    <td width="52%"    valign="top"><table width="100%" border="1" cellpadding="2" cellspacing="0" class=thinline bordercolor="black">
        <!--DWLayoutTable-->
        <tr>
          <td background="includes/grad.jpg" colspan="4"><div align="center">Bullet
              factorys</div></td>
        </tr>
        <tr bgcolor=white>
          <td width="84" bgcolor="#000000" class=tip>Owner</td>
          <td width="92" bgcolor="#000000" class=tip>Location</td>
          <td width="97" bgcolor="#000000" class=tip>Price</td>
          <td width="65" bgcolor="#000000" class=tip>Stock</td>
        </tr>
		<?
		$a=mysql_query("SELECT * FROM bf ORDER BY stock DESC");
		while($b=mysql_fetch_object($a)){
		echo "<tr><td><a href='profile.php?viewuser=$b->owner'>$b->owner</a></td><td>$b->location</td><td>£".makecomma($b->price)."</td><td>".makecomma($b->stock)."</td></tr>";

		}
		?>


      </table></td>
  </tr>
  <tr>
    <td height="34" valign="top"> <table width="100%" border="1" cellpadding="2" cellspacing="0" class=thinline bordercolor="black">
        <!--DWLayoutTable-->
        <tr>
          <td background="includes/grad.jpg" colspan="3"><div align="center">Last
              15 registered</div></td>
        </tr>
        <tr bgcolor=white>
          <td width="109" bgcolor="#000000"  class=tip>Username</td>
          <td width="105" bgcolor="#000000" class=tip>Rank</td>
          <td width="126" bgcolor="#000000" class=tip>Date/time</td>
        </tr>
		   <?
	   $c=mysql_query("SELECT * FROM users ORDER BY id DESC LIMIT 15");
	   while($d=mysql_fetch_object($c)){
	   echo "<tr><td><a href='profile.php?viewuser=$d->username'>$d->username</a></td><td>$d->rank</td><td>$d->regged</td></tr>";



	   }
	   ?>


      </table></td>
    <td valign="top"><table width="100%" border="1" cellpadding="2" cellspacing="0" class=thinline bordercolor="black">
        <!--DWLayoutTable-->
        <tr>
          <td background="includes/grad.jpg" colspan="3"><div align="center">Last
              15 killed</div></td>
        </tr>
        <tr bgcolor=white>
          <td width="109" bgcolor="#000000"  class=tip>Username</td>
          <td width="105" bgcolor="#000000" class=tip>Rank</td>
          <td width="126" bgcolor="#000000" class=tip>Date/time</td>
        </tr>
      <?
	   $e=mysql_query("SELECT * FROM users WHERE status='Dead' ORDER BY id DESC LIMIT 15");
	   while($f=mysql_fetch_object($e)){
	   $dae=mysql_fetch_object(mysql_query("SELECT * FROM attempts WHERE target='$f->username' AND outcome='Dead'"));
	   echo "<tr><td><a href='profile.php?viewuser=$f->username'>$f->username</a></td><td>$f->rank</td><td>$dae->date</td></tr>";



	   }
	   ?>





      </table></td>
  </tr>
  <tr>
    <td height="16" valign="top"><table width="100%" border="1" cellpadding="2" cellspacing="0" class=thinline bordercolor="black">
        <!--DWLayoutTable-->
        <tr>
          <td background="includes/grad.jpg" colspan="3"><div align="center">Information
              for slots</div></td>
        </tr>
        <tr bgcolor=white>
          <td width="109" bgcolor="#000000"  class=tip>Owner</td>
          <td width="105" bgcolor="#000000" class=tip>Location</td>
          <td width="126" bgcolor="#000000" class=tip>Change</td>
        </tr>
		<?
		$slots=mysql_query("SELECT * FROM casinos WHERE casino='Slots' ORDER BY profit DESC");
		while($slots_fetch=mysql_fetch_object($slots)){
		if ($slots_fetch->profit <= "0"){ $font="<font color=red>-£".makecomma($slots_fetch->profit)."</font>"; }else{ $font="<font color=green>+£".makecomma($slots_fetch->profit)."</font>"; }
		echo "<tr><td><a href='profile.php?viewuser=$slots_fetch->owner'>$slots_fetch->owner</a></td><td>$slots_fetch->location</td><td>$font</td></tr>";

		}
		?>


      </table></td>
    <td valign="top"><table width="100%" border="1" cellpadding="2" cellspacing="0" class=thinline bordercolor="black">
        <!--DWLayoutTable-->
        <tr>
          <td background="includes/grad.jpg" colspan="3"><div align="center">Information
              for RPS</div></td>
        </tr>
        <tr bgcolor=white>
          <td width="109" bgcolor="#000000"  class=tip>Owner</td>
          <td width="105" bgcolor="#000000" class=tip>Location</td>
          <td width="126" bgcolor="#000000" class=tip>Change</td>
        </tr>

			<?
		$rps=mysql_query("SELECT * FROM casinos WHERE casino='RPS' ORDER BY profit DESC");
		while($rps_fetch=mysql_fetch_object($rps)){
		if ($rps_fetch->profit <= "0"){ $font_rps="<font color=red>£".makecomma($rps_fetch->profit)."</font>"; }else{ $font_rps="<font color=green>+£".makecomma($rps_fetch->profit)."</font>"; }
		echo "<tr><td><a href='profile.php?viewuser=$rps_fetch->owner'>$rps_fetch->owner</a></td><td>$rps_fetch->location</td><td>$font_rps</td></tr>";

		}
		?>
      </table></td>
  </tr>
  <tr>
    <td height="17" valign="top"><table width="100%" border="1" cellpadding="2" cellspacing="0" class=thinline bordercolor="black">
        <!--DWLayoutTable-->
        <tr>
          <td background="includes/grad.jpg" colspan="3"><div align="center">Information
              for the race track </div></td>
        </tr>
        <tr bgcolor=white>
          <td width="109" bgcolor="#000000" class=tip>Owner</td>
          <td width="105" bgcolor="#000000" class=tip>Location</td>
          <td width="126" bgcolor="#000000" class=tip>Change</td>
        </tr>

			<?
		$race=mysql_query("SELECT * FROM casinos WHERE casino='Race' ORDER BY profit DESC");
		while($race_fetch=mysql_fetch_object($race)){
		if ($race_fetch->profit <= "0"){ $font_race="<font color=red>£".makecomma($race_fetch->profit)."</font>"; }else{ $font_race="<font color=green>+£".makecomma($race_fetch->profit)."</font>"; }
		echo "<tr><td><a href='profile.php?viewuser=$race_fetch->owner'>$race_fetch->owner</a></td><td>$race_fetch->location</td><td>$font_race</td></tr>";

		}
		?>


      </table></td>
    <td valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
  </tr>
</table>
</body>
</html>
<?php
session_start();
include "includes/db_connect.php";
include "includes/smile.php";
?>




<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="includes/in.css" rel="stylesheet" type="text/css">

<style type="text/css">
<!--
.style1 {color: #000000}
-->
</style>
</head>

<body>
<tr>

  <td align=center></table><tr>
    <td align=center><table class='thinline' border=1 cellspacing=0 cellpadding=1 width=851 bordercolor="#000000" bgcolor="#666666" align="center"><!--DWLayoutTable-->
        <tr>
          <td height=20 colspan=3  class="Header"><center class="bold">
              Crews</center></td>
        </tr>

<tr bgcolor=white>
        <td width=271 align=center bgcolor="#000000" class=news><font color=white>Crew name</font></td>
        <td width=311 align=center bgcolor="#000000" class=news><font color=white>Owner</font></td>
        <td width=255 align=center bgcolor="#000000" class=news><font color=white>RHM</font></td>
      </tr>


        <?
$biatch = mysql_query("SELECT * FROM crews ORDER BY id");
while($fucktard = mysql_fetch_object($biatch)){

echo "<tr><td class=news><a href='crewprofile.php?viewcrew=$fucktard->name'>$fucktard->name</a></td>";
echo "<td class=news><a href='profile.php?viewuser=$fucktard->owner'>$fucktard->owner</a></td>";
echo "<td class=news><a href='profile.php?viewuser=$fucktard->rhm'>$fucktard->rhm</a></td></tr>";


}

?>
      </table>
  <p>&nbsp;</p>
<tr>
  <td align=center><table class='thinline' border=1 cellspacing=0 cellpadding=1 width=857 bordercolor="#000000" bgcolor="#666666" align="center"><!--DWLayoutTable-->
        <tr>
          <td height=20 colspan=2 valign="top"  class="Header"><center class="bold">
              Last Ten Crew Wars
          </center></td>
        </tr>
        <tr bgcolor="#FFFFFF">
          <td width=429 align=center bgcolor="#000000" class=news><font color=white>Crew name</font></td>
        <td width=418 align=center bgcolor="#000000" class=news><font color=white>Went to war with</font></td>
      </tr>
</table>
      <p>&nbsp;</p>
  <tr>
    <td align=center><table class='thinline' border=1 cellspacing=0 cellpadding=1 width=859 bordercolor="#000000" bgcolor="#666666" align="center"><!--DWLayoutTable-->
        <tr>
          <td height=20 colspan=4  class="Header"><center class="bold">
             Richest 10 crews
          </center></td>
        </tr>

<tr align="center" bgcolor=white>
        <td width=288 bgcolor="#000000" class=news><font color=white>Crew name</font></td>
        <td width=180 bgcolor="#000000" class=news><font color=white>Owner</font></td>
        <td width=288 bgcolor="#000000" class=news><font color=white>Makes per day</font></td>
        <td width=288 bgcolor="#000000" class=news><font color=white>Bussineses Owned</font></td>
</tr>


        <?
$biatch = mysql_query("SELECT * FROM crews ORDER BY bank DESC LIMIT 10");
while($fucktard = mysql_fetch_object($biatch)){
$bus=explode("-", $fucktard->income);
$first = $bus[0] * 10000;
$second = $bus[1] * 50000;
$third=$bus[2] * 100000;
$total = $first+$second+$third;
$totalbus=$bus[0]+$bus[1]+$bus[2];

echo "<tr><td class=news><a href='crewprofile.php?viewcrew=$fucktard->name'>$fucktard->name</a></td>";
echo "<td class=news><a href='profile.php?viewuser=$fucktard->owner'>$fucktard->owner</a></td>";
echo "<td class=news>£".makecomma($total)."</td>";
echo "<td class=news>$totalbus</td>";
echo "</tr>";
}

?>
      </table>
<p>&nbsp;</p>
</body>
</html>
<?php
session_start();
include "includes/db_connect.php";
include "includes/smile.php";
?>




<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="includes/in.css" rel="stylesheet" type="text/css">

<style type="text/css">
<!--
.style1 {color: #000000}
-->
</style>
</head>

<body>
<tr>

  <td align=center></table><tr>
    <td align=center><table class='thinline' border=1 cellspacing=0 cellpadding=1 width=851 bordercolor="#000000" bgcolor="#666666" align="center"><!--DWLayoutTable-->
        <tr>
          <td height=20 colspan=3  class="Header"><center class="bold">
              Crews</center></td>
        </tr>

<tr bgcolor=white>
        <td width=271 align=center bgcolor="#000000" class=news><font color=white>Crew name</font></td>
        <td width=311 align=center bgcolor="#000000" class=news><font color=white>Owner</font></td>
        <td width=255 align=center bgcolor="#000000" class=news><font color=white>RHM</font></td>
      </tr>


        <?
$biatch = mysql_query("SELECT * FROM crews ORDER BY id");
while($fucktard = mysql_fetch_object($biatch)){

echo "<tr><td class=news><a href='crewprofile.php?viewcrew=$fucktard->name'>$fucktard->name</a></td>";
echo "<td class=news><a href='profile.php?viewuser=$fucktard->owner'>$fucktard->owner</a></td>";
echo "<td class=news><a href='profile.php?viewuser=$fucktard->rhm'>$fucktard->rhm</a></td></tr>";


}

?>
      </table>
  <p>&nbsp;</p>
<tr>
  <td align=center>
<p>&nbsp;</p>

<tr>
  <td align=center>&nbsp;</body>
</html>