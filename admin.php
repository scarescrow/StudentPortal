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
<title>Admin</title>
</head>
<body>
<center><img src="images/logo.jpg"></center>
<span id=align><font size=+1><a href=adlog.html>Logout</a></font></span>

<?php

include "connection.php";

$user=$_POST['user'];
$pass=$_POST['pass'];
$pass1=md5($pass);

$query="SELECT * FROM admin WHERE Username='$user' AND Password='$pass1'";
$result=mysql_query($query);
$num=mysql_num_rows($result);
if($num!=1)
{ 
  echo "Sorry!!..Invalid Username/Password...Please Try Again..";
  $session=0;
?>  
<br><br>
<a href="adlog.html">Back To Login Page</a>

<?php
}
else
{
  $session=1;
?>
<form method=post action="action1.php">
<br><br><br><br>
<font size=+3>ACTIONS : </font>
<br><br><br><br>
<input type=hidden name=session value=<?php echo $session; ?>>
<input type=hidden name=user value=<?php echo $user; ?>>
<input type=hidden name=pass value=<?php echo $pass; ?>>
<input type=radio name=action value=1>1. View Student Database<br><br>
<input type=radio name=action value=2>2. Add New Student<br><br>
<input type=radio name=action value=3>3. View Test Scores<br><br>
<input type=radio name=action value=4>4. Add Marks Of A Test<br><br>
<input type=radio name=action value=5>5. View Attendance Of Students<br><br>
<input type=radio name=action value=6>6. Mark Attendance For A Date<br><br><br>
<input type=submit value=Go>
</form>
<br><br><br>
<?php
}
?>
</body>
</html>
