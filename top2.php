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
    <td width="274" height="122" valign="top"><table width="540" border="1" cellpadding="0" cellspacing="0" bordercolor="<?php echo "$td_border"; ?>" bgcolor="<?php echo "$td_bg"; ?>">
        <tr> 
          <td height="22" colspan="2" background="<?php echo "$gradient"; ?>"><center class="TableHeading">
             Bank Transfers </center></td>
        </tr>
        <tr> 
          <td width="127" height="13" valign="top">FROM Send TO</td>
          <td width="136" valign="top">Amount</td>
        </tr>
        <?php
	$tsel = mysql_query("select * from `transfers` where `check`='1' order by `from` desc limit 999999");
	while ($top = mysql_fetch_array($tsel)) {
		print "<tr><td>$top[from]  < SENT MONEY TO >  $top[to]</a></td><td align=left>$top[amount]</td></tr>";
	}
	?>
      </table></td>
    
  </tr>
</table>
</body>
</html>
