<?php
session_start();
header("Cache-control: private");
include "includes/db_connect.php";
include "includes/functions.php";

logincheck();
$username = $_SESSION['username'];
$query2=mysql_query("SELECT * FROM user_info WHERE username='$username'");
$in_out=mysql_fetch_object($query2);

///here are the config files


$drugsa = mysql_query("SELECT * FROM users WHERE username='$username'");
$fetch=mysql_fetch_object($drugsa);

	$boya = explode("-", $fetch->drugs);
$last = $successa[1];
$prices = explode("-", $fetch->drugprices);
	$money = $fetch->money;
	$location= $fetch->location;
	$rank= $fetch->rank;
$mission=$fetch->mission;


if ($rank == "Scum"){
	$limit = "2";
}
if ($rank == "Wannabe"){
	$limit = "5";
}
if ($rank == "Goon"){
	$limit = "10";
}
if ($rank == "Hired Thug"){
	$limit = "15";
}
if ($rank == "Criminal"){
	$limit = "20";
}
if ($rank == "Hitman"){
	$limit = "25";
}
if ($rank == "Wanted Criminal"){
	$limit = "30";
}

if ($rank == "Hired Gunner"){
	$limit = "35";
}

if ($rank == "Assassin"){
	$limit = "40";
}
if ($rank == "Boss"){
	$limit = "45";
}

if ($rank == "Don"){
	$limit = "50";
}
if ($rank == "Enemy of the State"){
	$limit = "55";
}

if ($rank == "Global Dominator"){
	$limit = "60";
}
if ($rank == "Legend"){
	$limit = "65";
}
if ($rank == "Legendary Legend"){
	$limit = "70";
}
if ($rank == "Master Legend"){
	$limit = "75";
}
if ($rank == "Jesus"){
	$limit = "80";
}
if ($rank == "HOLY SHIT"){
	$limit = "85";
}
if ($rank == "Don"){
	$limit = "90";
}

if ($_POST['tran']){
	$tran = $_POST['tran'];
if ($tran == 'buy'){



if ($_POST['hash']){
$hash_amount = intval(strip_tags($_POST['hash']));
$total_hash = $hash_amount* $prices[0];
}else{
$hash_amount = 0;
}

if ($_POST['ect']){
$ect_amount = intval(strip_tags($_POST['ect']));
$total_ect = $ect_amount* $prices[1];
}else{
$ect_amount = 0;
}
if ($_POST['coca']){
$coca_amount = intval(strip_tags($_POST['coca']));
$total_coca = $coca_amount* $prices[2];
}else{
$coca_amount = 0;
}
if ($_POST['phen']){
$phen_amount = intval(strip_tags($_POST['phen']));

$total_phen = $phen_amount* $prices[3];
}else{
$phen_amount = 0;
}

if ($_POST['amit']){
$amit_amount = intval(strip_tags($_POST['amit']));
$total_amit = $amit_amount* $prices[4];
}else{
$amit_amount = 0;
}

if(ereg("[^[:digit:]]", $hash_amount)){
			echo "
<font color=red>Bad amount!!NUMBA 1</font>";
}elseif (!ereg("[^[:digit:]]", $hash_amount)){

///////////////////
if(ereg("[^[:digit:]]", $ect_amount)){
			echo "
<font color=red>Bad ammount!!</font>";
}elseif (!ereg("[^[:digit:]]", $ect_amount)){
//////////////////////

if(ereg("[^[:digit:]]", $coca_amount)){
			echo "
<font color=red>Bad ammount!!</font>";
}elseif (!ereg("[^[:digit:]]", $coca_amount)){
////////////////////////

if(ereg("[^[:digit:]]", $phen_amount)){
			echo "
<font color=red>Bad ammount!!</font>";
}elseif (!ereg("[^[:digit:]]", $phen_amount)){

/////////////////////
if(ereg("[^[:digit:]]", $amit_amount)){
			echo "
<font color=red>Bad ammount!!</font>";
}elseif (!ereg("[^[:digit:]]", $amit_amount)){
/////////////////////


if ($boya[0] != 0){
			$hash_amount = $hash_amount + $boya[0];
		}
if ($boya[1] != 0){
			$ect_amount = $ect_amount + $boya[1];
		}
if ($boya[2] != 0){
			$coca_amount = $coca_amount + $boya[2];
		}
if ($boya[3] != 0){

			$phen_amount = $phen_amount + $boya[3];
		}
if ($boya[4] != 0){
			$amit_amount = $amit_amount+ $boya[4];
		}

$total = $hash_amount + $ect_amount + $coca_amount + $phen_amount + $amit_amount;

if ($total > $limit){
			echo "<font color=red>You cant carry that much!</font>";
			}elseif ($total <= $limit){
$totalprice = $total_hash + $total_ect + $total_coca + $total_phen + $total_amit;


if ($totalprice > $money){
echo "You cant afford that.";
}elseif ($totalprice <= $money){


if($fetch->location == "England" && $fetch->mission == "1"){
				print"No more Phencyclidine left in England";

			}else{


$newgrams2 = "$hash_amount-$ect_amount-$coca_amount-$phen_amount-$amit_amount";
					$currentmoney = $money - $totalprice;
					mysql_query("UPDATE users SET money='$currentmoney',drugs='$newgrams2' WHERE username='$username'");
echo "Successful transaction.";
//echo "$newgrams";
}}}}}}}}}}

