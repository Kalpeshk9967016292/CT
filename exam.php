<?php
session_start();
$user = $_SESSION['username'];
if($_SESSION['username'])
{
	$name="";
if(isset($_GET['name'])){
	$name = $_GET['name'];
}

$time="";
if(isset($_GET['time'])){
	$time=$_GET['time'];
	$time = $time*60;
}
echo "<b>Welcome,</b>".$_SESSION['username']."!";
include('connect.php');
$result=mysql_query("SELECT * FROM `questions` where type='mc' order by rand() limit 5");
while($row=mysql_fetch_array($result))
{
	$qid = $row['question_id'];
	$type = $row['type'];
	mysql_query("INSERT INTO temp_table(username,question_id,type)VALUES('$user','$qid','$type')");
//echo $qid."<br>";
}
echo "<hr>";
$result1 = mysql_query("SELECT * FROM `questions` where type='tf' order by rand() limit 5");
while($row=mysql_fetch_array($result1))
{
	$qid1 = $row['question_id'];
	$type1 = $row['type'];
	mysql_query("INSERT INTO temp_table(username,question_id,type)VALUES('$user','$qid1','$type1')");
//echo $qid1."<br>";
}
$result2 = mysql_query("SELECT * FROM `questions` where type='bq' order by rand() limit 1");
while($row = mysql_fetch_array($result2))
{
	$qid2 = $row['question_id'];
	$type2 = $row['type'];
	mysql_query("INSERT INTO temp_table(username,question_id,type)VALUES('$user','$qid2','$type2')");
}
header ("location:sanswersheet.php?name=$name&&time=$time");
}
else
{
header ("location:index.php");
}
?>