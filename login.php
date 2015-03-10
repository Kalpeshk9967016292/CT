<?php
error_reporting(0);
session_start();
include('connect.php');
$username = $_POST['username'];
$password = $_POST['pass'];
<<<<<<< HEAD
$submit = $_POST['sbtn'];
=======

$submit = $_POST['sbtn'];
$asubmit = $_POST['abtn'];
>>>>>>> origin/master

if($submit)
{
	if($submit)
	{
$query = mysql_query ("SELECT * FROM student_log WHERE susername='$username'");

$numrows = mysql_num_rows($query);

if ($numrows!=0)
{

	while ($row = mysql_fetch_array($query))
{
	$dbusername = $row['susername'];
	$dbpassword = $row['spassword'];
}

if ($username==$dbusername&&$password==$dbpassword)
{
	$_SESSION['username']=$username;
	header("location:adpanel.php");
}
else
	echo "Incorrect password!";
}
else
	die ("That user doesn't exist!");
}
else{
	$query = mysql_query ("SELECT * FROM admin_log WHERE ausername='$username'");

$numrows = mysql_num_rows($query);

if ($numrows!=0)
{

	while ($row = mysql_fetch_array($query))
{
	$dbusername = $row['ausername'];
	$dbpassword = $row['apassword'];
}

if ($username==$dbusername&&$password==$dbpassword)
{
	$_SESSION['username']=$username;
	echo "Login Sucessfully";
	//header("location:adpanel.php");
}
else
	echo "Incorrect password!";
}
else
	die ("That user doesn't exist!");
}
}
else
{
	$query = mysql_query ("SELECT * FROM admin_log WHERE ausername='$username'");

$numrows = mysql_num_rows($query);

if ($numrows!=0)
{

	while ($row = mysql_fetch_array($query))
{
	$dbusername = $row['ausername'];
	$dbpassword = $row['apassword'];
}

if ($username==$dbusername&&$password==$dbpassword)
{
	$_SESSION['username']=$username;
	//header("location:adpanel.php");
	echo "login Succefully";
}
else
	echo "Incorrect password!";
}
else
	die ("That user doesn't exist!");
	
}
?>