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
$max = '16000';
$old="800";

}elseif ($currank == "Hitman"){
$max = '32000';
$old="16000";

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

}elseif ($currank == "Enemy of the States"){
$max = '2048000';
$old="1024000";

}elseif ($currank == "Global Dominator"){
$max = '2048000';
$old="1024000";

}
$percent = round((($rankp-$old)/($max-$old))*100);
?>


<html>


<body></td>
</tr>
<tr>
    <td height="32"><table width="100%" border="1" class=thinline  cellpadding="2" cellspacing="0" bordercolor="black">
        <!--DWLayoutTable-->
        <tr>
          <td width="370" background="includes/grad.jpg" valign="top"><div align="center">Rankbar</div></td>
        </tr>
        <tr>
          <td height="25" valign="top"> <table width="<?php echo "$fetch->health"; ?>%" border="1" cellpadding="2" cellspacing="0" bordercolor=black class=thinline>
              <tr>
                <td width="18"><?php echo "$fetch->precent"; ?>%</td>
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