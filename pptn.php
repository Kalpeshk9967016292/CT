<?php
session_start();
if($_SESSION['username']){
	$user = $_SESSION['username'];
	if($user){
		include('connect.php');
		$sql = mysql_query("SELECT * FROM ppattern where username='$user'");
		$result = mysql_num_rows($sql);
		if($result!=0){
			header("location:chkpaper.php?sub=1");
		}
		else{
			header("location:setpp.php");
		}
	}
}
else
{
header ("location:index.php");
}
?>