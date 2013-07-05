<html>
<body>
<?php
include "connection.php";


$name=$_POST['name'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$add=$_POST['add'];
$res=$_POST['res'];
$mob=$_POST['mob'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$prog=$_POST['prog'];
$code=$_POST['code'];
$no=$_POST['no'];
$rank=$_POST['rank'];
$ten=$_POST['ten'];
$mten=$_POST['mten'];
$twelve=$_POST['twelve'];
$mtwelve=$_POST['mtwelve'];
$mbtwelve=$_POST['mbtwelve'];
$grad=$_POST['grad'];
$mgrad=$_POST['mgrad'];
$pg=$_POST['pg'];
$mpg=$_POST['mpg'];
$region=$_POST['region'];
$state=$_POST['state'];
$religion=$_POST['religion'];
$cat=$_POST['cat'];
$prior=$_POST['prior'];
$nat=$_POST['nat'];
$nsci=$_POST['nsci'];
$icode=$_POST['icode'];
$ueno=$_POST['ueno'];
$stati=$_POST['stati'];
$pshift=$_POST['pshift'];
$pcode=$_POST['pcode'];
$cfee=$_POST['cfee'];
$ddno=$_POST['ddno'];
$dddate=$_POST['dddate'];
$nob=$_POST['nob'];
$arno=$_POST['arno'];



$update1="INSERT INTO personal SET Name='$name', Father_Name='$fname', Mother_Name='$mname', Address='$add', Res_Phone='$res', Mobile='$mob', Date_Of_Birth='$dob', Gender='$gender', Programme='$prog', CET_Code='$code', CET_Roll='$no', CET_Rank='$rank'";

$update2="INSERT INTO education SET Name='$name', CET_Roll='$no', Year_Pass_10='$ten', Marks_10='$mten', Year_Pass_12='$twelve', Marks_12='$mtwelve', Marks_pcm_12='$mbtwelve', Year_Pass_Grad='$grad', Marks_Grad='$mgrad', Year_Pass_PG='$pg', Marks_PG='$mpg'";

$update3="INSERT INTO first_counselling_status SET Name='$name', CET_Roll='$no', Region='$region', State='$state', Religion='$religion', Category='$cat', Priority='$prior', Nationality='$nat', Name_Institute='$nsci', Institute_Code='$icode', Enrollment_No='$ueno', Status_Institute='$stati', Programme_Shift='$pshift', Programme_Code='$pcode', Fee='$cfee', DD_No='$ddno', DD_DATE='$dddate', Name_Bank='$nob', Admsn_Recpt_No='$arno'";

$update4="INSERT INTO list_details SET Name='$name', Father_Name='$fname', Programme='$prog', CET_Code='$code', CET_Rank='$rank', Name_Institute='$nsci', Enrollment_No='$ueno'";

$update5="INSERT INTO all_details SET Name='$name', Father_Name='$fname', Mother_Name='$mname', Address='$add', Res_Phone='$res', Mobile='$mob', Date_Of_Birth='$dob', Gender='$gender', Programme='$prog', CET_Code='$code', CET_Roll='$no', CET_Rank='$rank', Year_Pass_10='$ten', Marks_10='$mten', Year_Pass_12='$twelve', Marks_12='$mtwelve', Marks_pcm_12='$mbtwelve', Year_Pass_Grad='$grad', Marks_Grad='$mgrad', Year_Pass_PG='$pg', Marks_PG='$mpg', Region='$region', State='$state', Religion='$religion', Category='$cat', Priority='$prior', Nationality='$nat', Name_Institute='$nsci', Institute_Code='$icode', Enrollment_No='$ueno', Status_Institute='$stati', Programme_Shift='$pshift', Programme_Code='$pcode', Fee='$cfee', DD_No='$ddno', DD_DATE='$dddate', Name_Bank='$nob', Admsn_Recpt_No='$arno'";

if(!mysql_query($update1,$con))
{
	die('could not insert query in first record :'.mysql_error());
}
else
{
	echo "first record has been updated...";
}
if(!mysql_query($update2,$con))
{
	die('could not insert query in second record :'.mysql_error());
}
else
{
	echo "second record has been updated...";
}
if(!mysql_query($update3,$con))
{
	die('could not insert query in third record:'.mysql_error());
}
else
{
	echo "third record has been updated...";
}

if(!mysql_query($update4,$con))
{
	die('could not insert query in fourth record :'.mysql_error());
}
else
{
	echo "fourth record has been updated...";
}

if(!mysql_query($update5,$con))
{
	die('could not insert query in fifth record :'.mysql_error());
}
else
{
	echo "fifth record has been updated...";
}

$query="SELECT * FROM ipu";
$result=mysql_query($query);



mysql_close($con);
?>
<br><br><br>
<a href=form.php><input type=button value=Back width=20%></a> 
</body>
</html>