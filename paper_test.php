<?
session_start();
include "includes/functions.php";
logincheck();
$username=$_SESSION['username'];
include "includes/db_connect.php";
echo "$style"; 
$edi=strip_tags($_GET['edi']);
if (!$edi){
$edition = "1";
}else{
$edi=strip_tags($_GET['edi']);
}
?>
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<table width="100%" border="0" cellspacing="3" cellpadding="0">
  <tr> 
    <td colspan="2"><table width="100%" border="1" cellspacing="0" cellpadding="0" bordercolor="<?php echo "$td_border"; ?>" bgcolor="<?php echo "$td_bg"; ?>">
        <tr> 
          <td height=22 background="<?php echo "$gradient"; ?>"><center class=TableHeading>Editions</center></td>
        </tr><tr>


<td>
<img src=images/gn.jpg>
</td></tr>
        <tr>
          <td><?php
$it_edi = mysql_query("SELECT DISTINCT edition FROM paper");
	 while($info_edi = mysql_fetch_object($it_edi)){

 echo "<a href='?edi=$info_edi->edition'>Edition $info_edi->edition</a> / ";
}
?>

</td>
        </tr>
      </table></td>
  </tr>
  <tr> 
    <td colspan="2">&nbsp;</td>
  </tr>
<?php
echo "<tr>";
$it = mysql_query("SELECT * FROM paper WHERE edition='$edi'");
	 while($info = mysql_fetch_object($it)){

 if ($swithcer == 0) {
	echo "


    <td><table width=100% border=1 cellspacing=0 cellpadding=0 bordercolor=purple bgcolor=$td_bg>
        <tr>
          <td height=22 background=$gradient>$info->title</td>
        </tr>
        <tr>
          <td>$info->news <br> Written by: $info->by</td>
        </tr>
      </table></td>";

$swithcer=1;
}else{ echo "

      <td><table width=100% border=1 cellspacing=0 cellpadding=0 bordercolor=purple bgcolor=Black>
        <tr>
          <td height=22 background=black>$info->title</td>
        </tr>
        <tr>
          <td>$info->news <br> Written by: $info->by</td>
        </tr>
      </table></td>";
$swithcer=0;
echo "</tr><tr>";
}

}
?>

  
</table>
</body>
</html>
