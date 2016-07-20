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
<table width="46%" border="0" cellspacing="2" cellpadding="0" height="49">
  <tr> 
    <td width="457" height="45" valign="top" align="center"><table width="450" border="1" cellpadding="0" cellspacing="0" bordercolor="<?php echo "$td_border"; ?>" bgcolor="<?php echo "$td_bg"; ?>">
        <tr> 
          <td height="22" colspan="2" background="<?php echo "$gradient"; ?>">
			<p align="center">USERNAME - IP </td>
        </tr>
        <tr> 
          <td width="127" height="13" valign="top">
			<p align="center">USERNAME</td>
          <td width="136" valign="top">
			<p align="center">IP</td>
        </tr>
        <?php
	$tsel = mysql_query("select * from `users` where `status`='Alive' order by `username` desc limit 999999");
	while ($top = mysql_fetch_array($tsel)) {
		print "<tr><td>$top[username]</a></td><td align=left>$top[r_ip]</td></tr>";
	}
	?>
      </table></td>
    
  </tr>
</table>
</body>
</html>
