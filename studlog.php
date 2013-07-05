<html>
<head>
<style type="text/css">
#align
{
  padding-left:1000px;
}
a:visited,a:link
{
  text-decoration:none;
  color:blue;
}
a:hover,a:active
{
  color:purple;
}  
</style>  
</head>
<body>
<center><img src="images/logo.jpg"></center>
<span id=align><font size=+1><a href=adlog.html>Logout</a></font></span>
<?php
include "connection.php";
error_reporting(0);
$user=$_POST['user'];
$pass=$_POST['pass'];
$pass=md5($pass);

$query="SELECT * FROM student_details WHERE Username='$user' AND Password='$pass'";
$result=mysql_query($query);
$num=mysql_numrows($result);



if($num!=1)
{ 
  echo "Sorry!!..Invalid Username/Password...Please Try Again..";
?>  
<br><br>
<a href="login.html">Back To Login Page</a>

<?php
}
else
{

$i=0;

$f1=mysql_result($result,$i,"Name");
$f2=mysql_result($result,$i,"Enrollment_No");
$f3=mysql_result($result,$i,"Father_Name");
$f4=mysql_result($result,$i,"Mother_Name");
$f5=mysql_result($result,$i,"Mobile");
$f6=mysql_result($result,$i,"Photo");


?>

<br><br><br>
<font size=+3>Student Details :</font>
<br><br><br>
<img src=<?php echo $f6; ?> width=20%>
<br><br><br><br>
<font size=+1>
Name : <?php echo $f1; ?><span>Enrollment No. : <?php echo $f2; ?></span><br><br>
Father's Name : <?php echo $f3; ?><span>Mother's Name : <?php echo $f4; ?></span><br><br>
Mobile : <?php echo $f5; ?> 
<br><br><br>
</font>
<hr color=red>
<font size=+3>Attendance</font>
<?php

$qp="SELECT count('$user') FROM attendance WHERE $user='P'" or die(mysql_error());
$qt="SELECT count('$user') FROM attendance";
$qd="SELECT Date FROM attendance WHERE $user='A'";
$rp=mysql_query($qp) or die(mysql_error());
$rt=mysql_query($qt) or die(mysql_error());
$rd=mysql_query($qd) or die(mysql_error());
$i=0;
$p=mysql_result($rp,$i);
$t=mysql_result($rt,$i);
$num=mysql_numrows($rd);
mysql_close($con);
?>
<br><br><br>
<font size=+1>Your Attendance Is : <?php echo $p; ?>/<?php echo $t ?>
<br><br>
You Were Absent On : 
<?php

$i=0;
while($i<$num)
{
$d=mysql_result($rd,$i) or die(mysql_error());
echo $d;
?>
<?php

$i++;
echo ",";
}
echo " and present on the remaining days."
?>
<br><br><br>
<hr color=red>
<form method=post action=marks.php>
<font size=+3>View Marks</font><br><br><br>
<font size=+1>
<input type=hidden name=roll value=<?php echo $f2; ?>>
<input type=radio name=test value="Test_1">Test 1 on 21 March '12<br>
<input type=radio name=test value="Test_2">Test 2 on 03 July '12<br>
<input type=radio name=test value="Test_3">Test 3 on 14 Aug '12<br>
<input type=radio name=test value="Test_4">Test 4 on 2 Sep'12<br>
<input type=radio name=test value="Test_5">Test 5 on 14 Sep '12<br>
<input type=radio name=test value="Test_6">Test 6 on 18 Oct '12<br>
<input type=radio name=test value="Test_7">Test 7 on 21 Oct '12<br>
<input type=radio name=test value="Test_8">Test 8 on 13 Nov '12<br>
<input type=radio name=test value="Test_9">Test 9 on 28 Dec '12<br>
<input type=radio name=test value="Test_10">Test 10 on 29 Dec '12<br>
</font>
<br><br><br>
<input type=submit value=Go>
</form>
<br><br><br>
<hr color=red>
</font>
<?php
}
?>
</body>
</html>

   
   