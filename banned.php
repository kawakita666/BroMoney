<?php
echo "<link href=\"includes/in.css\" rel=\"stylesheet\" type=\"text/css\">
";
include_once"includes/db_connect.php";
$banned=strip_tags($_GET['banned']);
$mysql=mysql_query("SELECT * FROM ban WHERE username='$banned'");
$tell=mysql_fetch_object($mysql);
$encoded=strip_tags($_GET['encoded']);
$new_en=md5(strtolower($tell->username));
if ($encoded != $new_en){
echo "This user is not banned.";
exit();
}
$nums=mysql_num_rows($mysql);
if ($nums == "0"){
echo "This user is not banned.";
exit();
}

if ($tell->type == "1" && $tell->length <= time()){
mysql_query("UPDATE users SET status='Alive' WHERE username='$banned'");
mysql_query("DELETE FROM ban WHERE username='$banned'");
echo "Time expired, you are now unbanned...<a href='http://www.bloodtownmafia.com?u=$banned'>Click here to go back</a>";


}
function maketime($last){
$timenow = time();
			if($last>$timenow){
					$order = $last-$timenow;
						while($order >= 60){
							$order = $order-60;
							$ordermleft++;
						}
						while($ordermleft >= 60){
							$ordermleft = $ordermleft-60;
							$orderhleft++;
						}

						if($ordermleft == 0){
							$ordermleft = "";
						} else {
						$ordermleft = "$ordermleft Minutes";
						}
						if($orderhleft == 0){
							$orderhleft = "";
						} else {
						$orderhleft = "$orderhleft Hours";
						}
return "$orderhleft $ordermleft $order Seconds";
}}
?>
<html>
<head>
<title>Banned account #<?php echo "$tell->id"; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<table width="60%" border="1" align="center" cellpadding="2" cellspacing="0" class=thinline bordercolor=black>
  <tr>
    <td background="includes/grad.jpg"><div align="center">This account is banned!</div></td>
  </tr>
  <tr>
    <td>We are sorry to say that you, <?php echo "$tell->username"; ?>
      <?php if ($tell->type == "0"){ echo "Has been banned from playing on Bloodtown Mafia."; }else{ ?>
      has been banned from playing on Bloodtown Mafia temporarily, this ban will last
      for <?php  echo "".maketime($tell->length).""; } ?><br>
      <br>
      Reason: <?php echo "$tell->reason"; ?><br>
      <br>
      If you do not think we have a good enough reason then you may defend yourself.
      If we find this a good enough reason we may even unban you or decrease the
      ban length.</td>
  </tr>
</table>

</body>
</html>