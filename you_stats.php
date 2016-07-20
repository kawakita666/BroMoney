<?php session_start(); include_once"includes/db_connect.php"; include_once"includes/functions.php"; logincheck();

$username=$_SESSION['username'];

$query=mysql_query("SELECT * FROM users WHERE username='$username'");

$fetch=mysql_fetch_object($query);



$query1=mysql_query("SELECT * FROM user_info WHERE username='$username'");

$info=mysql_fetch_object($query1);









$currank=$fetch->rank;

$rankp = $fetch->rankpoints;



if ($currank == "Scum"){

$max = "100";

$old="0";

}elseif ($currank == "Wonnabe"){

$max = '200';

$old="100";

}elseif ($currank == "Goon"){

$max = '400';

$old="200";

}elseif ($currank == "Hired Thug"){

$max = '800';

$old="400";

}elseif ($currank == 'Criminal'){

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

$max = '3600000';
}
$percent = round((($rankp-$old)/($max-$old))*100, 2);
?>





<html>

<head>

<title>Untitled Document</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

</head>



<body>



<table width="755" border="0" align="center" cellpadding="0" cellspacing="3" height="459">

  <!--DWLayoutTable-->

  <tr>

    <td valign="top" colspan="2"><table width="100%" border="1" cellpadding="2" class=thinline cellspacing="0" bordercolor="black">

        <!--DWLayoutTable-->

        <tr>

          <td background="includes/grad.jpg" colspan="2"><div align="center">
			Waiting times</div></td>

        </tr>

        <tr>

          <td width="184" ><strong>Crime</strong></td>

          <td width="177">

            <?php  if ($fetch->lastcrime <= time()){ echo "Ready"; }else{   echo "".maketime($fetch->lastcrime).""; } ?>

          </td>

        </tr>

        <tr>

          <td ><strong>Gta</strong></td>

          <td >

            <?php  if ($fetch->lastgta <= time()){ echo "Ready"; }else{   echo "".maketime($fetch->lastgta).""; } ?>

          </td>

        </tr>

        <tr>

          <td height="11"><strong>Organised crime</strong></td>

          <td height="11">

            <?php  if ($fetch->last_oc <= time()){ echo "Ready"; }else{   echo "".maketime($fetch->last_oc).""; } ?>

          </td>

        </tr>

        <tr>

          <td height="11"><strong>Order</strong></td>

          <td height="11">

            <?php if ($fetch->last_order < time()){ echo "Ready"; }else{ echo "".maketime($fetch->last_order).""; } ?>

          </td>

        </tr>

        <tr>

          <td height="5"><strong>Next kill attempt</strong></td>

          <td height="5">

            <?php if ($fetch->last_kill < time()){ echo "Ready"; }else{ echo "".maketime($fetch->last_kill).""; } ?>

          </td>

        </tr>

        <tr>

          <td height="3"><strong>Next flight</strong></td>

          <td height="3">

            <?php if ($fetch->lasttravel < time()){ echo "Ready"; }else{ echo "".maketime($fetch->lasttravel).""; } ?>

          </td>

        </tr>

      </table></td>

    <td valign="top" colspan="3" height="177"><table class=thinline width="100%" border="1" cellpadding="2" cellspacing="0" bordercolor="black">

              <!--DWLayoutTable-->

              <tr>

                <td colspan="2" background="includes/grad.jpg"><div align="center">Your

                    information</div></td>

              </tr>

              <tr>

                <td width="188" ><strong>User id</strong></td>

                <td width="173">#<?php echo "$fetch->id"; ?></td>

              </tr>

              <tr>

                <td ><strong>Registered IP</strong></td>

                <td ><?php echo "$fetch->r_ip"; ?></td>

              </tr>

              <tr>

              <td ><strong>Username</strong></td>

                <td><?php echo "$fetch->username"; ?></td>

              </tr>

              <tr>

                <td ><strong>Money</strong></td>

                <td >&pound;<?php echo "".makecomma($fetch->money).""; ?></td>

              </tr>

              <tr>

                <td ><strong>Rank</strong></td>

                <td ><?php echo "$fetch->rank"; ?></td>

              </tr>

              <tr>

                <td ><strong>Location</strong></td>

                <td ><?php echo "$fetch->location"; ?></td>

              </tr>

            </table></td>

  </tr>
	<tr>
		<td>&nbsp;</td>

    <td valign="top" colspan="2"><table width="100%" height="138" border="0" cellpadding="0" cellspacing="0">

        <!--DWLayoutTable-->

        <tr>

          <td width="375" height="138">
			<table width="370" border="1" cellpadding="2" class=thinline cellspacing="0" bordercolor="black" height="127">

              <!--DWLayoutTable-->

              <tr>

                <td background="includes/grad.jpg" colspan="2" height="25"><div align="center">Inventory</div></td>

              </tr>
				<tr>

                <td ><strong>Weapon</strong></td>

                <td height="25"><?php echo "$fetch->weapon"; ?></td>

              </tr>
				<tr>

                <td width="182"><strong>Bullets</strong></td>

                <td height="23" width="174"><?php echo "".makecomma($fetch->bullets).""; ?></td>

              </tr>
				<tr>

                <td ><strong>Protection</strong></td>

                <td height="25" ><?php echo "$fetch->protection"; ?></td>

              </tr>
				<tr>

                <td><strong>Plane</strong></td>

                <td height="25"><?php echo "$fetch->plane"; ?></td>

              </tr>
				<tr>
					<td width="182">&nbsp;</td>

                <td height="25" width="174"><?php echo "".makecomma($fetch->bullets).""; ?></td>

              </tr>

            </table></td>

        </tr>

      </table></td>

    	<td height="138">&nbsp;</td>

    <td valign="top" rowspan="2">&nbsp;</td>

  </tr>
	<tr>
		<td valign="top" colspan="2"><table width="100%" border="1" class=thinline  cellpadding="2" cellspacing="0" bordercolor="black">

        <!--DWLayoutTable-->

        <tr>

          <td width="370" background="includes/grad.jpg" valign="top"><div align="center">Health</div></td>

        </tr>

        <tr>

          <td height="25" valign="top"> <table width="<?php echo "$fetch->health"; ?>%" border="1" cellpadding="2" cellspacing="5" bordercolor="#999999" bgcolor="#CC0000">

              <tr>

                <td width="18"><?php echo "$fetch->health"; ?>%</td>

              </tr>

            </table></td>

        </tr>

      </table></td>
		<td valign="top"><table width="100%" border="1" class=thinline  cellpadding="2" cellspacing="0" bordercolor="black">

        <!--DWLayoutTable-->

        <tr>

          <td width="370" background="includes/grad.jpg" valign="top"><div align="center">
			Kills</div></td>

        </tr>

        <tr>

          <td height="25" valign="top"> <table width="<?php echo "$info->kill_skill"; ?>%" border="1" cellpadding="2" cellspacing="5" bordercolor="#999999" bgcolor="#CC0000">

              <tr>

                <td width="18"><?php echo "$info->kill_skill"; ?></td>

              </tr>

            </table></td>

        </tr>

      </table></td>
		<td height="61">&nbsp;</td>
	</tr>
	<tr>

    <td valign="top" colspan="2">&nbsp;</td>

    <td colspan="3" height="68">&nbsp;</td>

  </tr>
	<tr>
		<td width="193"></td>
		<td width="174"></td>
		<td width="359"></td>
		<td width="4"></td>
		<td height="-2" width="7"></td>
	</tr>

</table>

<div align="center"></div>

<p>&nbsp;</p>

<p>&nbsp;</p>

</body>

</html>