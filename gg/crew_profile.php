<?php session_start();
include_once"includes/db_connect.php";
include_once"includes/functions.php";
logincheck();
$username=$_SESSION['username'];

$query=mysql_query("SELECT * FROM users WHERE username='$username'");
$fetch=mysql_fetch_object($query);
$crew=mysql_fetch_object(mysql_query("SELECT * FROM crews WHERE name='$fetch->crew'"));

if ($fetch->crew == $crew->name  && strtolower($crew->rhm) == strtolower($username) ||  strtolower($crew->owner) == strtolower($username)){
////////////////////////////////////////////////////////////////////
if (strip_tags($_POST['rec_button'])){
$rec= strip_tags($_POST['rec']);
if ($rec == "1" || $rec == "2"){
mysql_query("UPDATE crews SET recruiting='$rec' WHERE id='$crew->id'");
echo "Recruitment status changed";
}}
////////////////////////////////////////////////////////////////////
//////////////////////////////////
if (strip_tags($_POST['music_button']) && strip_tags($_POST['profile_music'])){
$profile_music= strip_tags($_POST['profile_music']);
mysql_query("UPDATE crews SET music='$profile_music' WHERE id='$crew->id'");
echo "Crew profile music changed";
}
//////////////////////////////////////

//////////////////////////////////
if (strip_tags($_POST['pic_button']) && strip_tags($_POST['profile_pic'])){
$profile_pic= strip_tags($_POST['profile_pic']);
mysql_query("UPDATE crews SET picture='$profile_pic' WHERE id='$crew->id'");
echo "Crew profile picture changed.";
}
//////////////////////////////////////

//////////////////////////////////
if (strip_tags($_POST['profile_button']) && strip_tags($_POST['profile_quote'])){
$profile_quote= strip_tags($_POST['profile_quote']);
mysql_query("UPDATE crews SET quote='$profile_quote' WHERE id='$crew->id'");
echo "Crew quote changed";
}
//////////////////////////////////////



?><link rel=stylesheet href=includes/in.css type=text/css>
<form name="form1" method="post" action="">

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="3">
  <tr> 
    <td width="51%"><table width="100%" border="1" cellspacing="0" cellpadding="0" class=thinline rules=none >
        <tr> 
          <td class="header"><center>
              Recruitment </center></td>
        </tr>
        <tr> 
          <td><table width="100%" border="0" cellspacing="3" cellpadding="0">
              <tr> 
                <td width="8%"><input type="radio" name="rec" value="1"> 
                </td>
                <td width="92%">Recruiting </td>
              </tr>
              <tr> 
                <td><input type="radio" name="rec" value="2"></td>
                <td>Not Recruting</td>
              </tr>
              <tr> 
                <td colspan="2"><div align="right"> 
                    <input name="rec_button" type="submit" id="rec_button" value="Change">
                  </div></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
    <td width="49%"><table width="100%" border="1" cellspacing="0" cellpadding="0" class=thinline rules=none >
        <tr> 
          <td class="header"><center>
              Music </center></td>
        </tr>
        <tr> 
          <td><table width="100%" border="0" cellspacing="3" cellpadding="0">
              <tr> 
                <td width="37%">Current music</td>
                <td width="63%">&nbsp;</td>
              </tr>
              <tr> 
                <td>Change music</td>
                <td><input name="profile_music" type="text" id="profile_music"></td>
              </tr>
              <tr> 
                <td colspan="2"><div align="right"> 
                    <input name="music_button" type="submit" id="music_button" value="Change">
                  </div></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
  <tr> 
    <td><table width="100%" border="1" cellspacing="0" cellpadding="0" class=thinline rules=none >
        <tr> 
          <td class="header"><center>
              MISC </center></td>
        </tr>
        <tr> 
          <td><table width="100%" border="0" cellspacing="3" cellpadding="0">
              <tr> 
                <td width="43%">COming soon</td>
                <td width="57%">&nbsp;</td>
              </tr>
              <tr> 
                <td>Coming soon</td>
                <td>&nbsp;</td>
              </tr>
              <tr> 
                <td colspan="2"><div align="right"> </div></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
    <td><table width="100%" border="1" cellspacing="0" cellpadding="0" class=thinline rules=none >
        <tr> 
          <td class="header"><center>
              Picture </center></td>
        </tr>
        <tr> 
          <td><table width="100%" border="0" cellspacing="3" cellpadding="0">
              <tr> 
                <td width="43%">Current Picture</td>
                <td width="57%">&nbsp;</td>
              </tr>
              <tr> 
                <td>Change Picture</td>
                <td><input name="profile_pic" type="text" id="profile_pic"></td>
              </tr>
              <tr> 
                <td colspan="2"><div align="right"> 
                    <input name="pic_button" type="submit" id="pic_button" value="Change">
                  </div></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
  <tr> 
    <td colspan="2" ><table width="100%" border="1" cellspacing="0" cellpadding="0" class=thinline rules=none>
        <tr>
          <td height="22" background=<?php echo "$gradient"; ?>><center class=TableHeading>Crew Quote</center></td>
        </tr>
        <tr>
          <td><table width="100%" border="0" cellspacing="3" cellpadding="0"  >
              <tr> 
                <td><div align="center"> 
                    <textarea name=profile_quote cols=56 rows=14 id="profile_quote"></textarea>
                  </div></td>
              </tr>
              <tr> 
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><div align="center">
                    <input name="profile_button" type="submit" id="profile_button" value="Change">
                  </div></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
</table>
<?php
///////TO CHECK IF THERE IN THE CREW AND THERE RHM
}
/////// 
?>

</form>
