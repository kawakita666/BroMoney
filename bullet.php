<?
session_start();


include "includes/functions.php";
logincheck();
$username=$_SESSION['username'];
include "includes/db_connect.php";
echo "$style";

$page="bullet.php";


$fetch= mysql_fetch_object(mysql_query("SELECT * FROM users WHERE username='$username'"));
$fetch_bullet= mysql_fetch_object(mysql_query("SELECT * FROM bullet WHERE location='$fetch->location'"));

$bullet = mysql_fetch_object(mysql_query("SELECT * FROM bullet WHERE location='$fetch->location' LIMIT 1"));
if (strtolower($bullet->owner) == strtolower($fetch->username)){
include_once"bulletCP.php";
exit();
}else{

$last = $fetch->bullettime - time();



/////CHECK IF INTREST TIME IS UP


/////CHECK IF INTREST TIME IS UP
////MOV ONTO WITHDRAW

if(strip_tags($_POST['With_button']) && (strip_tags($_POST['with_amount']))){
$with_amount=intval(strip_tags($_POST['with_amount']));

		if ($with_amount > "0"){
		if ($with_amount == 0 || !$with_amount || ereg('[^0-9]',$with_amount)){
	print "You cant withdraw that amount.";

}elseif ($with_amount != 0 && $with_amount && !ereg('[^0-9]',$with_amount)){
	if ($with_amount > $fetch->bullet){
	echo "You dont have that much in the bullet.";
	}elseif ($with_amount <= $fetch->bullet){
	$bullets_plus = $fetch->bullets + $with_amount;
	$bullets_minus = $fetch->bullet - $with_amount;
	if ($bullets_minus == "0"){

mysql_query("UPDATE users SET bullets = '$bullets_plus', bullet='0', bullettime='0' WHERE username='$username'");
}elseif($bullets_minus != "0"){

	mysql_query("UPDATE users SET bullets = '$bullets_plus', bullet='$bullets_minus' WHERE username='$username'");

	}
echo "You withdrew *$with_amount";
echo "<meta http-equiv=\"refresh\" content=\"0;URL=bullet.php\">";
}}}}
/////IF THEY DEPOSIT:




if(strip_tags($_POST['dep_amount']) && (strip_tags($_POST['Dep_button']))){


	$dep_amount=intval(strip_tags($_POST['dep_amount']));

		if ($dep_amount > "0"){
		if ($dep_amount == 0 || !$dep_amount || ereg('[^0-9]',$dep_amount)){
	print "You cant deposit that amount.";

}elseif ($dep_amount != 0 && $dep_amount && !ereg('[^0-9]',$dep_amount)){



	if ($dep_amount > $fetch->bullets){
	echo "You do not have that much bullets";
	}elseif ($dep_amount <= $fetch->bullets){
	$user_loose = $fetch->bullets - $dep_amount;
	$bullet_add = $dep_amount;


	$ha = 3600*24;
		$timewait=time()+ $ha;

	mysql_query("UPDATE users SET bullets = '$user_loose', bullet='$bullet_add', bullettime='$timewait' WHERE username='$username'");

echo "bullets deposited";
echo "<meta http-equiv=\"refresh\" content=\"0;URL=bullet.php\">";
}}}}


////SEND////


if($_POST['Send_button']){
$send_amount=intval(strip_tags($_POST['send_amount']));

$to_person = strip_tags($_POST['to_person']);
	if (!$to_person){
	echo "Please enter a username.";
	}elseif ($to_person){

$num_true=mysql_num_rows(mysql_query("SELECT * FROM users WHERE username='$to_person'"));

if ($num_true == 0){
echo "No such user.";
}elseif ($num_true != 0){

	if ($send_amount > "0"){
		if ($send_amount == 0 || !$send_amount || ereg('[^0-9]',$send_amount)){
	print "You cant send that amount.";

}elseif ($send_amount != 0 || $send_amount || !ereg('[^0-9]',$send_amount)){



	if ($send_amount > $fetch->bullets){
	echo "You do not have that much bullets to send.";
	}elseif ($send_amount <= $fetch->bullets){


	if (strtolower($to_person) == strtolower($username)){
	echo "You cannot send the bullets to yourself";
	}elseif (strtolower($to_person) != strtolower($username)){

$to_user=mysql_fetch_object(mysql_query("SELECT * FROM users WHERE username='$to_person'"));


	$otheruser = $send_amount - round($send_amount * $fetch_bullet->send_intrest /100);
$ban_owner_get=round($send_amount * $fetch_bullet->send_intrest /100);

$otheruser=$to_user->bullets + $otheruser;
	mysql_query("UPDATE users SET bullets = bullets-$send_amount WHERE username='$username'");
	mysql_query("UPDATE users SET bullets = '$otheruser' WHERE username='$to_person'");

mysql_query("UPDATE users SET bullets = bullets+$ban_owner_get WHERE username='$fetch_bullet->owner'");
mysql_query("UPDATE bullet SET profit = profit+$ban_owner_get WHERE username='$to_person'");
$gmt_time = gmdate('Y-m-d h:i:s');
mysql_query("INSERT INTO `bullettran` ( `id` , `to` , `from` , `amount` , `date` )
VALUES (
'', '$to_person', '$username', '$send_amount', '$gmt_time'
);") or die (mysql_error());



echo "Successful transaction";
echo "<meta http-equiv=\"refresh\" content=\"0;URL=bullet.php\">";
}
}}}}}}





?>

<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel=stylesheet href=includes/in.css type=text/css>
</head>

<body>
<form action="" method=POST>
<table width="69%" border="1" align="center" cellpadding="0" cellspacing="0" class=thinline rules=none>
  <tr>
    <td class="header"><center>
        bullet</center></td>
  </tr>
  <tr bgcolor=black>
    <td height=1 colspan=3></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="3" cellpadding="0">
        <tr>
          <td height="8" colspan="3"><center class=Tableheading>
            </center></td>
        </tr>
        <tr>
          <td height="2" colspan="3">&nbsp;</td>
        </tr>
        <tr>
          <td height="3" colspan="3">&nbsp;</td>
        </tr>
        <tr>
          <td height="0" colspan="3"><center class=Tableheading>
              Send bullets:</center></td>
        </tr>
        <tr>
          <td height="-1">To: </td>
          <td height="-1" colspan="2"><input name="to_person" type="text" id="to_person"></td>
        </tr>
        <tr>
          <td height="-2">Message to include:</td>
          <td height="-2" colspan="2"><input type="text" name="textfield"></td>
        </tr>
        <tr>
          <td height="-3">Amount:</td>
          <td height="-3" colspan="2"><input name="send_amount" type="text" id="send_amount"></td>
        </tr>
        <tr>
          <td height="-3" colspan="3"><div align="right">
              <input name="Send_button" type="submit" id="Send_button" value="Send">
            </div></td>
        </tr>
      </table></td>
  </tr>
</table>
<br>
<br>
<table width="69%" border="1" align="center" cellpadding="0" cellspacing="0" class=thinline rules=none>
  <tr>
    <td class="header" colspan=4><center>
        Last 10 recieved (Show all)
      </center></td>
  </tr>
  <tr>
    <td> <tr bgcolor=black>
    <td height="-3" bgcolor="#000000" class=tip>Tran ID#</td>
    <td bgcolor="#000000" class=tip>From</td>
    <td bgcolor="#000000" class=tip>Amount</td>
    <td bgcolor="#000000" class=tip>Date</td>
  </tr>
        <? $k=mysql_query("SELECT * FROM `bullettran` WHERE `to`='$username' ORDER BY id DESC LIMIT 10");
       while($p=mysql_fetch_object($k)){
	   echo "
	   <tr>
          <td>$p->id</td>
          <td><a href='profile.php?viewuser=$p->from'>$p->from</a></td>
          <td>*".makecomma($p->amount)."</td>
          <td>$p->date</td>
        </tr>";
		}
		?>
      </table></td>
  </tr>
</table>
<br>
<table width="69%" border="1" align="center" cellpadding="0" cellspacing="0" class=thinline rules=none>
  <tr>
     <td class="header" colspan=4><center>
        Last 10 sent (Show all)
      </center></td>
  </tr>
 <tr bgcolor=black><td height=1 colspan=3></td></tr>
  <tr bgcolor=white>
    <td height="-3" bgcolor="#000000" class=tip>Tran ID#</td>
    <td bgcolor="#000000" class=tip>To</td>
    <td bgcolor="#000000" class=tip>Amount</td>
    <td bgcolor="#000000" class=tip>Date</td>
  </tr>


  <? $ka=mysql_query("SELECT * FROM `bullettran` WHERE `from`='$username' ORDER BY id DESC LIMIT 10");
       while($pa=mysql_fetch_object($ka)){
	   echo "
	   <tr>
          <td>$pa->id</td>
          <td><a href='profile.php?viewuser=$pa->to'>$pa->to</a></td>
          <td>*".makecomma($pa->amount)."</td>
          <td>$pa->date</td>
        </tr>";
		}
		?>
</table>
<p>&nbsp;</p>
</body>
</html>


<?php } ?>