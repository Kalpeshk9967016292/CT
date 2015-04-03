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
<link rel="stylesheet" type="text/css" href="CSS/adpanel.css">
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
		<div class="col-md-4 col-xs-4" style="text-align:center;"><h4><?php echo "Welcome,".$_SESSION['username']."!";?></h4></div>
		<div class="col-md-4 col-xs-4" style="text-align:center;"><h4>Admin Panel</h4></div>
		<a href="logout.php"><div class="col-md-4 col-xs-4" style="text-align:center;color:black;"><h4>Logout</h4></div></a>
	</div>
</div>


<div class="container">
	<div class="row">
		<div class="col-md-12 col-xs-12" style="text-align:center;"><h1>Select a task.</h1></div>
	</div>
</div>

<div class="container top-buffer2">
	<div class="row">
		<div class="col-md-3 col-xs-6 top-buffer" style="text-align:center;">
		<a href="form.php"><img src="IMG/MS.png" width="150px" class="img-responsive center-block"></a><br>Manage Students
		</div>
		
		<div class="col-md-3 col-xs-6 top-buffer" style="text-align:center;">
		<a href="adques.php"><img src="IMG/NE.png" width="150px" class="img-responsive center-block"></a><br>New Exam
		</div>

		<div class="col-md-3 col-xs-6 top-buffer" style="text-align:center;">
		<a href="#"><img src="IMG/CP.png" width="150px" class="img-responsive center-block"></a><br>Check answers
		</div>

		<div class="col-md-3 col-xs-6 top-buffer" style="text-align:center;">
		<a href="#"><img src="IMG/RE.png" width="150px" class="img-responsive center-block"></a><br>Re-Exam
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