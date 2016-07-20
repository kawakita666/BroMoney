<?php 
session_start();
 include "includes/db_connect.php"; include "includes/functions.php"; logincheck();
$username=$_SESSION['username'];
$query=mysql_query("SELECT * FROM users WHERE username='$username' LIMIT 1");
$fetch=mysql_fetch_object($query);



?>


<html>
<head>
<title>Untitled Document</title>
<link rel=stylesheet href=includes/in.css type=text/css>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<form name="form1" method="post" action="">
  <table width="80%"  border="1" align="center"  cellpadding="2" cellspacing="0" class="thinline" bordercolor=black>
    <tr> 
      <td colspan="2" background="includes/grad.jpg"><center class=bold>
          Search </center></td>
    </tr>
    <tr bgcolor=#999999> 
      <td colspan="2" class=tip><div align="center"></div></td>
    </tr>
    <tr> 
      <td width="50%">Status: <select name="user_status" id="select">
          <option value="Both">Both</option>
          <option value="Alive">Alive</option>
          <option value="Dead">Dead</option>
        </select>
        Username: 
        <input name="user_username" type="text" id="user_username2"></td>
      <td width="50%"><input name="user_button" type="submit" id="user_button6" value="Search"></td>
    </tr>
    <?php if (strip_tags($_POST['user_button']) && strip_tags($_POST['user_username']) && strip_tags($_POST['user_status'])){
	   $user_status=strip_tags($_POST['user_status']);
	   $user_username=strip_tags($_POST['user_username']);
	   if ($user_status == "Both"){
	   $query="SELECT * FROM users WHERE username LIKE '%$user_username%'";
	   }elseif ($user_status == "Alive"){
	   	   $query="SELECT * FROM users WHERE username LIKE '%$user_username%' AND status='Alive'";
		}elseif($user_status == "Dead"){
		   $query="SELECT * FROM users WHERE username LIKE '%$user_username%' AND status='Dead'";
      	}
		$result=mysql_query($query);
		$total=mysql_num_rows($result);
		echo "<tr bgcolor=white><td class=tip>Username</td><td class=tip>Crew</td></tr>";
		if ($total == "0"){ echo "<tr> <td colspan=2><center><b>No results found.</center></b></td></tr>"; }
		while($a=mysql_fetch_object($result)){
		if ($a->crew=="0"){ $crew="None"; }else{ $crew=$a->crew; }
		echo "<tr> 
          <td><a href='profile.php?viewuser=$a->username'>$a->username</a></td><td>$crew</td>
        </tr>
		";
		
	   }
	   }
	   ?>
  </table>
</form>
</body>
</html>
