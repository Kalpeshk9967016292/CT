<?php
include('connect.php');
$id="";
if(isset($_GET['id'])){
	$id = $_GET['id'];
}

$sql = mysql_query("DELETE FROM stud_info where stud_id=$id");
$sql1 = mysql_query("DELETE FROM student_log where sid='$id'");

if($sql && $sql1 == true){
	$msg = '<div class="alert alert-warning">Student Deleted successfully</div>';
	header('location:manage.php?msg='.$msg.'');
}

?>