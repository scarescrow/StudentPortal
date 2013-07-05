<html>
<head>
<title>Attendance</title>
</head>
<body><center><img src="images/logo.jpg"></center>
<br><br><br><br>
<?php

include "connection.php";

$user=$_POST['user'];
$pass=$_POST['pass'];
$session=$_POST['session'];
$m = array("0" => "", "1" => "", "2" => "", "3" => "", "4" => "", "5" => "", "6" => "", "7" => "",);
$r = array("0" => "", "1" => "", "2" => "", "3" => "", "4" => "", "5" => "", "6" => "", "7" => "",);
if($session!=1)
{
  echo "You are not logged in..!!";
}
else
{  
$test=$_POST['test'];
$total=$_POST['total'];
$m[0]=$_POST['m']['0'];
$m[1]=$_POST['m']['1'];
$m[2]=$_POST['m']['2'];
$m[3]=$_POST['m']['3'];
$m[4]=$_POST['m']['4'];
$m[5]=$_POST['m']['5'];
$m[6]=$_POST['m']['6'];
$m[7]=$_POST['m']['7'];

$r[0]=$_POST['r']['0'];
$r[1]=$_POST['r']['1'];
$r[2]=$_POST['r']['2'];
$r[3]=$_POST['r']['3'];
$r[4]=$_POST['r']['4'];
$r[5]=$_POST['r']['5'];
$r[6]=$_POST['r']['6'];
$r[7]=$_POST['r']['7'];

for($i=0;$i<8;$i++)
{
  if($m[$i]!='A')
  {
    $m[$i]=$m[$i]."/".$total;
  }
}

for($i=0;$i<8;$i++)
{
  if($r[$i]==NULL)
  {
    $r[$i]="None";
  }
}

$q1="UPDATE test_marks SET $test='$m[0]', Remarks='$r[0]' WHERE Enrollment_No='CE_001'";
$q2="UPDATE test_marks SET $test='$m[1]', Remarks='$r[1]' WHERE Enrollment_No='CE_002'";
$q3="UPDATE test_marks SET $test='$m[2]', Remarks='$r[2]' WHERE Enrollment_No='CE_003'";
$q4="UPDATE test_marks SET $test='$m[3]', Remarks='$r[3]' WHERE Enrollment_No='CE_004'";
$q5="UPDATE test_marks SET $test='$m[4]', Remarks='$r[4]' WHERE Enrollment_No='CE_005'";
$q6="UPDATE test_marks SET $test='$m[5]', Remarks='$r[5]' WHERE Enrollment_No='CE_006'";
$q7="UPDATE test_marks SET $test='$m[6]', Remarks='$r[6]' WHERE Enrollment_No='CE_007'";
$q8="UPDATE test_marks SET $test='$m[7]', Remarks='$r[7]' WHERE Enrollment_No='CE_008'";
mysql_query($q1,$con) or die(mysql_error());
mysql_query($q2,$con) or die(mysql_error());
mysql_query($q3,$con) or die(mysql_error());
mysql_query($q4,$con) or die(mysql_error());
mysql_query($q5,$con) or die(mysql_error());
mysql_query($q6,$con) or die(mysql_error());
mysql_query($q7,$con) or die(mysql_error());
mysql_query($q8,$con) or die(mysql_error());
?>
<br><br><br><br><br>
The Marks For The Test Have Been Updated...
<br><br><br>
<form method=post action=admin.php>
<input type=hidden name=user value=<?php echo $user; ?>>
<input type=hidden name=pass value=<?php echo $pass; ?>>
<input type=submit value=Back>
</form>
<?php	
}
?>
</body>
</html>
