<?
session_start();
include_once "includes/db_connect.php";
include_once"includes/functions.php";
logincheck();
$username=$_SESSION['username'];
$query=mysql_query("SELECT * FROM users WHERE username='$username'");
$fetch=mysql_fetch_object($query);
$query1=mysql_query("SELECT * FROM user_info WHERE username='$username'");
$user=mysql_fetch_object($query1);



if (($_POST['change_pass']) && ($_POST['current_pass']) && ($_POST['new_pass']) && ($_POST['repeat_pass'])){

$current_pass=$_POST['current_pass'];
$new_pass=$_POST['new_pass'];
$repeat_pass=$_POST['repeat_pass'];
///STRIP
$current_pass = strip_tags($current_pass);
$new_pass=strip_tags($new_pass);
$repeat_pass=strip_tags($repeat_pass);



///check if they match

if ($current_pass == $fetch->password && $new_pass == $repeat_pass){
mysql_query("UPDATE users SET password='$new_pass' WHERE username='$username'");
echo "Your password has been changed!";
session_destroy();
echo "<script language=\"javascript\">
top.document.location.reload();
</script>";

}else{
echo "Your password could NOT be changed!";
}
}
if (($_POST['change_quote']) && ($_POST['quote'])){
$quote=strip_tags($_POST['quote']);

mysql_query("UPDATE users SET quote='$quote' WHERE username='$username'");
echo "Your quote has been updated";
}
if (($_POST['change_image']) && strip_tags($_POST['image'])){

$image=strip_tags($_POST['image']);

mysql_query("UPDATE users SET image='$image' WHERE username='$username'");
echo "Your image has been updated";
}
if (strip_tags($_POST['change_music']) && strip_tags($_POST['music'])){
$music=strip_tags($_POST['music']);

mysql_query("UPDATE users SET music='$music' WHERE username='$username'");
echo "Music has been changed";
}


