<?php
session_start();
include('connect.php');

$mcqquestion=$_POST['mcqquestion']


if ($username&&$password&&$name&&$lname&&$cname&&$edate&&$eduration&&$batch)
{
	//echo $username, $password ,$name ,$lname, $cname, $edate, $eduration ,$batch, $location;
		mysql_query("INSERT INTO student_info(Username, fname, lname, cname, exmdate, exmduration,batchtime,photo)VALUES('$username','$name','$lname','$cname','$edate','$eduration','$batch','$location')");
		mysql_query("INSERT INTO student_log(susername, spassword)VALUES('$username','$password')");
header("location: reg_form.php");
}
 else
	die("All field must be filled out<br><a href='registration.php'>Click here</a> to Return");
?>