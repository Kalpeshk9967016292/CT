<?php
error_reporting(E_NOTICE);
session_start();
if($_SESSION['username']){
	$user = $_SESSION['username'];
include_once('connect.php');

$sql=mysql_query("SELECT * FROM stud_info where username = '$user'");
$result = mysql_num_rows($sql);
if($result!=0){
	while($row = mysql_fetch_array($sql)){
		$name = $row['name'];
		$time = $row['exam_duration'];
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
<link rel="stylesheet" type="text/css" href="CSS/adq.css">
<script src="js.js"></script>
<title>Admin Panel</title>
<link rel="icon" type="image/gif" href="IMG/CTL.png">
</head>


<body bgcolor="cadetblue">
<div class="container-fluid">
	<div class="row top-buffer well">
		<div class="col-md-4"><img src="IMG/CTL.png" width="80px" class="img-responsive center-block"></div>
		<div class="col-md-4"><div class="head">Exam</div></div>
		<div class="col-md-4"></div>
	</div>
</div>

<div class="container">
	<div class="row top-buffer">
		<div class="col-md-12" style="text-align:center;"><h2>Welcome <?php echo $name ?></h2></div>
		<div class="col-md-12" style="text-align:center;"><h3>Please read instructions carefully!!</h3></div>
	</div>
</div>

<div class="container">
	<div class="row top-buffer">
		<div class="col-md-3"></div>
		<div class="col-md-6 well">
			<h4 style="margin-left: 70px;">
			1. Select type of question from left navigation bar.<br><br>
			2. Use Next button for next question.<br><br>
			3. Use Previous button for previous question.<br><br>
			4. You can change answers any time during exam.<br><br>
			5. Complete exam before time is <?php echo $time ?>:00.
			</h4>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>

<div class="container">
	<div class="row top-buffer">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<a href="exam.php?name=<?php echo $name ?>&&time=<?php echo $time ?>"><button style="width:100%; text-align:center;" class="btn btn-primary">Start Exam</button></a>
		</div>
		<div class="col-md-2"></div>
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