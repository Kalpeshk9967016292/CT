<html>
<head>
<link rel="stylesheet" type="text/css" href="CSS/adpanel.css">
<link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="adpanel.js"></script>
<title>CT Exam Admin Panel</title>
</head>

<body bgcolor="neelam">
<?php

error_reporting(0);
session_start();
if($_SESSION['username'])
{
?>
<div id="logo">
</div>

<div id="head">
Admin Panel
</div>

<div id="wbar">
<div id="usn">
<?php
error_reporting(E_NOTICE);
$user =$_SESSION['username']; 
include('connect.php');
$result=mysql_query("select * from student_info where Username='$user'");
while($row=mysql_fetch_assoc($result))
{
echo "Welcome ".$row['fname']."!";
}
?>
</div>
<div id="dt">
<a href="logout.php" style="text-decoration:none;">Log out</a>
</div>
</div>

<!--<div id="select">
Select a task.
</div>
-->

<div id="selector">
<a href="newexa.php" title="New Exam" class="circle" id="NE"></a>
<a href="ms.php" title="Manage Students" class="circle" id="MS"></a>
<a href="reex.php" title="Re-exam" class="circle" id="rex"></a>
<a href="cp.php" title="Check papers" class="circle" id="CP"></a>
</div>
<?php
}
else
{
header ("location:index.php");
}
?>
</body>
</html>