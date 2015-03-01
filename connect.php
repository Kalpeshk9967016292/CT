<?php
$conn = mysql_connect("localhost","root","") or die("Connection failed");
$db=mysql_select_db("db name", $conn) or die("Database not connected");
?>