<html>
<head>
<link rel="stylesheet" type="text/css" href="CSS/index.css">
<link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
<title>CT Exam</title>




</head>

<body>
<div class="logo">
</div>

<div class="exam">
Login to start your exam.
</div>
<div class="error">

<?php 
session_start();
if(empty($_SESSION['username'])) {
echo 'incorrect username/ password please try again.' ; 
?> 


</div>
<div class="login">

<form name="login" action="login.php" method="post">
<div class="form">
<div class="tbx">
<input type="text" placeholder="Enter User name" name="username">
<br>
<input type="password" placeholder="Enter Password" name="pass">
</div>

<input div class="btn" type="submit" value="Login">
</div>
</div>
</form>
</div>
</body>
</html>