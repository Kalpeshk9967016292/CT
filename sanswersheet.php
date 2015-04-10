<?php
session_start();
if($_SESSION['username'])
{
$msg = "";
if(isset($_GET['msg'])){
	$msg = $_GET['msg'];
}

$emsg = "";
if(isset($_GET['emsg'])){
	$emsg = $_GET['emsg'];
}

if(isset($_GET['course'])){
	$course = $_GET['course'];
}

if(isset($_POST['course'])){
	$course = $_POST['course'];
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
		<div class="col-md-4 col-xs-4" style="text-align:center;"><h4><?php echo "Welcome ".$_SESSION['username']."!";?></h4></div>
		<div class="col-md-4 col-xs-4" style="text-align:center;"><h4>Add Question</h4></div>
		<div class="col-md-4 col-xs-4" style="text-align:center;color:black;"><h4>Timer : 00:00:00</h4></div>
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
			<a href="adpanel.php"><div class="tqb btn btn-danger" id="bkbtn" style="width:100%;">End Examination</div></a>
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
			<div class="mcqs">
				<form action="submcq.php" method="post">
					<div class="form-group ">
						<legend>Multiple Choice Questions</legend><br>
						
						<div class="mcqq">

						<div class="mcq1">
							<div class="col-md-12 lead">
								1. This is a sample MCQ Question just for test.<br><hr>
							</div>
							<div class="col-md-6" style="font-size:20px;margin-bottom:30px;">
								<label> <input type="radio" name="option"> Option 1 </label>
							</div>
							<div class="col-md-6" style="font-size:20px;margin-bottom:30px;">
								<label> <input type="radio" name="option"> Option 2 </label>
							</div>
							<div class="col-md-6" style="font-size:20px;margin-bottom:30px;">
								<label> <input type="radio" name="option"> Option 3 </label>
							</div>
							<div class="col-md-6" style="font-size:20px;margin-bottom:30px;">
								<label> <input type="radio" name="option"> Option 4 </label>
							</div>
						</div>

						<div class="mcq1">
							<div class="col-md-12 lead">
								2. This is another sample MCQ Question just for test.<br><hr>
							</div>
							<div class="col-md-6" style="font-size:20px;margin-bottom:30px;">
								<label> <input type="radio" name="option"> Option 1 </label>
							</div>
							<div class="col-md-6" style="font-size:20px;margin-bottom:30px;">
								<label> <input type="radio" name="option"> Option 2 </label>
							</div>
							<div class="col-md-6" style="font-size:20px;margin-bottom:30px;">
								<label> <input type="radio" name="option"> Option 3 </label>
							</div>
							<div class="col-md-6" style="font-size:20px;margin-bottom:30px;">
								<label> <input type="radio" name="option"> Option 4 </label>
							</div>
						</div>

						</div>

						<div class="buttons">
						<br><legend></legend><br>	
							<div class="col-md-3">
								<button class="btn btn-info" id="next" style="width:100%;">Prev</button>
							</div>
							<div class="col-md-2">
								
							</div>
							<div class="col-md-2">
								<button class="btn btn-primary" style="width:100%;">Submit</button>
							</div>
							<div class="col-md-2">
								
							</div>
							<div class="col-md-3">
								<button class="btn btn-info" id="prev" style="width:100%;">Next</button>
							</div>
						</div>

					</div>
				</form>
			</div>
		</div>
	</div>
</div>





<script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
<?php
}
else
{
header ("location:index.php");
}
?>