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
$max = '1000';
$old="400";

}elseif ($currank == "Criminal"){
$max = '2500';
$old="1000";

}elseif ($currank == "Hitman"){
$max = '5000';
$old="2500";

}elseif ($currank == "Wanted Criminal"){
$max = '10000';
$old="5000";

}elseif ($currank == "Hired Gunner"){
$max = '20000';
$old="10000";

}elseif ($currank == "Assassin"){
$max = '40000';
$old="20000";

}elseif ($currank == "Boss"){
$max = '80000';
$old="40000";

}elseif ($currank == "Don"){
$max = '100000';
$old="80000";

}elseif ($currank == "Enemy of the State"){
$max = '130000';
$old="100000";

}elseif ($currank == "Global Dominator"){
$max = '160000';
$old="130000";

}elseif ($currank == "Legend"){
$max = '2048000';
$old="450000";

}elseif ($currank == "Legendary Legend"){
$max = '5048000';
$old="2048000";
}
$percent = round((($rankp-$old)/($max-$old))*100, 2);
?>
<?php echo "$style"; ?>
<p align="center"><strong>Rank Bar(Rounded to 2 decimal places):</strong></p>
<table width="100%" border="1" cellpadding="2" cellspacing="0" bordercolor="#000000" bgcolor="#000000">
  <tr>
    <td height="76">
<table width="<? echo $percent; ?>%" height="70" border="1" cellpadding="0" cellspacing="0" bordercolor="#0F0BBA" bgcolor="#1E7FA2">
        <tr>
          <td width="<? echo $percent; ?>%" height="53">&nbsp;<font color="#ffffff" size="5"><strong><? echo "$percent";print "%"; ?>
            </strong></font> </td>
        </tr>
      </table></td>
  </tr>
</table>
</body>
</html>