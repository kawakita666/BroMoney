<?php 
session_start(); 
header("Cache-control: private"); 
include "includes/db_connect.php";
include "includes/functions.php";
echo "$style";
logincheck();
$username = $_SESSION['username'];
$del = strip_tags($_GET[dell_t]);
$clse = strip_tags($_GET[clse]);
$danswer = strip_tags($_POST[Danswer]);

?>
<SCRIPT>
<!--
function click(Item) {
document.getElementById('ticket_id').value = Item;
}
//-->
</SCRIPT>
<?php

if($danswer){
	mysql_query("update ticket set answer='$danswer' where id=$ticket_id");
	print"Ticket #$ticket_id has been edited $danswer!<br>";
}else{
	print"You have to enter an answer!<br>";
}

if($del){
	mysql_query("DELETE FROM ticket WHERE id=$del");
	print"Ticket has been cleared!<br>";
}

if($clse){
	mysql_query("UPDATE ticket SET open=0 WHERE id=$clse");
	print"Ticket has been closed!<br>";
}

$select = mysql_query("SELECT * FROM ticket WHERE open='1'");
while ($i = mysql_fetch_object($select)){

print "
<table width=100%>
  <tr>
    <td width=50%>
    <p align=right>Ticket id:</td>
    <td width=50%><a onclick=click($i->id); href=oeticket.php#>$i->id</a></td>
  </tr>
  <tr>
    <td width=50%>
    <p align=right>User</td>
    <td width=50%>$i->user ($i->started)</td>
  </tr>
  <tr>
    <td width=50%>
    <p align=right>Title:</td>
    <td width=50%>$i->title</td>
  </tr>
  <tr>
    <td width=50%>
    <p align=right>Problem:</td>
    <td width=50%>$i->description</td>
  </tr>
    <tr>
    <td width=50%>
    <p align=right>Answer:</td>
    <td width=50%>$i->answer</td>
  </tr>
    </tr>
    <tr>
    <td width=50%>
    <p align=right>Options:</td>
    <td width=50%><a href=oeticket.php?dell_t=$i->id>Delete ticket!</a><Br>
    <a href=oeticket.php?clse=$i->id>Close ticket!</a></td>
</tr>
</table><hr>";
}

print"
<form method=POST action=oeticket.php>
<table width=100%>
  <tr>
    <td width=50%>
      <tr>
        <td width=50% align=right><font SIZE=2>&nbsp;</font>Ticket #id:</td>
        <td width=50%><input type=text name=ticket_id id=ticket_id size=57></td>
      </tr>
      <tr>
        <td width=50% align=right>Answer (should be a very specific good 
        english written answer)</td>
        <td width=50%><textarea rows=14 name=Danswer cols=48></textarea></td>
      </tr>
    </table>
  <p align=center><input type=submit value=Open ticket name=Send><input type=reset value=Reset name=Reset></p>
</form>";

?>