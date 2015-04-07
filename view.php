<?php
include('connect.php');
$id ="";
if(isset($_GET['id'])){
	$id = $_GET['id'];
}
	$sql1 = mysql_query("Select * from stud_info where stud_id=$id");
	$result = mysql_num_rows($sql1);
	while ($row1 = mysql_fetch_array($sql1)) {
		echo $row1['name'];
}
?>