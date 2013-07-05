<html>
<head>
<title>Data Update</title>
<body>
<center><img src="images/logo.jpg"></center>
<br><br><br><br>
<?php

include "connection.php";

$session=$_POST['session'];
$user=$_POST['user'];
$pass=$_POST['pass'];
$name=$_POST['name'];
$no=$_POST['no'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$mobile=$_POST['mobile'];
$photo=$_POST['photo'];
$usern=$_POST['usern'];
$passw=$_POST['passw'];
$cpass=$_POST['cpass'];
if ($session!=1)
{
  echo "Sorry, You are not logged in!!..";
}
else
{  
if($passw!=$cpass)
{
  echo "Passwords Do Not Match!!....";
}
else
{  
$passw=md5($passw);
$query="INSERT INTO student_details SET Name='$name', Enrollment_No='$no', Father_Name='$fname', Mother_Name='$mname', 
Mobile='$mobile', Photo='$photo', Username='$usern', Password='$passw'";

if(!mysql_query($query,$con))
{
	die('Could Not Insert Query In The Record : '.mysql_error());
}
else
{
?>
<br><br><br><br><br>
The Data Has Been Inserted Into The Database....
<br><br><br>
<form method=post action=admin.php>
<input type=hidden name=user value=<?php echo $user; ?>>
<input type=hidden name=pass value=<?php echo $pass; ?>>
<input type=submit value=Back>
</form>
<?php	
}
}
}
?>