if ($_POST['tran']){
	$tran = $_POST['tran'];
if ($tran == "sell"){
if ($_POST['hash']){
$hash_sell = intval(strip_tags($_POST['hash']));
$total_hash = $hash_sell* $prices[0];
}else{
$hash_sell = 0;
}

if ($_POST['ect']){
$ect_sell = $_POST['ect'];
$total_ect = $ect_sell* $prices[1];
}else{
$ect_sell = 0;
}
if ($_POST['coca']){
$coca_sell = intval(strip_tags($_POST['coca']));
$total_coca = $coca_sell * $prices[2];
}else{
$coca_sell = 0;
}
if ($_POST['phen']){
$phen_sell = intval(strip_tags($_POST['phen']));
$total_phen = $phen_sell * $prices[3];
}else{
$phen_sell = 0;
}

if ($_POST['amit']){
$amit_sell = intval(strip_tags($_POST['amit']));
$total_amit = $amit_sell * $prices[4];
}else{
$amit_sell = 0;
}

if(ereg("[^[:digit:]]", $hash_sell)){
			echo "
<font color=red>Bad ammount!!</font>";
}elseif (!ereg("[^[:digit:]]", $hash_sell)){

///////////////////
if(ereg("[^[:digit:]]", $ect_sell)){
			echo "
<font color=red>Bad ammount!!</font>";
}elseif (!ereg("[^[:digit:]]", $ect_sell)){
//////////////////////

if(ereg("[^[:digit:]]", $coca_sell)){
			echo "
<font color=red>Bad ammount!!</font>";
}elseif (!ereg("[^[:digit:]]", $coca_sell)){
////////////////////////

if(ereg("[^[:digit:]]", $phen_sell)){
			echo "
<font color=red>Bad ammount!!</font>";
}elseif (!ereg("[^[:digit:]]", $phen_sell)){
/////////////////////
if(ereg("[^[:digit:]]", $amit_sell)){
			echo "
<font color=red>Bad ammount!!</font>";
}elseif (!ereg("[^[:digit:]]", $amit_sell)){
/////////////////////


if($hash_sell > $boya[0]){
				echo "You dont have that much!";
				}elseif ($hash_sell <= $boya[0]){



if($ect_sell > $boya[1]){
				echo "You dont have that much!";
				}elseif ($ect_sell <= $boya[1]){



if($coca_sell > $boya[2]){
				echo "You dont have that much!";
				}elseif ($coca_sell <= $boya[2]){


if($phen_sell > $boya[3]){
				echo "You dont have that much!";
				}elseif ($phen_sell <= $boya[3]){

if($amit_sell > $boya[4]){
				echo "You dont have that much!";
				}elseif ($amit_sell <= $boya[4]){









if ($boya[0] != 0){
			$hash_sell =$boya[0] - $hash_sell;
		}
if ($boya[1] != 0){
			$ect_sell =  $boya[1] - $ect_sell;
		}
if ($boya[2] != 0){
			$coca_sell = $boya[2] - $coca_sell;
		}
if ($boya[3] != 0){
			$phen_sell = $boya[3] - $phen_sell;
		}
if ($boya[4] != 0){
			$amit_sell = $boya[4]- $amit_sell ;
		}


if ($hash_sell == ""){
			$hash_sell = 0;
		}

if ($ect_sell == ""){
			$ect_sell = 0;
		}
if ($coca_sell == ""){
			$coca_sell = 0;
		}
if ($phen_sell == ""){
			$phen_sell = 0;
		}
if ($amit_sell == ""){
			$amit_sell = 0;
		}


$newgrams1 = "$hash_sell-$ect_sell-$coca_sell-$phen_sell-$amit_sell";
$totalprice = $total_hash + $total_ect + $total_coca + $total_phen + $total_amit;
						$currentmoney = $money + $totalprice;
						mysql_query("UPDATE users SET money='$currentmoney',drugs='$newgrams1' WHERE username='$username'");
								echo "Drugs sold";


//echo "$newgrams1";
}}}}}}}}}}}}

