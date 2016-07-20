<?php
session_start();
include_once "includes/db_connect.php";
include_once "includes/functions.php";
include_once "includes/jail_check.php";
logincheck();
echo "$style";
$username=$_SESSION['username'];
$fetch=mysql_fetch_object(mysql_query("SELECT * FROM users WHERE username='$username'"));



if (strip_tags($_GET['sell'])){
$sell=strip_tags($_GET['sell']);
$amount=mysql_query("SELECT * FROM items WHERE id='$sell'");
$fecher=mysql_fetch_object($amount);
$num=mysql_num_rows($amount);

if ($num != "0"){
$new_money = $fetch->money + $fecher->value;
mysql_query("UPDATE users SET money='$new_money' WHERE username='$username'");
mysql_query("DELETE FROM items WHERE id='$sell'");
echo "Item has been sold";


}

}
?>
<html>
<head>


<SCRIPT LANGUAGE="JavaScript">

<!-- Begin
function popUp(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=0,width=300,height=300,left = 250,top = 150');");
}
// End -->
</script>
</head>

<body>
<table width="82%" border="1" align="center" cellpadding="2" cellspacing="0" bordercolor="#000000" bgcolor="#000000" >
  <tr>
    <td colspan="4" background="includes/grad.jpg"><center class="bold">
        Your items </center></td>
  </tr>
  <tr bgcolor=black>
    <td width="27%" class=tip>Item name:</td>
    <td width="25%" class=tip>Value:</td>
    <td width="23%" class=tip>Action</td>
    <td width="25%" class=tip>Sell</td>
  </tr>
  <?php
  $query=mysql_query("SELECT * FROM items WHERE owner='$username'");
  while($cool = mysql_fetch_object($query)){

  echo "<tr><td>$cool->item</td><td>".makecomma($cool->value)."</td><td><A HREF=\"javascript:popUp('item_use.php?item_id=$cool->id')\">Click here</a></td><td><a href='?sell=$cool->id'>Sell</a></td></tr>";



  }
  ?>
</table>
<br>
<br>
</body>
</html>