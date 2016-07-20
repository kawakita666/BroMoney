<?php
session_start();
include_once "db_connect.php";
include_once"functions.php";
logincheck();
$username=$_SESSION['username'];



$check = mysql_query("SELECT * FROM jail WHERE username='$username'");
$joosters = mysql_fetch_object($check);
$checkifjailed = mysql_num_rows($check);
if ($checkifjailed > '0'){
$check1 = mysql_query("SELECT * FROM users WHERE username='$username'");
$fetch = mysql_fetch_object($check1);



$left = $joosters->time_left - time();
?>



<html>
<?php echo "$style"; ?>
<center>




<p align="center">&nbsp;
<table width="100%" border="0" cellspacing="3" cellpadding="0">
  <tr>
    <td><table width=70% border=1 align="center" cellpadding=0 cellspacing=0  class=thinline rules=none>
        <tr>
          <td height='22' class=header><center>
              Your in jail! </center></td>
        </tr>
        <tr>
          <td align=center><table width="100%" border="0" cellspacing="3" cellpadding="0">
              <tr>
                <td><div align="center">A helpful piece of advice is not to get
                    caught..</div></td>
              </tr>
              <tr>
                <td><div align="center"><img width="340" height="268" src=images/Jail.jpg></div></td>
              </tr>
            </table></td>
  </tr>
  <tr>
    <td><table width=70% border=1 align="center" cellpadding=0 cellspacing=0  class=thinline rules=none>
        <tr>
          <td height='22' class=header><center>
              Other Players In Jail</center></td>
        </tr>
        <tr bgcolor=white>
          <td  class=tip><div align="center">Players In Jail In The Last 60 Seconds</div></td>
        </tr>
        <tr>
          <td> <table width="100%" border="0" cellspacing="3" cellpadding="0">
              <tr>
                <td>
                  <? $query=mysql_query("SELECT * FROM jail WHERE location='$fetch->location'");
while($it = mysql_fetch_object($query)){


echo "<a href='profile.php?viewuser=$it->username'>$it->username</a>,";

}
?>
                </td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
</table>
<p align="center">&nbsp;
<p>

<p>
<?php exit; }  ?>