?>
<center>

<form action='' method=post>
    <table border=1 cellspacing=0 cellpadding=2 width=50% class=thinline bordercolor=black>
      <tr colspan="4" >
        <td colspan="4" background="includes/grad.jpg"> <center>
            Drugs
          </center>
          <center class=TableHeading>
          </center>
          <center class=TableHeading>
          </center>
          <center class=TableHeading>
          </center></td>
      </tr>
      <tr colspan="4" bgcolor=white>
        <td  width=25% bgcolor="#999999" class=tip>Amount</td>
        <td  width=25% bgcolor="#999999" class=tip>Drugs</td>
        <td  width=25% bgcolor="#999999" class=tip>Price</td>
        <td  width=25% bgcolor="#999999" class=tip>Units</td>
      </tr>
      <tr>
        <td><input maxlength="2" type=text name=hash size=2>
          units</td>
        <td>Hash</td>
        <td><?php echo "£".makecomma($prices[0]).""; ?></td>
        <td><?php echo "$boya[0]"; ?></td>
      </tr>
      <tr>
        <td><input maxlength="2" type=text name=ect size=2>
          units</td>
        <td>Ectasy</td>
        <td><?php echo "£".makecomma($prices[1]).""; ?></td>
        <td><?php echo "$boya[1]"; ?></td>
      </tr>
      <tr>
        <td><input maxlength="2" type=text name=coca size=2>
          units</td>
        <td>Cocaine</td>
        <td><?php echo "£".makecomma($prices[2]).""; ?></td>
        <td><?php echo "$boya[2]"; ?></td>
      </tr>
      <tr>
        <td><input maxlength="2" type=text name=phen size=2>
          units</td>
        <td>Phencyclidine</td>
        <td><?php echo "£".makecomma($prices[3]).""; ?></td>
        <td><?php echo "$boya[3]"; ?></td>
      </tr>
      <tr>
        <td><input maxlength="2" type=text name=amit size=2>
          units</td>
        <td>Amitriptyline</td>
        <td><?php echo "£".makecomma($prices[4]).""; ?></td>
        <td><?php echo "$boya[4]"; ?></td>
      </tr>
      <tr>
        <td><input type=radio name=tran value=buy checked>
          Buy</td>
        <td><input type=radio name=tran value=sell>
          Sell</td>
        <td>&nbsp;</td>
        <td align=right><input type=submit name='submit' value="Deal Drugs"></td>
      </tr>
    </table>
</form>

</center>
<br>
<br><center>
<p> </form>