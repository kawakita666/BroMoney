<?
session_start();
header("Cache-control: private");
include 'includes/db_connect.php';



if (!$_SESSION['username'] || !$_SESSION['email']){
$username = $_POST['username'];
$password = $_POST['password'];
$username = strip_tags($username);
$password = strip_tags($password);
$ip = $REMOTE_ADDR;
$domain = $_SERVER['REMOTE_ADDR'];

$username=strtolower($username);

if((!$username) || (!$password)){
    echo "You have not submitted one or more fields <br />";
}else{



///check INFO
$sql = mysql_query("SELECT * FROM users WHERE username='$username' AND password='$password' AND activated='1' LIMIT 1");
$login_check = mysql_num_rows($sql);


///other
if ($login_check > '1'){





        ini_set(session.cookie_lifetime, "3600");
        session_register('username');
        $_SESSION['username'] = $username;
        session_register('email_address');
        $_SESSION['email_address'] = $email_address;






         $timestamp = time();
$timeout = $timestamp-$timeoutseconds;
$cool = gmdate('Y-m-d h:i:s');
mysql_query("UPDATE users SET lastlogin='$cool' WHERE username='$username'");
mysql_query("UPDATE users SET online='$timestamp' WHERE username='$username'");

mysql_query("UPDATE users SET ip='$domain' WHERE username='$username'");



        ?>
<meta http-equiv="Refresh" content=0;url=mb.php>
<?

} else {
    echo "wrong username/password combination or account not yet activated<br />
    <br />";
    include 'login.php';
}}}
?>