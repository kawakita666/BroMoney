<?php session_start(); include"includes/db_connect.php"; include "includes/functions.php"; logincheck();
$var1=$_POST['var1'];
?>
<?
if (isset($_POST['var1'])){
mysql_query("UPDATE users SET forum_free='1' WHERE username='$var1'");
}
?>

<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<?php echo "$style"; ?>
<link href="includes/in.css" rel="stylesheet" type="text/css">
</head>

<body>
<p>&nbsp;</p>
<table width="72%" border="1" align="center" cellpadding="2" cellspacing="0" class=thinline bordercolor=black>
  <tr>
    <td background="includes/grad.jpg"> <center>
        Bloodtown donations </center></td>
  </tr>
  <tr>
  <td><div align="center">£5 = $10</div>
    <td><p>
      <p align="center"><strong><a href="?id=1"><img src="images/paypal_logo.gif" border="0"></a></strong></p></td>
  </tr>
  <?php if (strip_tags($_GET['id']) == "1"){


  ?><tr bgcolor=white>
    <td class=tip><div align="center">Donate by paypal.</div></td>
  </tr>
  <tr>
    <td><div align="left">Paypal is a company which supports countrys worldwide
        for online payment systems. You can either pay by creidt card, or using
        your own paypal and adding fund to it Via bank or creditcard. <br>
        Click this button to donate via paypal:
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="image" src="https://www.paypal.com/en_US/i/btn/x-click-but21.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
</form></div></td>
  </tr><? } ?>
</table>
<br>
<br>
<br>
<br>
<p align="center">&nbsp;</p>
</body>
</html>