<link href="includes/in.css" rel="stylesheet" type="text/css">
<?php //module for password retrieval
 include_once 'includes/db_connect.php';
 if(isset($_POST['submit']) && $_POST['email'] && $_POST['user']) {

 $email=strip_tags($_POST['email']);
$user=strip_tags($_POST['user']);
$new_pass=round(rand(1000,9999999) - rand(1,100) / 3 +2 -100);
$check=mysql_query("SELECT * FROM users WHERE email='$email' AND username='$user'");
$num =mysql_num_rows($check);
$fetch=mysql_fetch_object($check);


if ($num == "0"){
echo "No such email.";
}else{

mysql_query("UPDATE users SET password='$new_pass' WHERE email='$email' AND username='$user'");


    // Let's mail the user!
    $subject = "New password at Bloodtown Mafia!";
    $message = "Dear $fetch->username,
    Hello $reg_username , Your password is $new_pass
    Click the link below to login.
    http://www.bloodtownmafia.com?l=$fetch->username&pw=$new_pass


    Good Luck!
    Bloodtown Mafia staff.

    This is an automated response, please do not reply!";

    mail($email, $subject, $message,
        "From: Bloodtown Mafia<lostpass@bloodtownmafia.com>");
    echo 'A email has been sent with your password.';




}}
?>

 <br><center><form action='' method='post'><font color='#FFFFFF' face='Arial, Helvetica, sans-serif' size=2>

<table class=thinline width=50% cellspacing=0 cellpadding=2 class=thinline bordercolor=black><tr><td background=includes/grad.jpg><center class=bold>Lost Password</center></td></tr>
<tr><td bgcolor=black height=1></td></tr>
<tr><td><center>

Please enter the email address you registered with<br></font>
   <br>E-mail:</font> <input type='text' name='email' size='20'><br>Username:<input type='text' name='user' size='20'><br><input type='submit' name='submit' value='submit'></form>
   <br><center>This will create a new random password, <br>then will send that password to your inbox</center></td></tr></table><br>







