<?php
session_start();
include "includes/db_connect.php";
include "includes/functions.php";
logincheck();
$username=$_SESSION['username'];
$retard1 = mysql_query("SELECT `rankpoints`, `rank` FROM `users` WHERE `username`='$username'");
while($retard = mysql_fetch_row($retard1)){
	$rankp= $retard[0];
$currank= $retard[1];


}
if ($currank == "Scum"){
$max = "100";
$old="0";

}elseif ($currank == "Wannabe"){
$max = "200";
$old="100";

}elseif ($currank == "Goon"){
$max = '400';
$old="200";

}elseif ($currank == "Hired Thug"){
$max = '800';
$old="400";

}elseif ($currank == "Criminal"){
$max = '2509';
$old="800";

}elseif ($currank == "Hitman"){
$max = '32000';
$old="2509";

}elseif ($currank == "Wanted Criminal"){
$max = '64000';
$old="32000";

}elseif ($currank == "Hired Gunner"){
$max = '128000';
$old="64000";

}elseif ($currank == "Assassin"){
$max = '256000';
$old="128000";

}elseif ($currank == "Boss"){
$max = '512000';
$old="256000";

}elseif ($currank == "Don"){
$max = '1024000';
$old="512000";

}elseif ($currank == "Enemy of the State"){
$max = '2048000';
$old="1024000";

}elseif ($currank == "Global Dominator"){
$max = '100000000000';
$old="2048000";

}elseif ($currank == "Legend"){
$max = '160000000000';
$old="100000000000";

}elseif ($currank == "Legendary Legend"){
$max = '360000000000';
}
$percent = round((($rankp-$old)/($max-$old))*100, 2);
?>
<?php echo "$style"; ?>


<html>


<body></td>
</tr>
<tr>
    <td height="32"><table width="100%" border="1" class=thinline  cellpadding="2" cellspacing="0" bordercolor="black">
        <!--DWLayoutTable-->
        <tr>
          <td width="370" background="includes/grad.jpg" valign="top"><div align="center"><strong>Rankbar</strong></div></td>
        </tr>
        <tr>
          <table width="<? echo $percent; ?>%" height="30" border="1" cellpadding="0" cellspacing="0" bordercolor="#900dbf" bgcolor="#900dbf">
        <tr>
          <td width="<? echo $percent; ?>%" height="53">&nbsp;<font color="#f9fc04" size="5"><strong><? echo "$percent";print "%"; ?>
            </strong></font> </td>
        </tr>
      </table></td>
        </tr>
      </table></td>

  <td>&nbsp;</td>
  </tr>
  <tr>

  <td height="44">&nbsp;</td>
  <td>&nbsp;</td>
  </tr>
</table>
<div align="center"></div>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>