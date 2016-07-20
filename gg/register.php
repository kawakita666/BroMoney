<?php
session_start();
include_once"includes/db_connect.php";
if (isset($_SESSION['username'])){
header("Location: mb.php");
exit();
}

$from_user=strip_tags($_POST['ref']);
if ($_POST['Submit']){

// Define post fields into simple variables
$reg_username = $_POST['reg_username'];

$email = $_POST['email'];
$email1 = $_POST['email1'];
$location=strip_tags($_POST['location']);
$reg_username=trim($reg_username);

$today = gmdate('Y-m-d h:i:s');


$reg_username = stripslashes($reg_username);
$email = stripslashes($email);
$quote = stripslashes($quote);
$reg_username = strip_tags($reg_username);
$email = strip_tags($email);




if((!$reg_username) || (!$email) || (!$location)){
$message="Fill in all fields";
}else{
if ($email != $email1){
$message="Emails do not match";
}elseif ($email == $email1){

if (ereg('[^A-Za-z0-9]', $reg_username)) {  $message="Your username can only contain letters and numbers.";
}elseif (!ereg('[^A-Za-z0-9]', $reg_username)) {


if (strlen($reg_username) <= 3 || strlen($reg_username) >= 20){
$message= "Username must be over 3 and under 20";
}elseif (strlen($reg_username) > 3 || strlen($reg_username) < 20){


$sql_email_check = mysql_query("SELECT email FROM users
            WHERE email='$email' AND status='Alive'");
$sql_username_check = mysql_query("SELECT username FROM users
            WHERE username='$reg_username'");

$email_check = mysql_num_rows($sql_email_check);
$username_check = mysql_num_rows($sql_username_check);

if(($email_check > 0) || ($username_check > 0)){
    echo "Im sorry but there has been an error please read on..<br />";
    if($email_check > 0){
        $message= "Your email address has already been used!";
        unset($email);
    }
    if($username_check > 0){
        $message="Your desired username is already in use!";
        unset($reg_username);
    }


}else{


if ($location == 'England'){
$uk[0] = rand(51,104);
$uk[1] = rand(90,412);
$uk[2] = rand(68,296);
$uk[3] = rand(23,47);
$uk[4] = rand(2705,3312);
$implodething = implode("-", $uk);
////japan////
$city="Cambridgeshire";
}elseif ($location == 'Japan'){
$japan[0] = rand(149,259);
$japan[1] = rand(113,582);
$japan[2] = rand(12,74);
$japan[3] = rand(82,150);
$japan[4] = rand(1700,2832);
///France///
$city="Chiba";
$implodething = implode("-", $japan);
}elseif ($location == 'France'){
$France[0] = rand(31,301);
$France[1] = rand(80,397);
$France[2] = rand(23,118);
$France[3] = rand(90,123);
$France[4] = rand(316,812);
///usa////
$city="Bogota";
$implodething = implode("-", $France);
}elseif ($location == 'Usa'){
$usa[0] = rand(51,104);
$usa[1] = rand(90,412);
$usa[2] = rand(60,192);
$usa[3] = rand(98,116);
$usa[4] = rand(472,1003);
$city="Bogota";
///China////
$implodething = implode("-", $usa);
$city="New York";
}elseif ($location == 'China'){
$China[0] = rand(78,112);
$China[1] = rand(170,194);
$China[2] = rand(118,132);
$China[3] = rand(110,506);
$China[4] = rand(1500,1703);

//Canada//

$implodething = implode("-", $China);
$city="Alberton";
}elseif ($location == 'Canada'){
$Canada[0] = rand(70,159);
$Canada[1] = rand(33,68);
$Canada[2] = rand(110,191);
$Canada[3] = rand(12,19);
$Canada[4] = rand(1001,1308);
$implodething = implode("-", $Canada);
$city="Acapulco";
}



$ip = $_SERVER['REMOTE_ADDR'];

$random_password22=rand(11111,99999999);

mysql_query("INSERT INTO `user_info` ( `id` , `username`)
VALUES (
'', '$reg_username')");

mysql_query("INSERT INTO `users` ( `id` , `username` , `password` , `activated` , `money` , `online` , `crimechance` , `lastcrime` , `rankpoints` , `userlevel` , `lasttop` , `status` , `regged` , `rank` , `layout` , `email` , `quote` , `image` , `location` , `bullets` , `gtachance` , `lastgta` , `lasttravel` , `bank` , `banktime` , `last_race` , `music` , `crew` , `get_away_time` , `get_away` , `health` , `energy` , `last_ext` , `lasttran` , `drugprices` , `drugs` , `l_ip` , `r_ip` , `crew_invite` , `referral` , `weapon` , `mission` , `points` , `lpv` , `page` , `editor` , `food_chance` , `last_food` , `last_order` , `freinds` , `protection` , `plane` , `married` , `oc` , `last_oc` , `atm` , `last_bank` , `last_attempted` , `last_kill` , `ver_code` , `last_script_check` , `global` , `poll` , `clicks` , `click_rate` , `tut` , `drugs_from` , `total_drugs_mission` , `city` )
VALUES (
'', '$reg_username', '$random_password22', '0', '10000', '', '0-0-0-0-0-0-0', '', '0', '0', '', 'Alive', '$today', 'Scum', '0', '$email', 'No quote', 'images/default.jpg', '$location', '0', '0-0-0', '', '', '0', '', '', '', '0', '', '0', '100', '100', '', '', '0-0-0-0-0', '0-0-0-0-0', '127.0.0.1', '$ip', '0', '0', 'None', '1', '0', '', '', '0', '0-0-0', '', '', 'None', 'None', 'None', '', '0', '', 'False', '', '', '', '456', '', '0', '', '0', '', '0', '', '0', '$city'
)");





     $userid = mysql_insert_id();
    // Let's mail the user!
    $subject = "MafiaBase";
    $message = "$reg_username,
    Hello $reg_username , thank you for choosing Bloodtown Maria your login information is below.

  Click to activate:http://www.bf2-gamers.com/mafia/activate.php?id=$userid&code=$random_password22&r=$from_user


    Login Information:
    Username: $reg_username
    Password: $random_password22

    Thanks
    Staff.

    This is an automated response, please do not reply!";

    mail($email, $subject, $message,
        "From: Bloodtown Mafia<admin@bf2-gamers.com>");
   $message= 'Account created, check email. ';
} }}}}}

?>


<html>
<head>
<title>Bloodtown Mafia</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="includes/in.css" rel="stylesheet" type="text/css">
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
</script>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- ImageReady Slices (a try.psd) -->
<table width="402" height="600" border="0" align="center" cellpadding="0" cellspacing="0" id="Table_01">
  <!--DWLayoutTable-->
  <tr>
    <td width="211" height="98">&nbsp;</td>
    <td width="401">&nbsp;</td>
    <td width="366">&nbsp;</td>
  </tr>
  <tr>
    <td height="189">&nbsp;</td>
    <td valign="top"><form name="form2" method="post" action="">
        <table width="400" border="1" cellpadding="0" cellspacing="0" class=thinline rules=none>
          <tr>
            <td background="includes/grad.jpg"><div align="center">Register</div></td>
          </tr>
          <tr bgcolor=black>
            <td height=1 colspan=3></td>
          </tr>
          <tr>
            <td align="center" valign="top"><table width="100%"  border="0" cellspacing="1" cellpadding="1">
                <tr>
                  <td colspan="2"><div align="center"><font color=red>
                      <? echo "$message"; ?>
                      </font></div></td>
                </tr>
                <tr>
                  <td width="25%">Username:</td>
                  <td width="75%"><input name="reg_username" type="text" id="reg_username" value="" size="30" maxlength="40"></td>
                </tr>
                <tr>
                  <td>Email address:</td>
                  <td><input name="email" type="text" id="username3" value="" size="30" ></td>
                </tr>
                <tr>
                  <td>Confirm email:</td>
                  <td><input name="email1" type="text" id="email" value="" size="30"></td>
                </tr>
                <tr>
                  <td height="20">Starting location:</td>
                  <td><select name="location" id="starting" >
                      <option value="England">England</option>
                      <option value="Japan">Japan</option>
                      <option value="France">France</option>
                      <option value="Usa">Usa </option>
                      <option value="China">China </option>
                      <option>Canada </select> <input type=hidden name="ref" value="<?php echo "$_GET[ref]"; ?>">
                  </td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><input type="submit" name="Submit" value="Register"></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
              </table></td>
          </tr>
        </table>
      </form></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="14"></td>
    <td valign="top"><form name="form1" method="post" action="">
        </form></td>
    <td></td>
  </tr>
  <tr>
    <td height="487"></td>
    <td>&nbsp;</td>
    <td></td>
  </tr>
</table>
<!-- End ImageReady Slices -->
</body>
</html>