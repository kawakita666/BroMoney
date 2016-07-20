<?php session_start(); include_once"includes/db_connect.php"; include_once"includes/functions.php"; logincheck();
$username=$_SESSION['username'];
$query=mysql_query("SELECT * FROM users WHERE username='$username'");
$fetch=mysql_fetch_object($query);

if ($fetch->crew == "0"){

$size=strip_tags($_POST['size']);
$name=strip_tags($_POST['name']);
if (strip_tags($_POST['submit']) && $size == "1" || $size=="2" || $size=="3" || $size=="4" || $size=="5" && strip_tags($_POST['name'])){
if (!$name){
echo "Fill in a crew name";
exit();
}
$count=mysql_num_rows(mysql_query("SELECT * FROM crews"));
if ($count >= "21"){
echo "There is already 20 crews, so there is not enough space for yours.";

}else{

if ($size == "1"){
$price="5000000";
$size_p="5";
}elseif ($size == "2"){
$price="10000000";
$size_p="25";
}elseif($size == "3"){
$price="20000000";
$size_p="100";
}elseif($size == "4"){
$price="30000000";
$size_p="200";
}elseif($size == "5"){
$price="40000000";
$size_p="300";
}


if ($fetch->rank == "Scum" || $fetch->rank == "Wonnabe" || $fetch->rank == "Goon"){
echo "You need to be atleast Hired Thug to create a crew.";
}else{


if ($price > $fetch->money){
echo "You dont have enough money";
}elseif ($price <= $fetch->money){


$he = mysql_num_rows(mysql_query("SELECT * FROM crews WHERE name='$name'"));
if ($he !="0"){
echo "Name is taken";
}elseif($he =="0"){

$nmoney = $fetch->money-$price;
mysql_query("UPDATE users SET money='$nmoney',crew='$name' WHERE username='$username'");
mysql_query("INSERT INTO `crews` ( `id` , `owner` , `size`,`name` )
VALUES (
'', '$username', '$size_p','$name'
)");
echo "Your crew has been created please select YOUR CREW from the menu";
}
}}}}
?>
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel=stylesheet href=includes/in.css type=text/css>
</head>

<body>
<form name="form1" method="post" action="">
  <table class=thinline width="64%" border="1" align="center" cellpadding="2" cellspacing="0" bordercolor=black>
    <tr>
      <td colspan="2" background="includes/grad.jpg"><center>
          Crew</center></td>
    </tr>
    <tr bgcolor=black>
      <td class=tip><div align="center">Crew size</div></td>
      <td class=tip><div align="center">Price</div></td>
    </tr>
    <tr>
      <td width="50%" height="21"> <input name="size" type="radio" value="1" checked>
        5 members</td>
      <td width="50%">&pound;5,000,000</td>
    </tr>
    <tr>
      <td><input type="radio" name="size" value="2">
        25 members</td>
      <td>&pound;10,000,000</td>
    </tr>
    <tr>
      <td><input type="radio" name="size" value="3">
        100 members</td>
      <td>&pound;20,000,000</td>
    </tr>
    <tr>
      <td><input type="radio" name="size" value="4">
        200 members</td>
      <td>&pound;30,000,000</td>
    </tr>
    <tr>
      <td><input type="radio" name="size" value="5">
        300 members</td>
      <td>&pound;40,000,000</td>
    </tr>
    <tr>
      <td>Crew name:</td>
      <td><input name="name" type="text" id="name" size="20" maxlength="60"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="submit" type="submit" id="submit3" value="Submit"></td>
    </tr>
  </table>
</form>
</body>
</html>
<?



}elseif($fetch->crew != "0"){


include_once"crew_index.php";

exit();



}
?>