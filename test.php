<?php
	
	include('connect.php');
	
	$sql = mysql_query("SELECT * FROM temp_table");
	$result = mysql_num_rows($sql);
	if($result!=0){
		while($row = mysql_fetch_array($sql)){
			$id= $row['question_id'];
			
	$sql1 = mysql_query("SELECT * FROM questions where question_id = '$id'");
	$result1 = mysql_num_rows($sql1);
	if($result1!=0){
		$row1 = mysql_fetch_array($sql1);
			echo $row1['question']."<br>";
		}

	}
	}	
?>