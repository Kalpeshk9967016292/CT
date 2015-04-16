<?php
	
include('connect.php');
function fetch($type){
	if($type == mc){ $class = mcq1;}else{ $class = tfq1;}
	$sql = mysql_query("SELECT * FROM `temp_table` where username = '$user' and type = '$type'");
	$result = mysql_num_rows($sql);
	if($result!=0){
		while($row = mysql_fetch_array($sql)){
			$id= $row['question_id'];
		
			$sql1 = mysql_query("SELECT * FROM questions where question_id = '$id'");
			$result1 = mysql_num_rows($sql1);
			if($result1!=0){
				$row1 = mysql_fetch_array($sql1);
				echo "<div class='$class'>";
				echo "<div class='col-md-12 lead'>".$row1['question_id']." : ".$row1['question']."</div>";
				echo "<br><hr>";
				
				$sql2 = mysql_query("SELECT * FROM answers where question_id = '$id' order by rand()");
				$result2 = mysql_num_rows($sql2);
				if($result2!=0){
					if($type == mc){
						while($row2 = mysql_fetch_array($sql2)){
							echo "<div class='col-md-6' style='font-size:20px;margin-bottom:30px;'><label> <input type='radio' name='option'>".$row2['answer']."</label></div>";
						}
					}
					if($type == tf){
						echo "<div class='col-md-6' style='font-size:20px;margin-bottom:30px;'><select required='' id='tfans' class='form-control' name='iscorrect'>";
						while($row2 = mysql_fetch_array($sql2)){
							echo "<option value='answer1'>".$row2['answer']."</option>";
						}
						echo "</select></div>";
					}
					echo "</div>";
				}
				
			}
		}
	}
}

function fetchbq(){
	$sql3 = mysql_query("SELECT * FROM temp_table where type='bq'");
	$result3 = mysql_num_rows($sql3);
	if($result3!=0){
		while($row3 = mysql_fetch_array($sql3)){
			$id2= $row3['question_id'];
		
			$sql4 = mysql_query("SELECT * FROM questions where question_id = '$id2'");
			$result4 = mysql_num_rows($sql4);
			if($result4!=0){
				$row4 = mysql_fetch_array($sql4);
				echo "<div class='$class'>";
				echo "<div class='col-md-12 lead'>".$row4['question_id']." : ".$row4['question']."</div>";
				echo "<br><hr>";
				echo "<div class='col-md-6' style='font-size:20px;margin-bottom:30px;'><textarea class='form-control' rows='5'></textarea></div>";
				echo "</div>";
			}
		}
	}
}		
?>
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
						fetch(mc);
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

						<?php
						fetch(tf);
						?>

						</div>

						

					</div>
				
			</div>
			<!--TF Questions End-->

			<!--BF Questions-->
			<div class="bfq">
				
					<div class="form-group ">
						<legend>Brief Questions</legend><br>
						
						<div class="bfqq">
						<?php
						fetchbq();
						?>

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