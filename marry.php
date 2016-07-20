<?php
session_start();
include_once "includes/db_connect.php";
include_once "includes/functions.php";
include_once "includes/jail_check.php";
logincheck();
$username=$_SESSION['username'];

$fetch=mysql_fetch_object(mysql_query("SELECT * FROM users WHERE username='$username'"));
if (strip_tags($_POST['Submit']) && strip_tags($_POST['name'])){
$name=strip_tags($_POST['name']);
$ring=strip_tags($_POST['ring']);
if (!$name){
echo "Please enter the name of the person whom you wish to marry.";
}elseif ($name){
if ($ring == "1"){
$price="100000";
$ring_type="Cheap ass ring";
}elseif ($ring == "2"){
$price ="500000";
$ring_type="Golden Ring";
}elseif ($ring == "3"){
$price ="1000000";
$ring_type="Diamond Ring";
}elseif ($ring == "4"){
$price ="10000000";
$ring_type="Beers Diamond Ring";
}
$total = 10000 + $price;

if ($total > $fetch->money){
echo "You dont have enough money";
}elseif ($total <= $fetch->money){
$new_money=$fetch->money - $total;
$married_tr=mysql_num_rows(mysql_query("SELECT *
FROM `married`
WHERE `done` = '1'
AND `starter` = '$username'
OR `other` = '$username'"));
if ($married_tr != "0"){
echo "Your already married!";
}elseif($married_tr == "0"){
$married_tt=mysql_num_rows(mysql_query("SELECT *
FROM `married`
WHERE `done` = '1'
AND `starter` = '$name'
OR `other` = '$name'"));
if ($married_tt != "0"){
echo "This user is not single.";
}elseif ($married_tt == "0"){

mysql_query("INSERT INTO `married` ( `id` , `starter` , `other` , `done` , `ring` )
VALUES (
'', '$username', '$name', '0', '$ring_type'
)");
$invite_text="<form name=marriage method=post action='?accept=marry&marrie_who=$username'>
  <div align=center>You have been asked to marry $username, you got 2 options:<br>
    <input name=Decline type=submit id=Decline value=Decline>
    |
    <input name=Accept_marriage type=submit id=Accept value=Accept>
  </div>
</form>";

mysql_query("INSERT INTO `inbox` ( `id` , `to` , `from` , `message` , `date` , `read` )
VALUES (
'', '$name', '$username', '$invite_text', '$date', '0'
)");

echo "You asked $name to marry you!";

}}}}}
if (strip_tags($_POST['div'])){


$c=mysql_num_rows(mysql_query("SELECT * FROM married WHERE starter='$username' OR other='$username' AND done='1'"));
if ($c == "0"){
echo "Your not married.";
}elseif ($c != "0"){

mysql_query("DELETE FROM married WHERE starter='$username' OR other='$username'");
echo "You divorced your partner.";
$new_money=$fetch->money - 1000000;
mysql_query("UPDATE users SET money='$new_money' WHERE username='$username'");


mysql_query("INSERT INTO `inbox` ( `id` , `to` , `from` , `message` , `date` , `read` )
VALUES (
'', '$name', '$username', '$username has divorced you.', '$date', '0'
)");

}



}
?>
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="includes/in.css" rel="stylesheet" type="text/css">
</head>

<body>
<form name="form1" method="post" action="">
  <table width="82%" border="1" align="center" cellpadding="0" cellspacing="0" class=thinline rules=none>
    <tr>
      <td class=header><center>
        Propose
        </center></td>
    </tr>
	 <tr bgcolor=black><td height=1 colspan=3></td></tr>
    <tr>
      <td><table width="100%" border="0" cellspacing="3" cellpadding="0">
          <tr>
            <td colspan="3"><div align="center">Welcome to <?php echo "$fetch->location"; ?>'s
                church.</div></td>
          </tr>
          <tr>
            <td colspan="3"><div align="center">It will cost &pound;10,000 for
                every request you make</div></td>
          </tr>
          <tr>
            <td width="32%"><div align="center">Who do you wish to marry: </div></td>
            <td width="36%"><input name="name" type="text" id="units" size="10" maxlength="100"></td>
            <td width="32%"><img src="images/church.jpg" name="img" width="150" height="150" border="1" id="img"></td>
          </tr>
          <tr>
            <td width="32%"><div align="center">What kind of ring do you want
                to buy him/her: </div></td>
            <td width="36%"> <select size="1" name="ring">
                <option value="1">TMN cheap ass ring - 100,000</option>
                <option value="2" >Golden ring - 500,000</option>
                <option value="3">Diamond ring - 1,000,000</option>
                <option value="4">BM diamond ring - 10,000,000</option>
              </select> </td>
            <td width="32%">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td colspan="2"><input type="submit" name="Submit" value="Submit"></td>
          </tr>
        </table></td>
    </tr>
  </table>
  <br>
  <br>
  <table width="82%" border="1" align="center" cellpadding="0" cellspacing="0" class=thinline rules=none>
    <tr>
      <td class=header><center>
          Divorce
        </center></td>
    </tr>
	 <tr bgcolor=black><td height=1 colspan=3></td></tr>
    <tr>
      <td><table width="100%" border="0" cellspacing="3" cellpadding="0">
          <tr>
            <td width="618"><div align="center">Welcome to <?php echo "$fetch->location"; ?>'s
                church.</div></td>
          </tr>
          <tr>
            <td><div align="center">It will cost &pound;1,000,000 for every divorce
                you make. Its a good idea to inform your wife/husband before you
                divorce, therefore you can split the cost.</div></td>
          </tr>
          <tr>
            <td><div align="center">
                <input name="div" type="submit" id="divorce" value="Divorce">
              </div></td>
          </tr>
        </table></td>
    </tr>
  </table>
  <br>
  <table width="82%" border="1" align="center" cellpadding="2" cellspacing="0" class=thinline rules=none>
    <tr>
      <td colspan="3" class=header height=20><center>
          Last 5 proposals </center></td>
    </tr>
	 <tr bgcolor=black><td height=1 colspan=3></td></tr>
    <tr bgcolor=black>
      <td width="33%" class=tip>Proposed</td>
      <td width="30%" class=tip>To</td>
      <td width="37%" class=tip>Ring</td>
    </tr>

    <?php $query=mysql_query("SELECT * FROM married WHERE done='0' ORDER BY id DESC");
	$nums=mysql_num_rows($query);
	if($num=="0"){ echo "<tr>
      <td colspan=3>No recent proposals</td>
    </tr>";
	}
	while($obby=mysql_fetch_object($query)){
	echo "
    <tr>
      <td><a href='profile.php?viewuser=$obby->starter'>$obby->starter</a></td>
      <td><a href='profile.php?viewuser=$obby->other'>$obby->other</a></td>
      <td>$obby->ring</td>
    </tr>";
	}
	?>
  </table>
</form>
</body>
</html>