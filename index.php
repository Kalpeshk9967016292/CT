<html>
<head>
<link rel="stylesheet" type="text/css" href="CSS/def.css">
<link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'><meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<title>CT Exam</title>
</head>

<body>

<div class="container">

<div class="row top-buffer">
	<div class="col-md-4"></div>
	<div class="col-md-4 col-xs-12 center"><img src="IMG/CTL.png" class="img-responsive center-block"></div>
	<div class="col-md-4"></div>
</div>
</div>

<div class="container">
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4 col-xs-12 "><h1 style="text-align:center;">Login to continue</h1></div>
	<div class="col-md-4"></div>
</div>

<form method="post" action="login.php">
<div class="row ">
	<div class="col-md-4"></div>
	<div class="col-md-4 col-xs-12 well">
		<input type="text" class="form-control" id="uname" required="" placeholder="Enter Username">
		<br>
		<input type="password" class="form-control" id="pass" required="" placeholder="Enter Password"><br>
	</div>
	<div class="col-md-4"></div>
</div>

<div class="row txtbx">
	<div class="col-md-4 "></div>
	<div class="col-md-2">
		<button type="submit" class="btn btn-primary btn-block"><div class="txtbx">Student Login</div></button>
	</div>
	<div class="col-md-2">
		<button type="submit" class="btn btn-info btn-block"><div class="txtbx">Admin Login</div></button>
	</div>
	<div class="col-md-4"></div>
</div>
</form>
</div>
</div>

<footer class="footer">
      <div class="scontainer">
      <div class="row">
      <div class="col-xs-12">
        <p class="text-muted"><span class="glyphicon glyphicon-copyright-mark"></span> Sapphire web solutions</p>
      </div>
      </div>
      </div>
</footer>

<script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>