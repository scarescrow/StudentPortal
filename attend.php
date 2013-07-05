<html>
<head>
<title>Attendance</title>
</head>
<body><center><img src="images/logo.jpg"></center>
<br><br><br><br>
<?php
error_reporting(0);
include "connection.php";

$a = array("0" => "P", "1" => "P", "2" => "P", "3" => "P", "4" => "P", "5" => "P", "6" => "P", "7" => "P",);

$user=$_POST['user'];
$pass=$_POST['pass'];
$session=$_POST['session'];
$date=$_POST['date'];
if($session!=1)
{
  echo "You are not logged in..!!";
}
else
{  
$a[0]=$_POST['a']['0'];
$a[1]=$_POST['a']['1'];
$a[2]=$_POST['a']['2'];
$a[3]=$_POST['a']['3'];
$a[4]=$_POST['a']['4'];
$a[5]=$_POST['a']['5'];
$a[6]=$_POST['a']['6'];
$a[7]=$_POST['a']['7'];
for($i=0;$i<8;$i++)
{
  if($a[$i]!='A')
  $a[$i]='P';
}
$query="INSERT INTO attendance SET date='$date',abhimanyu='$a[0]',abhishek='$a[1]',arjun='$a[2]',chetan='$a[3]',
koteshwar='$a[4]',gaurav='$a[5]',mehul='$a[6]',sagnik='$a[7]'";
if(!mysql_query($query,$con))
{
	die('Could Not Insert Query In The Record : '.mysql_error());
}
else
{
?>
<br><br><br><br><br>
The Attendance For <?php echo $date; ?> Has Been Marked....
<br><br><br>
<form method=post action=admin.php>
<input type=hidden name=user value=<?php echo $user; ?>>
<input type=hidden name=pass value=<?php echo $pass; ?>>
<input type=submit value=Back>
</form>
<?php	
}
}
?>
</body>
</html>