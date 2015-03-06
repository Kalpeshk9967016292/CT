<html>
<head>
<link rel="stylesheet" type="text/css" href="CSS/adpanel.css">
<link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="adpanel.js"></script>
<title>CT Exam Admin Panel</title>
</head>

<body bgcolor="neelam">

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
<?php echo "Date : ".date("d/m/Y")?>
</div>
</div>

<!--<div id="select">
Select a task.
</div>
-->

<div id="selector">
<a href="newexa.php" title="New Exam" class="circle" id="NE"></a>
<a href="ms.php" title="Manage Students" class="circle" id="MS"></a>
<a href="reex.php" title="Re-exam" class="circle" id="rex"></a>
<a href="cp.php" title="Check papers" class="circle" id="CP"></a>
</div>

</body>
</html>