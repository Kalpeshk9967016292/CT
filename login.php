<?php
error_reporting(0);
session_start();
include('connect.php');
$username = $_POST['username'];
$password = $_POST['pass'];


if ($username&&$password)
{
$query = mysql_query ("SELECT * FROM students WHERE username='$username'");

$numrows = mysql_num_rows($query);

if ($numrows!=0)
{

	while ($row = mysql_fetch_array($query))
{
	$dbusername = $row['Username'];
	$dbpassword = $row['Password'];
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
else
die("Please enter username and a password!");
?>