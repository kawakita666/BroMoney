<?php
session_start(); 
header("Cache-control: private"); 

include ("../include/sql_connect.php"); 
if (empty($_SESSION['username']) || ($_SESSION['userlevel'] == "0")) {
echo" You do not have the correct permissions to view this page!     "; 
echo "Redirecting...";
echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0; URL=../index.php\">";
exit;
} else 
$id=$_GET['id'];





$info = mysql_query("SELECT * FROM students WHERE student_id='$id'");
$object = mysql_fetch_object($info);
?>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
            </script>
<?

echo "<select size=1 name=REV1 onChange=\"MM_jumpMenu('parent',this,1)\">";
 echo "  <option value='' selected>Review number</option>";
$goodyss = mysql_query("SELECT * FROM student_issues WHERE student_id='$id'");
while($infoss = mysql_fetch_object($goodyss)){
$c++;
  echo "  <option value='?IS=$infoss->issue_id&id=$id'>Issue $c</option>";
}
echo "</select>";



$IS=$_GET['IS'];

$fetch=mysql_fetch_object(mysql_query("SELECT * FROM student_issues WHERE student_id='$id' AND issue_id='$IS'"));
if (!$fetch){
echo "No results found.";
exit();
}

$stud=mysql_fetch_object(mysql_query("SELECT * FROM students WHERE student_id='$id'"));
$tech=mysql_fetch_object(mysql_query("SELECT * FROM teachers WHERE teacher_id='$fetch->teacher_id'"));


?>




<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<div align="center">
  <p><strong>Student problems </strong></p>
  <p>&nbsp;</p>
  <p><strong>Student name:<?php echo "$stud->first_name, $stud->surname"; ?><br>
    Reported by:<?php echo "$tech->first_name, $tech->surname"; ?><br>
    On:<?php echo "$fetch->date"; ?><br>
    Comments:<br><?php echo "$fetch->comments"; ?></strong></p>
</div>
</body>
</html>
