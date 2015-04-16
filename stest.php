<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'><meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="js/shques.js" ></script>
<link rel="stylesheet" type="text/css" href="CSS/adq.css">
<title>Admin Panel</title>
<link rel="icon" type="image/gif" href="IMG/CTL.png">
</head>

<body bgcolor="cadetblue">


<div class="container-fluid">
	<div class="row top-buffer well">
		<div class="col-md-4"><img src="IMG/CTL.png" width="80px" class="img-responsive center-block"></div>
		<div class="col-md-4"><div class="head">Admin Panel</div></div>
		<div class="col-md-4"></div>
	</div>
</div>

<div class="container-fluid">
	<div class="row wbar well">
		<div class="col-md-4 col-xs-4" style="text-align:center;"><h4><?php echo "Welcome ".$name."!";?></h4></div>
		<div class="col-md-4 col-xs-4" style="text-align:center;"><h4>Answer sheet</h4></div>
		<div class="col-md-4 col-xs-4" style="text-align:center;color:black;"><h4>Timer : <span id="countdown" class="timer"></span></h4></div>
	</div>
</div>


<div class="container-fluid">
	<div class="row top-buffer2">
		<!--1st col large start -->
		<div class="col-lg-2 hidden-md hidden-sm hidden-xs" style="background-color: cadetblue; height:75%; text-align:center;">
			<h4>Question type</h4><hr>
			<div class="tqb btn btn-primary" id="mcqbtn" style="width:100%;">MCQ</div>
			<div class="tqb btn btn-primary" id="tfbtn" style="width:100%;">True or False</div>
			<div class="tqb btn btn-primary" id="brfbtn" style="width:100%;">Brief</div>
			
			<h4>Examination</h4><hr>
			<div class="tqb btn btn-danger" onclick="endalert()" id="bkbtn" style="width:100%;">End Examination</div>
		</div>
		<!--1st col large end -->

		<!--1st col ms-xs-sm start -->
		<div class="hidden-lg" style="background-color: cadetblue; text-align:center;">
			<h4>Question type</h4><hr>
			<div class="row">
					<div class="col-md-3 col-sm-6"><div class="tqb btn btn-primary" id="mcqbtn" style="width:100%;">MCQ</div></div>
					<div class="col-md-3 col-sm-6"><div class="tqb btn btn-primary" style="width:100%;">True or False</div></div>
					<div class="col-md-3 col-sm-6"><div class="tqb btn btn-primary" style="width:100%;">Brief</div></div>
					
					<h4>Exam</h4><hr>
					<div class="col-md-12 col-sm-12"><div class="tqb btn btn-primary" style="width:100%;">End Examination</div></div>
			</div>
		</div>
		<!--1st col ms-xs-sm end -->
		
		<div class="col-lg-10 well">
			<!--MCQ Questions-->
			<div class="mcq">
				<form action="answers.php" method="post">
					<div class="form-group ">
						<legend>Multiple Choice Questions</legend><br>
						
						<div class="mcqq">

						
							
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
			echo '<div class="mcq1">';
			echo '<div class="col-md-12 lead">'.$row1["question_id"].':'.$row1["question"].'</div>';
			$id1 = $row1["question"];
			echo '<br><hr>';
			
			
		
	$sql2 = mysql_query("SELECT * FROM answers where question_id = '$id1'");
	$result2 = mysql_num_rows($sql2);
	if($result2!=0){
		while($row2 = mysql_fetch_array($sql2)){			
			echo "<div class='col-md-6' style='font-size:20px;margin-bottom:30px;'><label> <input type='radio' name='option'>".$row2['answer']."</label></div>";
			echo "</div>";
		}
	}
}
	}
	}	
?>
		</div>
</div>
				
			</div>
			<!--MCQ Questions End-->

			<!--TF Questions-->
			<div class="tfq">
				
					<div class="form-group ">
						<legend>True or False Questions</legend><br>
						
						<div class="tfqq">

						<div class="tfq1">
							<div class="col-md-12 lead">
								1. This is a sample TF Question just for test.<br><hr>
							</div>
							<div class="col-md-6" style="font-size:20px;margin-bottom:30px;">
								<select required="" id="tfans" class="form-control" name="iscorrect">
								<option>-Select-</option>
								<option value="answer1">True</option>
								<option value="answer2">False</option>
							</select>
							</div>
						</div>

						<div class="tfq1">
							<div class="col-md-12 lead">
								2. This is a sample TF Question just for test.<br><hr>
							</div>
							<div class="col-md-6" style="font-size:20px;margin-bottom:30px;">
								<select required="" id="tfans" class="form-control" name="iscorrect">
								<option>-Select-</option>
								<option value="answer1">True</option>
								<option value="answer2">False</option>
							</select>
							</div>
						</div>
						

						</div>

						

					</div>
				
			</div>
			<!--TF Questions End-->

			<!--BF Questions-->
			<div class="bfq">
				
					<div class="form-group ">
						<legend>Brief Questions</legend><br>
						
						<div class="bfqq">

						<div class="bfq1">
							<div class="col-md-12 lead">
								1. This is a sample Brief Question just for test.<br><hr>
							</div>
							<div class="col-md-6" style="font-size:20px;margin-bottom:30px;">
								<textarea class="form-control" rows="5"></textarea>
							</div>
						</div>

						<div class="bfq1">
							<div class="col-md-12 lead">
								2. This is a sample TF Question just for test.<br><hr>
							</div>
							<div class="col-md-6" style="font-size:20px;margin-bottom:30px;">
								<textarea class="form-control" rows="5"></textarea>
							</div>
						</div>
						

						</div>

						

					</div>
				
			</div>
			<!--BF Questions End-->

			<div class="buttons">
				<br><legend></legend><br>	
					<div class="col-md-3">
						<button class="btn btn-info" id="prev" style="width:100%;">Prev</button>
					</div>
					
					<div class="col-md-1">
								
					</div>
					
					<div class="col-md-4">
						<input type="submit" style="width:100%;" class="btn btn-primary">
					</div>
							
					<div class="col-md-1">
								
					</div>
							
					<div class="col-md-3">
						<button class="btn btn-info" id="next" style="width:100%;">Next</button>
					</div>
			</div>
			</form>
		</div>
	</div>
</div>

<script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>