<?php
	function fetch($type){
	include('connect.php');
	$sql = mysql_query("SELECT * FROM temp_table where type='$type'");
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

	$sql2 = mysql_query("SELECT * FROM answers where question_id = '$id'");
	$result2 = mysql_num_rows($sql2);
	if($result2!=0){
		echo "<select>";
		while($row2 = mysql_fetch_array($sql2)){
			echo "<option>".$row2['answer']."</option>";
		}
					echo "</select>";
	}
			
	}
	}
	}

	fetch(tf);
?>

	echo "<div class='col-md-6' style='font-size:20px;margin-bottom:30px;'><select required='' id='tfans' class='form-control' name='iscorrect'><option value='answer1'>".$row2['answer']."</option></div>";