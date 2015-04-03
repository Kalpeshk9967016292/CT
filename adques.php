<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'><meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="js/shques.js"></script>
<link rel="stylesheet" type="text/css" href="CSS/adq.css">
<title>Admin Panel</title>
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
		<div class="col-md-4 col-xs-4" style="text-align:center;"><h4>Welcome Kalpesh!</h4></div>
		<div class="col-md-4 col-xs-4" style="text-align:center;"><h4>Add Question</h4></div>
		<a href="adpanel.php"><div class="col-md-4 col-xs-4" style="text-align:center;color:black;"><h4>Logout</h4></div></a>
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
			<div class="tqb btn btn-primary" id="skbtn" style="width:100%;">Shortcut keys</div>
			<h4>Navigation</h4><hr>
			<a href="adpanel.php"><div class="tqb btn btn-primary" id="bkbtn" style="width:100%;">Back</div></a>
		</div>
		<!--1st col large end -->

		<!--1st col ms-xs-sm start -->
		<div class="hidden-lg" style="background-color: cadetblue; text-align:center;">
			<h4>Question type</h4><hr>
			<div class="row">
					<div class="col-md-3 col-sm-6"><div class="tqb btn btn-primary" id="mcqbtn" style="width:100%;">MCQ</div></div>
					<div class="col-md-3 col-sm-6"><div class="tqb btn btn-primary" style="width:100%;">True or False</div></div>
					<div class="col-md-3 col-sm-6"><div class="tqb btn btn-primary" style="width:100%;">Brief</div></div>
					<div class="col-md-3 col-sm-6"><div class="tqb btn btn-primary" style="width:100%;">Shortcut Keys</div></div>
					<h4>Navigation</h4><hr>
					<div class="col-md-12 col-sm-12"><div class="tqb btn btn-primary" style="width:100%;">Back</div></div>
			</div>
		</div>
		<!--1st col ms-xs-sm end -->

		<div class="col-lg-10 well">
			<div style="text-align:center;"><h4>Set Questions</h4></div><hr>
			<!--MCQ Questions-->
			<div class="mcq">
				<form action="addmcq.php" method="post">
					<div class="form-group">
						<legend>Multiple Choice Questions</legend>
						<div class="col-md-12"> 
						<label for ="mcqq">Question</label>
						<input type="text" required="" id="mcqq" class="form-control"><br>
						</div>
						
						<div class="col-md-6">
							<label for="mcq1">Option 1</label>
							<input type="text" required="" id="mcq1" class="form-control">
							<label> <input type="radio"> Correct Answer </label>
						</div>

						<div class="col-md-6">
							<label for="mcq2">Option 1</label>
							<input type="text" required="" id="mcq2" class="form-control">
							<label> <input type="radio"> Correct Answer </label>
						</div>

						<div class="col-md-6">
							<label for="mcq3">Option 1</label>
							<input type="text" required="" id="mcq3" class="form-control">
							<label> <input type="radio"> Correct Answer </label>
						</div>

						<div class="col-md-6">
							<label for="mcq4">Option 1</label>
							<input type="text" required="" id="mcq4" class="form-control">
							<label> <input type="radio"> Correct Answer </label>
						</div>

						<div class="col-md-4">
							<br><br><button style="width:50%;" class="btn btn-primary" type="sumbit">Submit</button>
						</div>

						<div class="col-md-4">
							<br><br><button style="width:50%;" class="btn btn-danger" type="reset">Reset</button>
						</div>

					</div>
				</form>
			</div>
			<!--MCQ Questions-->

			<!--TH Questions-->
			<div class="tfq">
				<form action="addmcq.php" method="post">
					<div class="form-group">
						<legend>True or False</legend>
						<div class="col-md-12"> 
						<label for ="tfq">Question</label>
						<input type="textarea" required="" id="mcqq" class="form-control"><br>
						</div>
						
						<div class="col-md-12">
							<label for="course">Answer</label>
							<select required="" id="tfans" class="form-control">
								<option>-Select-</option>
								<option>True</option>
								<option>False</option>
							</select>
						</div>


						<div class="col-md-4">
							<br><br><button style="width:50%;" class="btn btn-primary" type="sumbit">Submit</button>
						</div>

						<div class="col-md-4">
							<br><br><button style="width:50%;" class="btn btn-danger" type="reset">Reset</button>
						</div>

					</div>
				</form>
			</div>
			<!--TF Questions-->
			
		</div>
	</div>
</div>





<script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>