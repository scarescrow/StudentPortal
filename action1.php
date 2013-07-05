<html>
<head>
<title>Action</title>
<style type="text/css">
#pos
{
  padding-left:300px;
}  
</style>
</head>
<body>
<center><img src="images/logo.jpg"></center>
<br><br><br><br><br>
<?php

include "connection.php";

$action=$_POST['action'];
$session=$_POST['session'];
$user=$_POST['user'];
$pass=$_POST['pass'];

if ($session!=1)
{

?>  

You Are Not Logged In!!....

<?php
}
else
{
if($action==1)
{
$query="SELECT * FROM student_details";
$result=mysql_query($query);
$num=mysql_numrows($result);
$i=0;

?>

<table border=1 cellspacing=1 cellpadding=2><tr>
<th>S.No.</th><th>Name</th><th>Enrollment No.</th><th>Father's Name</th><th>Mother's Name</th><th>Mobile No.</th>
<th>Photo</th></tr>
<?php

while($i<$num)
{
  $f1=mysql_result($result,$i,"Name");
  $f2=mysql_result($result,$i,"Enrollment_No");
  $f3=mysql_result($result,$i,"Father_Name");
  $f4=mysql_result($result,$i,"Mother_Name");
  $f5=mysql_result($result,$i,"Mobile");
  $f6=mysql_result($result,$i,"Photo");

?>
<tr align=center>
<td><?php echo $i+1; ?></td>
<td><?php echo $f1; ?></td>
<td><?php echo $f2; ?></td>
<td><?php echo $f3; ?></td>
<td><?php echo $f4; ?></td>
<td><?php echo $f5; ?></td>
<td><a href=<?php echo $f6; ?> target="_blank"><img src=<?php echo $f6; ?> width=30%></a></td>  
</tr>
<?php
$i++;
}
}
else if($action==2)
{
?>
<form method=post action=record.php>
<input type=hidden name=session value=<?php echo $session; ?>>
<input type=hidden name=user value=<?php echo $user; ?>>
<input type=hidden name=pass value=<?php echo $pass; ?>>
Name : <input type=text name=name><br><br>
Enrollment No. <input type=text name=no><br><br>
Father's Name : <input type=text name=fname><br><br>
Mother's Name : <input type=text name=mname><br><br>
Mobile No. : <input type=text name=mobile><br><br>
Photo URL : <input type=text name=photo><br><br>
Username : <input type=text name=usern><br><br>
Password : <input type=password name=passw><br><br>
Confirm Password <input type=password name=cpass><br><br><br>
<input type=submit value=Submit>
</form>
<?php
}
else if($action==3)
{
$query="SELECT * FROM test_marks";
$result=mysql_query($query);
$num=mysql_numrows($result);
?>
<table border=1 cellspacing=1 cellpadding=2>
<tr><th>S.No.</th>
<th>Name</th>
<th>Enrollment No.</th>
<th>Test 1</th>
<th>Test 2</th>
<th>Test 3</th>
<th>Test 4</th>
<th>Test 5</th>
<th>Test 6</th>
<th>Test 7</th>
<th>Test 8</th>
<th>Test 9</th>
<th>Test 10</th>
<th>Remarks</th></tr>
<?php
$i=0;
while($i<$num)
{
  $f[0]=mysql_result($result,$i,"Name");
  $f[1]=mysql_result($result,$i,"Enrollment_No");
  $f[2]=mysql_result($result,$i,"Test_1");
  $f[3]=mysql_result($result,$i,"Test_2");
  $f[4]=mysql_result($result,$i,"Test_3");
  $f[5]=mysql_result($result,$i,"Test_4");
  $f[6]=mysql_result($result,$i,"Test_5");
  $f[7]=mysql_result($result,$i,"Test_6");
  $f[8]=mysql_result($result,$i,"Test_7");
  $f[9]=mysql_result($result,$i,"Test_8");
  $f[10]=mysql_result($result,$i,"Test_9");
  $f[11]=mysql_result($result,$i,"Test_10");
  $f[12]=mysql_result($result,$i,"Remarks");
  for($j=0;$j<13;$j++)
  {
    if($f[$j]==NULL)
	$f[$j]="Not Declared";
  } 	
?>
<tr align=center>
<td><?php echo $i+1; ?></td>
<td><?php echo $f[0]; ?></td>
<td><?php echo $f[1]; ?></td>
<td><?php echo $f[2]; ?></td>
<td><?php echo $f[3]; ?></td>
<td><?php echo $f[4]; ?></td>
<td><?php echo $f[5]; ?></td>
<td><?php echo $f[6]; ?></td>
<td><?php echo $f[7]; ?></td>
<td><?php echo $f[8]; ?></td>
<td><?php echo $f[9]; ?></td>
<td><?php echo $f[10]; ?></td>
<td><?php echo $f[11]; ?></td>
<td><?php echo $f[12]; ?></td>
</tr>
<?php
$i++;
}
}
else if ($action==4)
{
?>
<form method=post action="inmarks.php">
<font size=+1>
<input type=hidden name=user value=<?php echo $user; ?>>
<input type=hidden name=pass value=<?php echo $pass; ?>>
<input type=hidden name=session value=<?php echo $session; ?>>
Test No. : <select name=test><option value="Test_1">Test 1</option><option value="Test_2">Test 2</option>
<option value="Test_3">Test 3</option><option value="Test_4">Test 4</option>
<option value="Test_5">Test 5</option><option value="Test_6">Test 6</option>
<option value="Test_7">Test 7</option><option value="Test_8">Test 8</option>
<option value="Test_9">Test 9</option><option value="Test_10">Test 10</option></select><br><br>
Test Out Of : <input type=text name=total><br><br><br>
Marks Secured By : (If Absent, Write 'A') <br><br><br>
<ul><li>Abhimanyu Karandikar : <input type=text name=m[0]> Remarks: <input type=text name=r[0]><br><br>
<li>Abhishek Kumar : <input type=text name=m[1]> Remarks: <input type=text name=r[1]><br><br>
<li>Arjun Garg : <input type=text name=m[2]> Remarks: <input type=text name=r[2]><br><br>
<li>Chetan Dhagarra : <input type=text name=m[3]> Remarks: <input type=text name=r[3]><br><br>
<li>D. Koteshwar Rao : <input type=text name=m[4]> Remarks: <input type=text name=r[4]><br><br>
<li>Gaurav Seth : <input type=text name=m[5]> Remarks: <input type=text name=r[5]><br><br>
<li>Mehul Chauhan : <input type=text name=m[6]> Remarks: <input type=text name=r[6]><br><br>
<li>Sagnik Sinha Roy : <input type=text name=m[7]> Remarks: <input type=text name=r[7]><br><br><br><br>
<input type=submit value=Go>
</form>
<?php
}
else if ($action==5)
{
$query="SELECT * FROM attendance";
$result=mysql_query($query);
$num=mysql_numrows($result);
?>
<table border=1 cellspacing=1 cellpadding=2 align=center>
<tr><th>S.No.</th>
<th>Date</th>
<th>Abhimanyu</th>
<th>Abhishek</th>
<th>Arjun</th>
<th>Chetan</th>
<th>Koteshwar</th>
<th>Gaurav</th>
<th>Mehul</th>
<th>Sagnik</th>
<?php
$qp1="SELECT count('Abhimanyu') FROM attendance WHERE Abhimanyu='P'" or die(mysql_error());
$qp2="SELECT count('Abhishek') FROM attendance WHERE Abhishek='P'" or die(mysql_error());
$qp3="SELECT count('Arjun') FROM attendance WHERE Arjun='P'" or die(mysql_error());
$qp4="SELECT count('Chetan') FROM attendance WHERE Chetan='P'" or die(mysql_error());
$qp5="SELECT count('Koteshwar') FROM attendance WHERE Koteshwar='P'" or die(mysql_error());
$qp6="SELECT count('Gaurav') FROM attendance WHERE Gaurav='P'" or die(mysql_error());
$qp7="SELECT count('Mehul') FROM attendance WHERE Mehul='P'" or die(mysql_error());
$qp8="SELECT count('Sagnik') FROM attendance WHERE Sagnik='P'" or die(mysql_error());
$rp1=mysql_query($qp1) or die(mysql_error());
$rp2=mysql_query($qp2) or die(mysql_error());
$rp3=mysql_query($qp3) or die(mysql_error());
$rp4=mysql_query($qp4) or die(mysql_error());
$rp5=mysql_query($qp5) or die(mysql_error());
$rp6=mysql_query($qp6) or die(mysql_error());
$rp7=mysql_query($qp7) or die(mysql_error());
$rp8=mysql_query($qp8) or die(mysql_error());
$p1=mysql_result($rp1,0);
$p2=mysql_result($rp2,0);
$p3=mysql_result($rp3,0);
$p4=mysql_result($rp4,0);
$p5=mysql_result($rp5,0);
$p6=mysql_result($rp6,0);
$p7=mysql_result($rp7,0);
$p8=mysql_result($rp8,0);
$i=0;
while($i<$num)
{
  $f1=mysql_result($result,$i,"Date");
  $f2=mysql_result($result,$i,"Abhimanyu");
  $f3=mysql_result($result,$i,"Abhishek");
  $f4=mysql_result($result,$i,"Arjun");
  $f5=mysql_result($result,$i,"Chetan");
  $f6=mysql_result($result,$i,"Koteshwar");
  $f7=mysql_result($result,$i,"Gaurav");
  $f8=mysql_result($result,$i,"Mehul");
  $f9=mysql_result($result,$i,"Sagnik");
?>
<tr align=center>
<td><?php echo $i+1; ?></td>
<td><?php echo $f1; ?></td>
<td><?php echo $f2; ?></td>
<td><?php echo $f3; ?></td>
<td><?php echo $f4; ?></td>
<td><?php echo $f5; ?></td>
<td><?php echo $f6; ?></td>
<td><?php echo $f7; ?></td>
<td><?php echo $f8; ?></td>
<td><?php echo $f9; ?></td>
</tr>
<?php
if($i==($num-1))
  {
?>
<tr align=center>
<td><b>Total :</td>
<td></td>
<td><?php echo $p1; ?>/<?php echo $num; ?></td>
<td><?php echo $p2; ?>/<?php echo $num; ?></td>
<td><?php echo $p3; ?>/<?php echo $num; ?></td>
<td><?php echo $p4; ?>/<?php echo $num; ?></td>
<td><?php echo $p5; ?>/<?php echo $num; ?></td>
<td><?php echo $p6; ?>/<?php echo $num; ?></td>
<td><?php echo $p7; ?>/<?php echo $num; ?></td>
<td><?php echo $p8; ?>/<?php echo $num; ?></td>
</tr>
<?php
  }
$i++;
}
}
else if ($action==6)
{
?>
<form method=post action="attend.php">
<input type=hidden name=user value=<?php echo $user; ?>>
<input type=hidden name=pass value=<?php echo $pass; ?>>
<input type=hidden name=session value=<?php echo $session; ?>>
<font size=+2>
Date : <input type=text name=date>
<br><br><br><br><br>
Tick Those Who Are Absent :
<br><br><br>
</font><font size=+1>
<input type=checkbox name=a[0] value='A'> Abhimanyu Karandikar<br><br>
<input type=checkbox name=a[1] value='A'> Abhishek Kumar<br><br>
<input type=checkbox name=a[2] value='A'> Arjun Garg<br><br>
<input type=checkbox name=a[3] value='A'> Chetan Dhagarra<br><br>
<input type=checkbox name=a[4] value='A'> D. Koteshwar Rao<br><br>
<input type=checkbox name=a[5] value='A'> Gaurav Seth<br><br>
<input type=checkbox name=a[6] value='A'> Mehul Chauhan<br><br>
<input type=checkbox name=a[7] value='A'> Sagnik Sinha Roy<br><br><br><br>
<input type=submit value=Go>
</form>
<?php
}
}
?>
</body>
</html>
  