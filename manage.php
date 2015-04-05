<?php
error_reporting(E_NOTICE);
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

include('connect.php');

$sql = mysql_query("Select * from stud_info")or die(mysql_error());
$res = mysql_num_rows($sql)



?>
<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'><meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="js/shques.js"></script>
<script src="js/rvalue.js"></script>
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
		<div class="col-md-4 col-xs-4" style="text-align:center;"><h4>Welcome</h4></div>
		<div class="col-md-4 col-xs-4" style="text-align:center;"><h4>Add Question</h4></div>
		<a href="logout.php"><div class="col-md-4 col-xs-4" style="text-align:center;color:black;"><h4>Logout</h4></div></a>
	</div>
</div>


<div class="container-fluid">
	<div class="row top-buffer2">
		<!--1st col large start -->
		<div class="col-lg-2 hidden-md hidden-sm hidden-xs" style="background-color: cadetblue; height:82.5%; text-align:center;">
			<h4>Question type</h4><hr>
			<div class="tqb btn btn-primary" id="assbtn" style="width:100%;">Add students</div>
			<div class="tqb btn btn-primary" id="dsbtn" style="width:100%;">Delete students</div>
			<div class="tqb btn btn-primary" id="udsbtn" style="width:100%;">Update students details</div>
			
			<h4>Navigation</h4><hr>
			<a href="adpanel.php"><div class="tqb btn btn-primary" id="bkbtn" style="width:100%;">Back</div></a>
		</div>
		<!--1st col large end -->

		<!--1st col ms-xs-sm start -->
		<div class="hidden-lg" style="background-color: cadetblue; text-align:center;">
			<h4>Question type</h4><hr>
			<div class="row">
					<div class="col-md-3 col-sm-6"><div class="tqb btn btn-primary" id="mcqbtn" style="width:100%;">Add students</div></div>
					<div class="col-md-3 col-sm-6"><div class="tqb btn btn-primary" style="width:100%;">Delete students</div></div>
					<div class="col-md-3 col-sm-6"><div class="tqb btn btn-primary" style="width:100%;">Update details</div></div>
					
					<h4>Navigation</h4><hr>
					<div class="col-md-12 col-sm-12"><div class="tqb btn btn-primary" style="width:100%;">Back</div></div>
			</div>
		</div>
		<!--1st col ms-xs-sm end -->

		<div class="col-md-10 col-xs-12 well">
			<div style="text-align:center;"><h4>Students Details</h4></div>
			<?php echo $msg ?>
			<?php echo $emsg ?>
			<!--Add student div start-->
			<form action="addstud.php" method="POST" role="form">
			<div class="assdiv">	
				<div class="form-group">
					<legend>Personal Details</legend>
						<div class="col-lg-4 col-md-4">
							<label for="name">Name</label>
							<input type="text" required="" id="name" class="form-control" name="txtname">
						</div>

						<div class="col-lg-4 col-md-4">
							<label for="uname">Username (Auto-generated)</label>
							<input type="text" required="" id="uname" class="form-control"  name="txtuname" readonly>
						</div>

						<div class="col-lg-4 col-md-4">
							<label for="pass">Password</label>
							<input type="password" required="" id="pass" class="form-control" name="txtpass"><br>
						</div>
						
				</div>

				<div class="form-group">
					<legend>Exam Details</legend>
						<div class="col-lg-3 col-md-4">
							<label for="et">Exam Time</label>
							<input type="time" required="" id="et" class="form-control" name="examtime">
						</div>

						<div class="col-lg-3">
							<label for="et">Exam Date</label>
							<input type="date" required="" id="et" class="form-control" name="examdate">
						</div>
						
						<div class="col-lg-3 col-md-4">
							<label for="course">Course</label>
							<select required="" id="course" onchange="genu();" class="form-control" name="course">
								<option>-Select-</option>
								<option>Tally</option>
								<option>MS-Office</option>
								<option>D.T.P</option>
							</select>
						</div>

						<div class="col-lg-3">
							<label for="et">Exam Duration : </label><b><input type="text" value="30" onchange="updaterangeInput(this.value);" id="textInput" style="width:10%; border-style:none;" value="">Minutes</b>
							<input type="range" id="rangeInput" min="30" max="60" value="30" onchange="updateTextInput(this.value);" name="ranexamd"><br>                                                       
    					</div>
				</div>

				<div class="form-group">
					<legend>Submit</legend>
					<div class="row">
					<div class="col-md-3 col-xs-12 center"><input type="submit" value="Submit" style="width:100%;" class="btn btn-primary"></div>
					<div class="col-md-3 col-xs-12"><input type="reset" value="Reset" style="width:100%;" class="btn btn-danger"></div>
					</div>
				</div>
			</div>
			</form>
			<!--Add student div end-->

			<!--Delete student div start-->
			<form action="delstud.php" method="POST" role="form">
			<div class="deldiv">
				<div class="form-group">
					<legend>Students Details</legend>
					
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Sr.</th>
								<th>Name</th>
								<th>Username</th>
								<th>Password</th>
								<th>Time</th>
								<th>Date</th>
								<th>Course</th>
								<th>Duration</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								if ($res!=0) {
									while ($row=mysql_fetch_array($sql)) {
										echo "<tr><td>".$row['stud_id']."</td>";
										echo "<td>".$row['name']."</td>";
										echo "<td>".$row['username']."</td>";
										echo "<td>***********</td>";
										echo "<td>".$row['exam_time']."</td>";
										echo "<td>".$row['exam_date']."</td>";
										echo "<td>".$row['course']."</td>";
										echo "<td>".$row['exam_duration']."</td></tr>";
									}
								}
							?>
							
						</tbody>
					</table>
					
			</div>
			</form>
			<!--Delete student div end-->

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