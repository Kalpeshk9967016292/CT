<?php
$conn = mysql_connect("localhost","root","") or die("Connection failed");
$db=mysql_select_db("Users", $conn) or die("Database not connected");
?>