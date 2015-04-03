<?php
session_start();
include('connect.php');

$name = $_POST['txtname'];
$username = $_POST['txtuname'];
$password = $_POST['txtpass'];
$examtime = $_POST['examtime'];
$examdate = $_POST['examdate'];
$course = $_POST['course'];
$examduration = $_POST['ranexamd'];

?>