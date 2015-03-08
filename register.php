<?php
session_start();
include('connect.php');

$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['fname'];
$lname = $_POST['lname'];
$cname= $_POST['cname'];
$day=$_POST['day'];
$month=$_POST['month'];
$year=$_POST['year'];
$edate=$day.'/'.$month.'/'.$year;
$eduration = $_POST['etime'];
$bstime = $_POST['bstime'];
$betime = $_POST['betime'];
$batch = $bstime.'to'.$betime;

if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"uploaded/" . $_FILES["image"]["name"]);
			
			$location="uploaded/" . $_FILES["image"]["name"];
	}
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