if (strip_tags($_POST['lang_button']) && strip_tags($_POST['lang'])){
$lang=strip_tags($_POST['lang']);
if ($lang == "1"){ $new_lang="English"; }else{ $new_lang="Dutch"; }

mysql_query("UPDATE user_info SET lang='$new_lang' WHERE username='$username'");
echo "Language settings updated.";


}
if (strip_tags($_POST['respect_button']) && strip_tags($_POST['respect_amount']) && strip_tags($_POST['respect_an']) && strip_tags($_POST['respect_username'])){
$respect_amount=addslashes(strip_tags(intval($_POST['respect_amount'])));
$respect_an=strip_tags($_POST['respect_an']);


$respect_username=addslashes(strip_tags($_POST['respect_username']));

$respect_type=strip_tags($_POST['respect_type']);

	if ($respect_amount == 0 || !$respect_amount || ereg('[^0-9]',$respect_amount)){
	print "Invalid amount of respect points.";
	
}elseif ($respect_amount != 0 || $respect_amount || !ereg('[^0-9]',$respect_amount)){

if (strtolower($username) == strtolower($respect_username)){
echo "You cannot send respect to yourself.";
}elseif (strtolower($username) != strtolower($respect_username)){

$check=mysql_num_rows(mysql_query("SELECT * FROM users WHERE username='$respect_username'"));
if ($check == "0"){
echo "No such user.";
}elseif ($check != "0"){


if ($user->respect < $respect_amount){
echo "You dont have enough resepect points to send.";
}elseif ($user->respect >= $respect_amount){

$new_points=$user->respect - $respect_amount;
mysql_query("UPDATE user_info SET respect='$new_points' WHERE username='$username'");

if ($respect_type == "1"){
mysql_query("UPDATE user_info SET respect_rec=respect_rec+$respect_amount WHERE username='$respect_username'");
}else{
mysql_query("UPDATE user_info SET respect_rec=respect_rec-$respect_amount WHERE username='$respect_username'");


}
echo "Respect points sent.";


if ($respect_an == "1"){
mysql_query("INSERT INTO `inbox` ( `id` , `to` , `from` , `message` , `date` , `read` , `saved` , `event_id` , `witness` , `witness_per` ) 
VALUES (
'', '$respect_username', '$respect_username', '$username sent you $respect_amount respect points!', '$date', '0', '0', '0', '0', ''
)");
}else{
mysql_query("INSERT INTO `inbox` ( `id` , `to` , `from` , `message` , `date` , `read` , `saved` , `event_id` , `witness` , `witness_per` ) 
VALUES (
'', '$respect_username', '$respect_username', 'Someone sent you $respect_amount respect points!', '$date', '0', '0', '0', '0', ''
)");
}



}}}}}


if ($fetch->rank == "Paper Kid"){ $new_res="1"; }elseif($fetch->rank == "Theif"){  $new_res="2"; }elseif($fetch->rank == "Robber"){  $new_res="3"; }elseif($fetch->rank == "Gangster"){  $new_res="4";    }elseif($fetch->rank == "Associate"){  $new_res="5";   }elseif($fetch->rank == "Piciotto"){  $new_res="6";  }elseif($fetch->rank == "Made Man"){  $new_res="7";
}elseif($fetch->rank == "Capo"){  $new_res="8"; }elseif($fetch->rank == "Consigliere"){  $new_res="9"; }elseif($fetch->rank == "Underboss"){  $new_res="10"; }elseif($fetch->rank == "Druglord"){  $new_res="11"; }elseif($fetch->rank == "Godfather"){  $new_res="12"; }

 
if (strip_tags($_POST['backfire_amount']) && strip_tags($_POST['backfire_button'])){
$backfire_amount=strip_tags(intval($_POST['backfire_amount']));

if ($backfire_amount == 0 || !$backfire_amount || ereg('[^0-9]',$backfire_amount)){
	print "Invalid amount of respect points.";
	
}elseif ($backfire_amount != 0 || $backfire_amount || !ereg('[^0-9]',$backfire_amount)){

if ($backfire_amount > $fetch->bullets){ echo "You dont have that many bullets."; 
}elseif ($backfire_amount <= $fetch->bullets){
$new_bullets=$fetch->bullets - $backfire_amount;
mysql_query("UPDATE users SET bullets='$new_bullets', backfire='$backfire_amount' WHERE username='$username'");


echo "Backfire updated.";
}}}


if (strip_tags($_POST['status_button']) && strip_tags($_POST['status'])){
$status=strip_tags($_POST['status']);
if ($status == "1"){
mysql_query("UPDATE users SET bar='1' WHERE username='$username'");
echo "<script language=\"javascript\">
top.document.location.reload();
</script>";
}else{
mysql_query("UPDATE users SET bar='2' WHERE username='$username'");
echo "<script language=\"javascript\">
top.document.location.reload();
</script>";
}

}



?><html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="javascript" type="text/javascript">
function AddEmoticon(text) {
	var txtarea = document.form.quote;
	text = ' ' + text + ' ';
	if (txtarea.createTextRange && txtarea.caretPos) {
		var caretPos = txtarea.caretPos;
		caretPos.text = caretPos.text.charAt(caretPos.text.length - 1) == ' ' ? caretPos.text + text + ' ' : caretPos.text + text;
		txtarea.focus();
	} else {
		txtarea.value  += text;
		txtarea.focus();
	}
}
</script>
</head>

<body>
<form name="form" method="post" action="">
 <table width="84%" border="0" align="center" cellpadding="0" cellspacing="2" >
    <!--DWLayoutTable-->
    <tr> 
      <td width="50%" height="134" valign="top"><table width="100%" height="79" border="1" cellpadding="2" cellspacing="0" bordercolor="#000000" class=thinline>
          <!--DWLayoutTable-->
          <tr > 
            <td colspan="2" background="includes/grad.jpg"> <div align="center" class=bold>Change 
                password</div></td>
          </tr>
          <tr> 
            <td  height="25">Old password: </td>
            <td ><input name="current_pass" type="text" id="current_pass2" size="20"></td>
          </tr>
          <tr> 
            <td height="13">New password:</td>
            <td height="13"> <input name="new_pass" type="text" id="new_pass2" size="20"></td>
          </tr>
          <tr> 
            <td height="6">Confirm password:</td>
            <td height="6"><input name="repeat_pass" type="text" id="repeat_pass2" size="20"></td>
          </tr>
          <tr> 
            <td height="7">&nbsp;</td>
            <td height="7"><input name="change_pass" type="submit" id="change_pass2" value="Change"></td>
          </tr>
        </table></td>
<tr> 
      <td height="66" valign="top"><table width="100%" border="1" cellpadding="2" cellspacing="0" bordercolor="black" class=thinline>
          <!--DWLayoutTable-->
          <tr > 
            <td background="includes/grad.jpg" colspan="2"> <div align="center">Profile 
                music</div></td>
          </tr>
          <tr> 
            <td  height="25">Music url:</td>
            <td ><input name="music" type="text" id="music" value="<? echo "$fetch->music"; ?>"></td>
          </tr>
          <tr> 
            <td height="29" colspan="2"> <div align="center"> 
                <input name="change_music" type="submit" id="change_music" value="Change">
              </div></td>
          </tr>
        </table></td>
    </tr>
<tr>  
            <td colspan="2" background="includes/grad.jpg"><div align="center">Your 
                quote</div></td>
          </tr>
          <tr> 
            <td  height="5"><!--DWLayoutEmptyCell-->&nbsp;</td>
            <td ><textarea name="quote" cols="80" rows="10" id="textarea"><?php echo "$fetch->quote"; ?></textarea></td>
          </tr>
          <tr> 
            <td  height="5">&nbsp;</td>
            <td><input name="change_quote" type="submit" id="change_quote" value="Submit"></td>
          </tr>
        </table></td>
    </tr>
  </table>
</form>
</body>
</html>