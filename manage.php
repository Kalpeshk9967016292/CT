<?php
error_reporting(E_NOTICE);
session_start();
include('connect.php');
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


$id ="";
if(isset($_GET['id'])){
	$id = $_GET['id'];
}
	$sql1 = mysql_query("Select * from stud_info where stud_id=$id");
	$result = mysql_num_rows($sql1);
	while ($row1 = mysql_fetch_array($sql1)) {
		$name = $row1['name'];
		$username = $row1['username'];
		$examtime = $row1['exam_time'];
		$examdate = $row1['exam_date'];
		$course = $row1['course'];
		$examduration = $row1['exam_duration'];
}



$sql = mysql_query("Select * from stud_info")or die(mysql_error());
$res = mysql_num_rows($sql);

function getpassword($stud_id){
	$sql3 = mysql_query("SELECT * FROM student_log where sid=$stud_id");
	$result = mysql_num_rows($sql3);
	if($result!=0){
			while($row3=mysql_fetch_array($sql3)){
				$password = $row3['spassword'];
				return $password;
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
<script src="js/shques.js"></script>
<script src="js/rvalue.js"></script>
<link rel="stylesheet" type="text/css" href="CSS/adq.css">
<title>Admin Panel</title>
<link rel="icon" type="image/gif" href="IMG/CTL.png">

<script>
function goBack(url) {
    window.location = url;
}
</script>

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
		<div class="col-md-4 col-xs-4" style="text-align:center;"><h4><?php echo "Welcome ".$_SESSION['username']."!" ?></h4></div>
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
							<input type="text" required="" id="name" class="form-control" name="txtname" value="<?php if($id==""){ echo ""; }else{ echo $name; } ?>">
						</div>

						<div class="col-lg-4 col-md-4">
							<label for="uname">Username (Auto-generated)</label>
							<input type="text" required="" id="uname" class="form-control"  name="txtuname" value="<?php if($id==""){ echo ""; }else{ echo $username; } ?>" readonly>
						</div>

						<div class="col-lg-4 col-md-4">
							<label for="pass">Password</label>
							<input type="<?php if($id==""){ echo "password"; }else{ echo "text"; } ?>" required="" id="pass" class="form-control" name="txtpass" value="<?php if($id==""){ echo ""; }else{ echo getpassword($_GET['id']); } ?>"><br>
						</div>
						
				</div>

				<div class="form-group">
					<legend>Exam Details</legend>
						<div class="col-lg-3 col-md-4">
							<label for="et">Exam Time</label>
							<input type="time" required="" id="et" class="form-control" name="examtime" value="<?php if($id==""){ echo ""; }else{ echo $examtime; } ?>">
						</div>

						<div class="col-lg-3">
							<label for="et">Exam Date</label>
							<input type="date" required="" id="et" class="form-control" name="examdate" value="<?php if($id==""){ echo ""; }else{ echo $examdate; } ?>">
						</div>
						
						<div class="col-lg-3 col-md-4">
							<label for="course">Course</label>
							<select required="" id="course" onchange="genu();" class="form-control" name="course">
								<option>-Select-</option>
								<?php if($id==""){ echo ""; }else{ echo "<option selected>".$course."</option>"; } ?>
								<option value="Tally">Tally</option>
								<option value="MS-Office">MS-Office</option>
								<option value="D.T.P">D.T.P</option>
							</select>
						</div>

						<div class="col-lg-3">
							<label for="et">Exam Duration : </label><b><input type="text" value="<?php if($id==""){ echo 30; }else{ echo $examduration; } ?>" onchange="updaterangeInput(this.value);" id="textInput" style="width:10%; border-style:none;" value="">Minutes</b>
							<input type="range" id="rangeInput" min="30" max="60" value="<?php if($id==""){ echo 30; }else{ echo $examduration; } ?>" onchange="updateTextInput(this.value);" name="ranexamd"><br>                                                       
    					</div>
				</div>

				<div class="form-group">
					<legend>Submit</legend>
					<div class="row">
					<input type="hidden" value="<?php if($id==""){ echo ""; }else{ echo $id; } ?>" name="id">
					<div class="col-md-4"></div>
					<div class="col-md-2 col-xs-12 center"><input type="submit" value="<?php if($id==""){ echo "Submit"; }else{ echo "Update"; } ?>" style="width:100%;" class="btn btn-primary" name="<?php if($id==""){ echo "Submit"; }else{ echo "Update"; } ?>"></div>
					<div class="col-md-2 col-xs-12"><input type="reset" onclick="<?php if($id!=""){ echo "goBack('manage.php')"; }?>" value="<?php if($id==""){ echo "Reset"; }else{ echo "Cancel"; } ?>" style="width:100%;" class="btn btn-danger"></div>
					<div class="col-md-4"></div>
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
								<th>Edit</th>
								<th>Delete</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								if ($res!=0) {
									while ($row=mysql_fetch_array($sql)) {
										echo "<tr div class=".$row['stud_id']."><td>".$row['stud_id']."</td>";
										echo "<td>".$row['name']."</td>";
										echo "<td>".$row['username']."</td>";
										echo "<td>".getpassword($row['stud_id'])."</td>";
										echo "<td>".$row['exam_time']."</td>";
										echo "<td>".$row['exam_date']."</td>";
										echo "<td>".$row['course']."</td>";
										echo "<td>".$row['exam_duration']."</td>";
										echo "<td><a href='manage.php?id=".$row['stud_id']."'><span id='delicon' class='glyphicon glyphicon-edit center-block'></a></span></td>";
										echo "<td><a href='delete.php?id=".$row['stud_id']."'><span onclick='hideRow(".$row['stud_id'].")' class='glyphicon glyphicon-remove center-block'></a></span></td></tr>";
									}
								}
								else{
									echo "<tr><td colspan='10' align='center'>No Student registered from your account</td><tr>";
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