<?php
session_start();
include_once"includes/db_connect.php";
include_once"includes/functions.php";
logincheck();
echo "<link href=includes/in.css rel=stylesheet type=text/css>";

function script_check($file){
global $gradient;
global $td_bg;
global $td_border;
$username=$_SESSION['username'];
$fetch=mysql_fetch_object(mysql_query("SELECT * FROM users WHERE username='$username'"));

if ($fetch->last_script_check < time()){

if (strip_tags($_POST['script_check']) && strip_tags($_POST['subby'])){
if (strip_tags($_POST['script_check']) != $fetch->ver_code){
$error="1";
}else{
$time=time()+(60*5);
mysql_query("UPDATE users SET last_script_check='$time' WHERE username='$username'");
echo "Correct code!";
echo"<SCRIPT LANGUAGE='JavaScript'>
history.go(-1)

</script>";
}
}


echo "
<form name='form1' method='post' action=''>
  <table width='67%' border='1' align='center' cellpadding='0' cellspacing='0' class=thinline rules=none>
    <tr> 
      <td class=header><center>
         Script check </center></td>
    </tr>
	<tr bgcolor=black><td height=1 colspan=3></td></tr>
    <tr> 
      <td><table width='100%' border='0' cellspacing='3' cellpadding='0'>
          <tr> 
            <td colspan='2'><div align='center'>Please type in the code you see 
                below in the text box. You will then be redirected to the page 
                specified.<br>
                NOTE: If you get the code wrong more than 3 times you will be 
                put in jail for 5minuites.</div></td>
          </tr>
          <tr> 
            <td colspan='2'><div align='center'><img src='ver.php'></div></td>
          </tr>
          <tr> 
            <td>Code above:</td>
            <td> "; ?>
             <?php if ($error == "1"){ ?>

 <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFCC">
                <tr>
                  <td>
<? }
echo "<input name='script_check' type='text' id='script_check2'>";
                  if ($error == "1"){ echo "*Incorrect code</td>
                </tr>
              </table>";
			  }
			  
			  
			echo "  </td>
          </tr>
          <tr> 
            <td colspan='2'><div align='center'> 
                <input name='subby' type='submit' id='subby' value='Submit Script Check'>
              </div></td>
          </tr>
        </table></td>
    </tr>
  </table>
</form>
";
exit();
}


}

?>