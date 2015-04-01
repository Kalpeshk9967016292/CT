<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'><meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="js/rvalue.js"></script>
<link rel="stylesheet" type="text/css" href="CSS/formstyle.css">
<title>Admin Panel</title>
</head>

<body>


<div class="container-fluid">
	<div class="row top-buffer well">
		<div class="col-md-4"><img src="IMG/CTL.png" width="100px" class="img-responsive center-block"></div>
		<div class="col-md-4"><div class="head">Admin Panel</div></div>
		<div class="col-md-4"></div>
	</div>

</div>

<div class="container-fluid">
	<div class="row wbar well">
		<div class="col-md-4 col-xs-4" style="text-align:center;"><h4>Welcome Kalpesh!</h4></div>
		<div class="col-md-4 col-xs-4" style="text-align:center;"><h4>Manage Students</h4></div>
		<div class="col-md-4 col-xs-4" style="text-align:center;"><h4>Logout</h4></div>
	</div>
</div>

<div class="container-fluid">
	<div class="row top-buffer2">
		<div class="col-md-2 col-xs-12" style="text-align:center;background-color: cadetblue; height:100%">
			<a href="#"><div class="mynavbar"><h4>Home</h4></div></a>
			<a href="#"><div class="mynavbar"><h4>Course Details</h4></div></a>
			<a href="#"><div class="mynavbar"><h4>Exam Details</h4></div></a>
		</div>
		<div class="col-md-10 col-xs-12" style="height:100%;">
			<div style="text-align:center;"><h4>Students Details</h4></div>
			<form action="addstud.php" method="POST" role="form">
				<div class="form-group">
					<legend>Personal Details</legend>
						<div class="col-lg-4 col-md-4">
							<label for="name">Name</label>
							<input type="text" required="" id="name" class="form-control">
						</div>

						<div class="col-lg-4 col-md-4">
							<label for="uname">Username (Auto-generated)</label>
							<input type="text" required="" id="uname" class="form-control" disabled="">
						</div>

						<div class="col-lg-4 col-md-4">
							<label for="pass">Password</label>
							<input type="password" required="" id="uname" class="form-control"><br>
						</div>
						
				</div>

				<div class="form-group">
					<legend>Exam Details</legend>
						<div class="col-lg-3 col-md-4">
							<label for="et">Exam Time</label>
							<input type="time" required="" id="et" class="form-control">
						</div>

						<div class="col-lg-3">
							<label for="et">Exam Date</label>
							<input type="date" required="" id="et" class="form-control">
						</div>
						
						<div class="col-lg-3 col-md-4">
							<label for="course">Course</label>
							<select required="" id="course" onchange="genu();" class="form-control">
								<option>-Select-</option>
								<option>Tally</option>
								<option>MS-Office</option>
								<option>D.T.P</option>
							</select>
						</div>

						<div class="col-lg-3">
							<label for="et">Exam Duration : </label><b><input type="text" value="30" onchange="updaterangeInput(this.value);" id="textInput" style="width:10%; border-style:none;" value="">Minutes</b>
							<input type="range" id="rangeInput" min="30" max="60" value="30" onchange="updateTextInput(this.value);"><br>                                                       
    					</div>
				</div>

				<div class="form-group">
					<legend>Submit</legend>
					<div class="row">
					<div class="col-md-3 col-xs-12 center"><input type="submit" value="Submit" style="width:100%;" class="btn btn-primary"></div>
					<div class="col-md-3 col-xs-12"><input type="reset" value="Reset" style="width:100%;" class="btn btn-danger"></div>
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