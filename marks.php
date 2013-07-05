<html>
<head>
<title>Marks</title>
</head>
<body>
<center><img src="images/logo.jpg"></center>

<?php

include "connection.php";


$roll=$_POST['roll'];
$test=$_POST['test'];

$query="SELECT $test, Remarks FROM test_marks WHERE Enrollment_No='$roll'";
$result=mysql_query($query);

$i=0;

$f1=mysql_result($result,$i,$test);
$f2=mysql_result($result,$i,"Remarks");

if($f1==NULL)
{
?>
<br><br><br><br><br><br>
<center><font size=+4>This Test Has Not Yet Been Conducted or The Marks Have Not Yet Been Uploaded....
Please Return when the marks have finished uploading.</center></font>
<?
}
else
{
?>
<br><br><br><br><br><br><br>
<font size=+3><center>Your Score In This Test is : <?php echo $f1 ?><br><br>
<br>
Remarks : <?php echo $f2; ?>
</center>
</font>
<?php
}
?>
</body>
</html>
