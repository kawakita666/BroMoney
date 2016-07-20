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
$max = '1500';
$old="800";

}elseif ($currank == "Hitman"){
$max = '2500';
$old="1500";

}elseif ($currank == "Wanted Criminal"){
$max = '5000';
$old="2500";

}elseif ($currank == "Hired Gunner"){
$max = '7000';
$old="5000";

}elseif ($currank == "Assassin"){
$max = '9000';
$old="7000";

}elseif ($currank == "Boss"){
$max = '12000';
$old="9000";

}elseif ($currank == "Don"){
$max = '14000';
$old="12000";

}elseif ($currank == "Enemy of the State"){
$max = '18000';
$old="14000";

}elseif ($currank == "Global Dominator"){
$max = '25000';
$old="18000";

}elseif ($currank == "Legend"){
$max = '60000';
$old="25000";

}elseif ($currank == "Legendary Legend"){
$max = '90000';
}
$percent = round((($rankp-$old)/($max-$old))*100, 2);
?>
<?php echo "$style"; ?>
<p align="center"><strong>Personal Rank Bar</strong></p>
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