<html>
<head>
<link rel="stylesheet" type="text/css" href="CSS/def.css">
<link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'><meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<title>CT Exam</title>
<script type = "text/javascript" >
   function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
</script>
<link rel="icon" type="image/gif" href="IMG/CTL.png">
</head>
<body>

<div class="container">
<?php 
$umsg = "";
$pmsg = "";
if(isset($_GET['umsg'])){
	$umsg = $_GET['umsg'];
}
if(isset($_GET['pmsg'])){
	$pmsg = $_GET['pmsg'];	
}
?>
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
		<input type="text" class="form-control" id="uname" required="" name="uname" placeholder="Enter Username">
		<?php echo "<font color='red'>".$umsg."</font>"; ?><br>
		<input type="password" class="form-control" id="pass" required="" name="pass" placeholder="Enter Password">
		<?php echo "<font color='red'>".$pmsg."</font>"; ?><br>
	</div>
	<div class="col-md-4"></div>
</div>

<div class="row txtbx">
	<div class="col-md-4 "></div>
	<div class="col-md-2">
		<button type="submit" class="btn btn-primary btn-block" name="btn" value="slogin"><div class="txtbx">Student Login</div></button>
	</div>
	<div class="col-md-2">
		<button type="submit" class="btn btn-info btn-block" name="btn" value="alogin"><div class="txtbx">Admin Login</div></button>
	</div>
	<div class="col-md-4"></div>
</div>
</form>
</div>
</div>

<footer class="hidden-xs footer">
      <div class="scontainer">
      <div class="row">
      <div class="col-md-12">
        <p class="text-muted"><span class="glyphicon glyphicon-copyright-mark"></span> Sapphire web solutions</p>
      </div>
      </div>
      </div>
</footer>

<script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>