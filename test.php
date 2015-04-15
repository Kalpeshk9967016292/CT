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
		while($row2 = mysql_fetch_array($sql2)){
			echo "<input type='radio' name='answer'>".$row2['answer']."<br>";
		}
	}
			
	}
	}
	}

	fetch(tf);
?>





include('connect.php');
	function fetch($type){
	$sql = mysql_query("SELECT * FROM temp_table where type='$type'");
	$result = mysql_num_rows($sql);
	if($result!=0){
		while($row = mysql_fetch_array($sql)){
			$id= $row['question_id'];
		
	$sql1 = mysql_query("SELECT * FROM questions where question_id = '$id'");
	$result1 = mysql_num_rows($sql1);
	if($result1!=0){
		$row1 = mysql_fetch_array($sql1);
			echo "<div class='mcq1'>";
			echo "<div class='col-md-12 lead'>".$row1['question_id'].":".$row1['question']."</div>";
			$id1 = $row1['question'];
			echo "<br><hr>";
			
		if($type == mc){		
	$sql2 = mysql_query("SELECT * FROM answers where question_id = '$id' order by rand()");
	$result2 = mysql_num_rows($sql2);
	if($result2!=0){
		while($row2 = mysql_fetch_array($sql2)){			
			echo "<div class='col-md-6' style='font-size:20px;margin-bottom:30px;'><label> <input type='radio' name='option'>".$row2['answer']."</label></div>";
		}
		echo "</div>";
	}
}
	else {
		$sql2 = mysql_query("SELECT * FROM answers where question_id = '$id' order by rand()");
	$result2 = mysql_num_rows($sql2);
	if($result2!=0){
		while($row2 = mysql_fetch_array($sql2)){			
			echo "<div class='col-md-6' style='font-size:20px;margin-bottom:30px;'><select required='' id='tfans' class='form-control' name='iscorrect'><option>-Select-</option>
								<option value='answer1'>".$row2['answer']."</option></div>";
		}
		echo "</div>";
	}
	}
	}
	}
	}}