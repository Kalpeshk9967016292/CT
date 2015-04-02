<?php
session_start();
$user = $_SESSION['username'];
if($_SESSION['username'])
{
echo "<b>Welcome,</b>".$_SESSION['username']."!";
include('connect.php');
$result=mysql_query("SELECT question_id FROM `questions` where type='mc' order by rand() limit 5");
while($row=mysql_fetch_array($result))
{
	$qid = $row['question_id'];
	mysql_query("INSERT INTO temp_table(username,question_id)VALUES('$user','$qid')");
echo $qid."<br>";
}
echo "<hr>";
$result1 = mysql_query("SELECT question_id FROM `questions` where type='tf' order by rand() limit 5");
while($row=mysql_fetch_array($result1))
{
	$qid1 = $row['question_id'];
	mysql_query("INSERT INTO temp_table(username,question_id)VALUES('$user','$qid1')");
echo $qid1."<br>";
}
header ("location:startexam.php");
}
else
{
header ("location:index.php");
}
?>