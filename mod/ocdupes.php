<?
session_start();
include "includes/functions.php";
logincheck();
$username=$_SESSION['username'];
include "includes/db_connect.php";
echo "$style";

?>




<html><head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<table width="100%" border="0" cellspacing="2" cellpadding="0">
  <tr> 
    <td width="274" height="122" valign="top">
    <table width="495" border="1" cellpadding="0" cellspacing="0" bordercolor="<?php echo "$td_border"; ?>" bgcolor="<?php echo "$td_bg"; ?>">
        <tr> 
          <td height="22" colspan="2" background="Black"><center class="TableHeading">
             USERNAME - IP </center></td>
        </tr>
        <tr> 
          <td width="214" height="13" valign="top">USERNAME - IP</td>
          <td width="275" valign="top">Last OC</td>
        </tr>
        <?php
	$tsel = mysql_query("select * from `users` where `status`='Alive' order by `r_ip` desc limit 999999");
	while ($top = mysql_fetch_array($tsel)) {
		print "<tr><td>$top[username] > $top[r_ip]</a></td><td align=left>$top[last_oc]</td></tr>";
	}
	?>
      </table></td>
    
  </tr>
</table>
</body>
</html>
