<?
session_start();
include_once "includes/db_connect.php";
include_once"includes/functions.php";
logincheck();
$username=$_SESSION['username'];
$query_user=mysql_query("SELECT * FROM users WHERE username='$username' LIMIT 1");
$fetch_user=mysql_fetch_object($query_user);

$query_air=mysql_query("SELECT * FROM airport WHERE location='$fetch_user->location' LIMIT 1");
$fetch_air=mysql_fetch_object($query_air);
$price_air=explode("-", $fetch_air->travel_prices);
$profit = explode("-",$fetch_air->profit);
$total = $profit[0] + $profit[1] + $profit[2] + $profit[3] + $profit[4] + $profit[5];
$a1 = mysql_num_rows(mysql_query("SELECT id FROM users WHERE location='England'"));
$a2 = mysql_num_rows(mysql_query("SELECT id FROM users WHERE location='Japan'"));
$a3 = mysql_num_rows(mysql_query("SELECT id FROM users WHERE location='France'"));
$a4 = mysql_num_rows(mysql_query("SELECT id FROM users WHERE location='Usa'"));
$a5 = mysql_num_rows(mysql_query("SELECT id FROM users WHERE location='China'"));
$a6 = mysql_num_rows(mysql_query("SELECT id FROM users WHERE location='Canada'"));



