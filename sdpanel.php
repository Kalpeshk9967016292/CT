<html>
<head>
<script>
function startExam(url){
	window.location = url;
}
</script>
<script type = "text/javascript" >
   function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
</script>
</head>
<body>
<h3>Click below when you are ready to start the Exam</h3>
<button onClick="startExam('exam.php')">Click Here To Begin</button>
</body>
</html>
