<?php
session_start();
include('connect.php');

$user = $_SESSION['username'];
$user = ucfirst(strtolower($user));
$name = $_POST['txtname'];
$name = ucfirst(strtolower($name));
$username = $_POST['txtuname'];
$username = ucfirst(strtolower($username));
$password = $_POST['txtpass'];
$examtime = $_POST['examtime'];
$examdate = $_POST['examdate'];
$course = $_POST['course'];
$examduration = $_POST['ranexamd'];
$submit = $_POST['Submit'];
$id = $_POST['id'];

echo $user."<br>";
echo $name."<br>";
echo $username."<br>";
echo $password."<br>";
echo $examtime."<br>";
echo $examdate."<br>";
echo $course."<br>";
echo $examduration."<br>";
echo $id;


if($submit=="Submit")
{
if($user && $name && $username && $password && $examtime && $examdate && $course && $examduration)
{
	mysql_query("INSERT INTO stud_info(user,name,username,exam_time,exam_date,course,exam_duration)VALUES('$user','$name','$username','$examtime','$examdate','$course','$examduration')");
	mysql_query("INSERT INTO student_log(susername,spassword) VALUES('$username','$password')");
	$msg = '<div class="alert alert-success">Student added sucessfully!</div>';
	header('location: manage.php?msg='.$msg.'');
	exit();
}
else
{
	$msg = '<div class="alert alert-danger">All field must filled!</div>';
	header('location: manage.php?msg='.$msg.'');
}
}
else{
	if($user && $name && $username && $password && $examtime && $examdate && $course && $examduration){
		mysql_query("UPDATE stud_info set user='$user',name='$name',username='$username',exam_time='$examtime',exam_date='$examdate',course='$course',exam_duration='$examduration' where stud_id='$id'");
		mysql_query("UPDATE student_log SET susername='$username',spassword='$password' where sid='$id'");
		$msg = '<div class="alert alert-success">Update sucessfully!</div>';
		header('location: manage.php?msg='.$msg.'');
	exit();
}
}
?>