if (strtolower($fetch_air->owner) != strtolower($fetch_user->username)){
exit();
}else{
if (strip_tags($_POST['submit'])){
$n1=$_POST['n1'];
$n2=$_POST['n2'];
$n3=$_POST['n3'];
$n4=$_POST['n4'];
$n5=$_POST['n5'];
$n6=$_POST['n6'];
///STRIP TEXT
$n1=strip_tags($n1);
$n2=strip_tags($n2);
$n3=strip_tags($n3);
$n4=strip_tags($n4);
$n5=strip_tags($n5);
$n6=strip_tags($n6);
if (!ereg('[^0-9]',$n1)){
if (!ereg('[^0-9]',$n2)){
if (!ereg('[^0-9]',$n3)){
if (!ereg('[^0-9]',$n4)){
if (!ereg('[^0-9]',$n5)){
if (!ereg('[^0-9]',$n6)){

if ($n1 <= "80" || $n1 > "3000"){
echo "Englands travel price needs to cost more than �80 but not as much as �3001";
}elseif ($n1 > "80" || $n1 < "3000"){
/////////

if ($n2 <= "80" || $n2 > "3000"){
echo "Japans travel price needs to cost more than �80 but not as much as �3001";
}elseif ($n2 > "80" || $n2 < "3000"){

if ($n3 <= "80" || $n3 > "3000"){
echo "Colombia's travel price needs to cost more than �80 but not as much as �3001";
}elseif ($n3 > "80" || $n3 < "1000"){

if ($n4 <= "80" || $n4 > "3000"){
echo "Usa's travel price needs to cost more than �80 but not as much as �3001";
}elseif ($n4 > "80" || $n4 < "3000"){
if ($n5 <= "80" || $n5 > "3000"){
echo "South Africa's travel price needs to cost more than �80 but not as much as �3001";
}elseif ($n5 > "80" || $n5 < "3000"){

if ($n6 <= "80" || $n6 > "3000"){
echo "Mexico's travel price needs to cost more than �80 but not as much as �3001";
}elseif ($n6 > "80" || $n6 < "3000"){


$new_array="$n1-$n2-$n3-$n4-$n5-$n6";
mysql_query("UPDATE airport SET travel_prices='$new_array' WHERE location='$fetch_user->location'");
echo "You successfully updated your airport prices.";
echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"1; URL=../fly.php\">";


}}}}}}}}}}}}}

if (strip_tags($_POST['other'])){
$drop = $_POST['drop'];
$drop = strip_tags($drop);
$give_to=$_POST['give_to'];
$give_to=strip_tags($give_to);
$reset = $_POST['reset'];
$reset=strip_tags($reset);

/////DID they choose to drop////
if ($drop == "Yes"){
mysql_query("UPDATE airport SET owner='0' WHERE location='$fetch_user->location' AND owner='$username'");
}
if (isset($give_to) && ($drop != "Yes") && ($give_to != "")){
mysql_query("UPDATE airport SET owner='$give_to' WHERE location='$fetch_user->location' AND owner='$username'");
}
if ($reset == "Yes"){
mysql_query("UPDATE airport SET profit='0-0-0-0-0-0' WHERE location='$fetch_user->location' AND owner='$username'");
}
echo "Airport stats updated";
}
?>



<link href="includes/in.css" rel="stylesheet" type="text/css">

<form name=form1 method=post action="">
  <table width=442 height="564" border=1 align=center cellpadding="0" cellspacing=0  class=thinline>
    <tr>
      <td height="22" colspan=5 class=header><center>
Airport CP </center></td>
    </tr>
    <tr class=title>
      <td height="209" colspan=5><div align=center><img src="images/plane1.jpg" width="345" height="207"></div></td>
    </tr>
    <tr class=title>
      <td width="78" height="41"> <div align=center>Country</div></td>
      <td width="79"><div align="center">Travel price</div></td>
      <td>Current prices</td>
      <td>People in country</td>
      <td>Money made</td>
    </tr>
    <tr class=text>
      <th height="32"><div align="left">
          <label id=label1 for=1>England</label>
        </div></th>
      <th height="32"><input name="n1" type="text" value="<?php echo "$price_air[0]"; ?>" size="10" maxlength="10"></th>
      <td width="114">&pound;<?php echo "$price_air[0]"; ?>&nbsp;</td>
      <td><?php echo "$a1"; ?>&nbsp;</td>
      <td width="56">&pound;<?php echo "$profit[0]"; ?>&nbsp;</td>
    </tr>
    <tr class=text>
      <th height="34"><div align="left">
          <label id=label2 for=2>Japan</label>
        </div></th>
      <th height="34"><input name="n2" type="text" value="<?php echo "$price_air[1]"; ?>" size="10" maxlength="10"></th>
      <td>&pound;<?php echo "$price_air[1]"; ?></td>
      <td><?php echo "$a2"; ?></td>
      <td>&pound;<?php echo "$profit[1]"; ?></td>
    </tr>
    <tr class=text>
      <th height="33"><div align="left">
          <label id=label3 for=3>France</label>
        </div></th>
      <th height="33"><input name="n3" type="text" value="<?php echo "$price_air[2]"; ?>" size="10" maxlength="10"></th>
      <td>&pound;<?php echo "$price_air[2]"; ?></td>
      <td><?php echo "$a3"; ?></td>
      <td>&pound;<?php echo "$profit[2]"; ?></td>
    </tr>
    <tr class=text>
      <th><div align="left">
          <label id=label4 for=4>Usa</label>
        </div></th>
      <th><input name="n4" type="text" value="<?php echo "$price_air[3]"; ?>" size="10" maxlength="10"></th>
      <td>&pound;<?php echo "$price_air[3]"; ?></td>
      <td><?php echo "$a4"; ?></td>
      <td>&pound;<?php echo "$profit[3]"; ?></td>
    </tr>
    <tr class=text>
      <th><div align="left">
          <label id=label5 for=5>China</label>
        </div></th>
      <th><input name="n5" type="text" value="<?php echo "$price_air[4]"; ?>" size="10" maxlength="10"></th>
      <td>&pound;<?php echo "$price_air[4]"; ?></td>
      <td><?php echo "$a5"; ?></td>
      <td>&pound;<?php echo "$profit[4]"; ?></td>
    </tr>
    <tr class=text>
      <th><div align="left">
          <label id=label6 for=6>Canada</label>
        </div></th>
      <th><input name="n6" type="text" value="<?php echo "$price_air[5]"; ?>" size="10" maxlength="10"></th>
      <td>&pound;<?php echo "$price_air[5]"; ?></td>
      <td><?php echo "$a6"; ?></td>
      <td>&pound;<?php echo "$profit[5]"; ?></td>
    </tr>
    <tr class=title>
      <td colspan="2"><input type=submit name=submit value=Submit class=submit></td>
      <td colspan="3"><div align="right">Total:<?php echo "$total";  ?> </div></td>
    </tr>
    <tr class=title>
      <td colspan="5" class="header"><center>
          Other:</center></td>
    </tr>
    <tr class=title>
      <td height="21" colspan="5"><table width="100%" border="0" cellspacing="3" cellpadding="0">
          <tr>
            <td width="50%">Drop: </td>
            <td width="50%"><input name="drop" type="radio" value="Yes">
              Yes </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><input name="drop" type="radio" value="No" checked>
              No</td>
          </tr>
          <tr>
            <td>Give to: </td>
            <td><input name="give_to" type="text" id="give_to"></td>
          </tr>
          <tr>
            <td>Reset earnings</td>
            <td><input type="radio" name="reset" value="Yes">
              Yes </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><input name="reset" type="radio" value="No" checked>
              No</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="other" value="Submit"></td>
          </tr>
        </table></td>
    </tr>
  </table>
</form>
<? } ?>
<?php include_once"includes/footer.php"; ?>