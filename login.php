<?php

session_start();
include('connect.php');
$username = $_POST['uname'];
$username = ucfirst(strtolower($username));
$password = $_POST['pass'];

$submit = $_POST['btn'];

if($submit == slogin)
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
	header("location:stdinst.php");
}
else
{
	  $pmsg = 'Password Incorrect';
	  header('location: index.php?pmsg='.$pmsg.'');
	  exit();
}
}
else
{
	  $umsg = 'That user does not exist!';
	  header('location: index.php?umsg='.$umsg.'');
	  exit();
}
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
	header("location:adpanel.php");
}
else
{
	$pmsg = 'Incorrect password';
	  header('location: index.php?pmsg='.$pmsg.'');
	  exit();
}
}
else
{
	  $umsg = 'That user does not exist!';
	  header('location: index.php?umsg='.$umsg.'');
	  exit();
}
}
?>
<html>
<body>
redirecting ...
</body>
</html>