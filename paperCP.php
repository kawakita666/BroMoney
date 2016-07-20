<?php
session_start();
include_once "includes/db_connect.php";
include_once "includes/functions.php";
logincheck(); echo "$style";

$username=$_SESSION['username'];
$is1 = mysql_query("SELECT DISTINCT edition FROM paper");
$issueto1=mysql_num_rows($is1);

$pick = mysql_query("SELECT MAX(align)AS gay FROM paper WHERE edition='$issueto1' GROUP by align");
$quick=mysql_fetch_object($pick);

if ($fetch->editor == "1"){
$choice=strip_tags($_POST['choice']);
$title=strip_tags($_POST['title']);
$text_field=strip_tags($_POST['text_field']);

if (strip_tags($_POST['text_field']) && strip_tags($_POST['submit_button'])){
$align=strip_tags($_POST['align']);
if ($align == "Left"){
$align="Left";
}elseif ($align == "Right"){
$align="Right";
}

if ($choice == "1"){
$is = mysql_query("SELECT DISTINCT edition FROM paper");
$issueto=mysql_num_rows($is);
mysql_query("INSERT INTO `paper` ( `id` , `edition` , `news` , `title` , `by` , `date`,`align`) 
VALUES (
'', '$issueto', '$text_field', '$title', '$username', '$date','$align'
)");
echo "News added";
}
elseif ($choice == "2"){
$is = mysql_query("SELECT DISTINCT edition FROM paper");
$issueto=mysql_num_rows($is)+1;

mysql_query("INSERT INTO `paper` ( `id` , `edition` , `news` , `title` , `by` , `date`,`align` ) 
VALUES (
'', '$issueto', '$text_field', '$title', '$username', '$date','$align'
)");
echo "Edition and news added!";

}}



?> 
<form name="form1" method="post" action="">
  <table width="68%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="<?php echo "$td_border"; ?>" bgcolor="<?php echo "$td_bg"; ?>">
    <tr> 
      <td height=22 background="<?php echo "$gradient"; ?>"><center class=TableHeading>
          PaperCP </center></td>
    </tr>
    <tr> 
      <td height=21><table width="100%" border="0" cellspacing="3" cellpadding="0">
          <tr> 
            <td width="9%"><input name="choice" type="radio" value="1" checked></td>
            <td width="34%">Latest edition</td>
            <td width="7%"><input type="radio" name="choice" value="2"></td>
            <td width="50%">Newest edition</td>
          </tr>
          <tr> 
            <td colspan="4"><div align="center">Article:</div></td>
          </tr>
          <tr> 
            <td colspan="2">Title:</td>
            <td colspan="2"><input name="title" type="text" id="title"></td>
          </tr>
          <tr> 
            <td colspan="2">Align:</td>
            <td colspan="2"><select name="align" id="align">
                <option value="Right" <?php if($quick->gay == "Left"){ echo "selected"; } ?>>Right</option>
                <option value="Left" <?php if($quick->gay == "Right"){ echo "selected"; } ?>>Left</option>
              </select></td>
          </tr>
          <tr>
            <td colspan="2">&nbsp;</td>
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr> 
            <td colspan="4"><div align="center"> 
                <textarea name="text_field" cols="65" rows="10" id="text_field"></textarea>
              </div></td>
          </tr>
          <tr> 
            <td colspan="4">&nbsp;</td>
          </tr>
          <tr> 
            <td colspan="4"> <div align="center"> 
                <input name="submit_button" type="submit" id="submit_button" value="Submit">
              </div></td>
          </tr>
        </table></td>
    </tr>
  </table>
</form>
<? } ?>






