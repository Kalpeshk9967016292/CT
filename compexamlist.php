<?php
session_start();
if($_SESSION['username'])
{
?>
<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'><meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="JS/shques.js"></script>
<link rel="stylesheet" type="text/css" href="CSS/adpanel.css">
<link rel="stylesheet" type="text/css" href="CSS/adq.css">
<title>Admin Panel</title>
<link rel="icon" type="image/gif" href="IMG/CTL.png">
</head>


<body bgcolor="cadetblue" onload="noBack();" onpageshow="if (event.persisted) noBack();" onunload="">


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
		<div class="col-md-4 col-xs-4" style="text-align:center;"><h4>Check Papers</h4></div>
		<a href="logout.php"><div class="col-md-4 col-xs-4" style="text-align:center;color:black;"><h4>Logout</h4></div></a>
	</div>
</div>


<div class="container-fluid">
	<div class="row top-buffer2">
		<!--1st col large start -->
		<div class="col-lg-2 hidden-md hidden-sm hidden-xs" style="background-color: cadetblue; height:75%; text-align:center;">
			<h4>Select Exam</h4><hr>
			<div class="tqb btn btn-primary" id="cpbtn" style="width:100%;">Checked Papers</div>
			<div class="tqb btn btn-primary" id="ucpbtn" style="width:100%;">Unchecked Papers</div>
			
			
			<h4>Navigation</h4><hr>
			<a href="adpanel.php"><div class="tqb btn btn-primary" id="bkbtn" style="width:100%;">Back</div></a>
		</div>
		<!--1st col large end -->

		<!--1st col ms-xs-sm start -->
		<div class="hidden-lg" style="background-color: cadetblue; text-align:center;">
			<h4>Question type</h4><hr>
			<div class="row">
					<div class="col-md-3 col-sm-6"><div class="tqb btn btn-primary" id="cpbtn" style="width:100%;">Checked Paper</div></div>
					<div class="col-md-3 col-sm-6"><div class="tqb btn btn-primary" id="ucpbtn" style="width:100%;">Unchecked Paper</div></div>
					
					
					<h4>Navigation</h4><hr>
					<div class="col-md-12 col-sm-12"><div class="tqb btn btn-primary" style="width:100%;">Back</div></div>
			</div>
		</div>
		<!--1st col ms-xs-sm end -->

		<div class="col-md-10">
		<!--UCP-->
		<div class="ucp">
			<div style="margin-top:20px;text-align:center;">
			<h4><b>Unchecked Papers</b></h4><hr>
			</div>
				
				<table style="margin-top:20px;" class="table table-hover">
					<thead>
						<tr>
							<th>Sr</th>
							<th>Student Name</th>
							<th>Exam Time</th>
							<th>Exam Date</th>
							<th>Check</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Kalpesh Kalekar</td>
							<td>05/04/2015</td>
							<td>03:30 PM</td>
							<td><span class="glyphicon glyphicon-edit"></span></td>
						</tr>
						<tr>
							<td>2</td>
							<td>Pooja Singh</td>
							<td>05/04/2015</td>
							<td>03:00 PM</td>
							<td><span class="glyphicon glyphicon-edit"></span></td>
						</tr>
						<tr>
							<td>3</td>
							<td>Ashwini Mohane</td>
							<td>04/04/2015</td>
							<td>12:00 PM</td>
							<td><span class="glyphicon glyphicon-edit"></span></td>
						</tr>
					</tbody>
				</table>
		</div>	
		<!--UCP End-->
		<div class="cp">
			<div style="margin-top:20px;text-align:center;">
			<h4><b>Checked Papers</b></h4><hr>
			</div>
				
				<table style="margin-top:20px;" class="table table-hover">
					<thead>
						<tr>
							<th>Sr</th>
							<th>Student Name</th>
							<th>Exam Time</th>
							<th>Exam Date</th>
							<th>View</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Kalpesh Kalekar</td>
							<td>05/04/2015</td>
							<td>03:30 PM</td>
							<td><span class="glyphicon glyphicon-eye-open"></span></td>
						</tr>
						<tr>
							<td>2</td>
							<td>Pooja Singh</td>
							<td>05/04/2015</td>
							<td>03:00 PM</td>
							<td><span class="glyphicon glyphicon-eye-open"></span></td>
						</tr>
						<tr>
							<td>3</td>
							<td>Ashwini Mohane</td>
							<td>04/04/2015</td>
							<td>12:00 PM</td>
							<td><span class="glyphicon glyphicon-eye-open"></span></td>
						</tr>
					</tbody>
				</table>
		</div>
		<!--CP-->

		<!--CP End-->
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