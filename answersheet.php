<html>
<body bgcolor="cadetblue">
<?php
error_reporting(E_NOTICE);
include('connect.php');
$queryget = mysql_query("SELECT * FROM mcqq");
$numrows = mysql_num_rows($queryget);
while($row=mysql_fetch_assoc($queryget))
{
$id = $row['qid'];
if($row['question'])
{
	echo "<font size='04pt'>Question ".$row['qid']."</font>: &nbsp; <font size='04pt'>".$row['question']."</font>";
	echo "<br><br><input style='margin-left:90px;' type='radio' name='answer'>" .$row['opt_1'];
	echo "<br><input style='margin-left:90px;' type='radio' name='answer'>" .$row['opt_2'];
	echo "<br><input style='margin-left:90px;' type='radio' name='answer'>" .$row['opt_3'];
	echo "<br><input style='margin-left:90px;' type='radio' name='answer'>" .$row['opt_4'];
	echo "<br><br><input style='margin-left:90px;' type='submit' name='' value='Add'>";
	 echo "<hr>";
}
else
	echo "Questions are not posted";
}
?>
</body>
</html>