<html>
<head>
<link rel="stylesheet" type="text/css" href="CSS/formstyle.css">
<link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
<script src="js/genusername.js"></script>

</head>


<body bgcolor="cadetblue">

<div id="logo">

</div>

<div id="head">
Admin Panel
</div>

<div id="wbar">

<div id="usn">
Welcome Kalpesh!
</div>

<div id="dt">
<a href="logout.php">Log out</a>
</div>

</div>

<div id="nav">
<a href="#pd">1. Enter Personal Details</a><br>
<a href="#cd">2. Enter Course Details</a><br>
<a href="#ed">3. Enter Exam Details</a><br>
<a href="#sub">4. Submit Details</a>
</div>

<div id="section">

<form action="register.php" method="post">
  <fieldset>
    <legend><a id="pd">Personal Details</a></h2></legend>
    <span>First Name :</span>
	<span>Last Name :</span>
	<span>User Name :</span>
	<br>
	<input required="" type="text" id="fn" placeholder="First Name">
	<input required="" type="text" id="ln" placeholder="Last Name">
	<input required="" type="text" id="us": onFocus="Clear();"; placeholder="User Name">
  </fieldset>
  
    <fieldset>
    <legend><a id="cd">Course Details</a></h2></legend>
    <span>Course Name :</span>
	<span style= "width:190px;">Batch From:</span>
	<span>Batch To :</span>
	<br>
	<input required="" type="text" id="cname" placeholder="Course Name">
	<input required="" style= "width:auto;" type="time" placeholder="Faculty Name">
	<input required="" style= "width:auto;" type="time" placeholder="Batch Time">
  </fieldset>
  
    <fieldset>
    <legend><a id="ed">Exam Details</a></h2></legend>
    <span>Exam Time :</span>
	<span>Duration :</span>
	<span>Password :</span>
	<br>
	<input required="" type="text" placeholder="Exam Time">
	<input required="" type="text" placeholder="First Name">
	<input type="password" id="pass" placeholder="Last Name">
	</fieldset>
	
	
    <div id="sub">
    <input type="submit" value="Submit">
	</div>
</form>

</div>





</body>
</html>
