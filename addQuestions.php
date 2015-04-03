<?php
session_start();
if($_SESSION['username'])
{
	require_once("connect.php");
	$user = $_SESSION['username'];
	$user = ucfirst(strtolower($user));
	$question = $_POST['desc'];
	$answer1 = $_POST['answer1'];
	$answer2 = $_POST['answer2'];
	$answer3 = $_POST['answer3'];
	$answer4 = $_POST['answer4'];
	$type = $_POST['type'];
	$isCorrect = $_POST['iscorrect'];
	
	if($_POST['type'] == 'bq'){
		if((!$_POST['desc'])){
			echo "Sorry, All fields must be filled in to add a new question to the quiz. Please press back in your browser and try again for bq.";
		}
		else{
			$sql = mysql_query("INSERT INTO questions (user,question, type) VALUES ('$user','$question', '$type')")or die(mysql_error());
			$lastId = mysql_insert_id();
		mysql_query("UPDATE questions SET question_id='$lastId' WHERE id='$lastId' LIMIT 1")or die(mysql_error());
			$msg = 'Thanks, your question has been added';
			header('location: adques.php?msg='.$msg.'');
	exit();
		}
	}
	else {
if(isset($_POST['desc'])){
	if(!isset($_POST['iscorrect']) || $_POST['iscorrect'] == ""){
		echo "Sorry, important data to submit your question is missing.";
		exit();
	}
	if(!isset($_POST['type']) || $_POST['type']== ""){
		echo "Sorry, there was an error parsing the form. Please press back in your browser and try again";
		exit();
	}
	
	if($type == 'tf'){
	if((!$question)|| (!$isCorrect)){
		echo "Sorry, All fields must be filled in to add a new question to the quiz. Please press back in your browser and try again for tf.";
		exit();
		}
	}
	if($type == 'mc'){
	if((!$question) || (!$answer1) || (!$answer2) || (!$answer3) || (!$answer4) || (!$isCorrect)){
		echo "Sorry, All fields must be filled in to add a new question to the quiz. Please press back in your browser and try again for mc.";
		exit();
		}
	}
	$sql = mysql_query("INSERT INTO questions (user,question, type) VALUES ('$user','$question', '$type')")or die(mysql_error());
		$lastId = mysql_insert_id();
		mysql_query("UPDATE questions SET question_id='$lastId' WHERE id='$lastId' LIMIT 1")or die(mysql_error());

	if($type == 'tf'){
		if($isCorrect == "answer1"){
		$sql2 = mysql_query("INSERT INTO answers (question_id, answer, correct) VALUES ('$lastId', 'True', '1')")or die(mysql_error());
		mysql_query("INSERT INTO answers (question_id, answer, correct) VALUES ('$lastId', 'False', '0')")or die(mysql_error());
		$msg = 'Thanks, your question has been added';
	  header('location: adques.php?msg='.$msg.'');
	exit();
	}
	if($isCorrect == "answer2"){
		$sql2 = mysql_query("INSERT INTO answers (question_id, answer, correct) VALUES ('$lastId', 'False', '1')")or die(mysql_error());
		mysql_query("INSERT INTO answers (question_id, answer, correct) VALUES ('$lastId', 'True', '0')")or die(mysql_error());
		$msg = 'Thanks, your question has been added';
	  header('location: adques.php?msg='.$msg.'');
	exit();
		}	
	}
	if($type == 'mc'){
		if($isCorrect == "answer1"){
		$sql2 = mysql_query("INSERT INTO answers (question_id, answer, correct) VALUES ('$lastId', '$answer1', '1')")or die(mysql_error());
		mysql_query("INSERT INTO answers (question_id, answer, correct) VALUES ('$lastId', '$answer2', '0')")or die(mysql_error());
		mysql_query("INSERT INTO answers (question_id, answer, correct) VALUES ('$lastId', '$answer3', '0')")or die(mysql_error());
		mysql_query("INSERT INTO answers (question_id, answer, correct) VALUES ('$lastId', '$answer4', '0')")or die(mysql_error());
		$msg = 'Thanks, your question has been added';
	  header('location: adques.php?msg='.$msg.'');
	exit();
	}
	if($isCorrect == "answer2"){
		$sql2 = mysql_query("INSERT INTO answers (question_id, answer, correct) VALUES ('$lastId', '$answer2', '1')")or die(mysql_error());
		mysql_query("INSERT INTO answers (question_id, answer, correct) VALUES ('$lastId', '$answer1', '0')")or die(mysql_error());
		mysql_query("INSERT INTO answers (question_id, answer, correct) VALUES ('$lastId', '$answer3', '0')")or die(mysql_error());
		mysql_query("INSERT INTO answers (question_id, answer, correct) VALUES ('$lastId', '$answer4', '0')")or die(mysql_error());
		$msg = 'Thanks, your question has been added';
	  header('location: adques.php?msg='.$msg.'');
	exit();
	}
	if($isCorrect == "answer3"){
		$sql2 = mysql_query("INSERT INTO answers (question_id, answer, correct) VALUES ('$lastId', '$answer3', '1')")or die(mysql_error());
		mysql_query("INSERT INTO answers (question_id, answer, correct) VALUES ('$lastId', '$answer1', '0')")or die(mysql_error());
		mysql_query("INSERT INTO answers (question_id, answer, correct) VALUES ('$lastId', '$answer2', '0')")or die(mysql_error());
		mysql_query("INSERT INTO answers (question_id, answer, correct) VALUES ('$lastId', '$answer4', '0')")or die(mysql_error());
		$msg = 'Thanks, your question has been added';
	  header('location: adques.php?msg='.$msg.'');
	exit();
	}
	if($isCorrect == "answer4"){
		$sql2 = mysql_query("INSERT INTO answers (question_id, answer, correct) VALUES ('$lastId', '$answer4', '1')")or die(mysql_error());
		mysql_query("INSERT INTO answers (question_id, answer, correct) VALUES ('$lastId', '$answer1', '0')")or die(mysql_error());
		mysql_query("INSERT INTO answers (question_id, answer, correct) VALUES ('$lastId', '$answer2', '0')")or die(mysql_error());
		mysql_query("INSERT INTO answers (question_id, answer, correct) VALUES ('$lastId', '$answer3', '0')")or die(mysql_error());
		$msg = 'Thanks, your question has been added';
	  header('location: adques.php?msg='.$msg.'');
	exit();
		}
	}
}
}
}
else
{
header ("location:index.php");
}
?>
