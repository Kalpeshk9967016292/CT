<html>
<body>
<form action="register.php" method="post" enctype="multipart/form-data">
Username :<input type="text" name="username"><br>
Password :<input type="password" name="password"><br>
First Name :<input type="text" name="fname"><br>
Last Name :<input type="text" name="lname"><br>
Course name :<select name="cname">
			<option value="#" selected>--select--</option>
			<option value="Msoffice">Ms-office</option>
			<option value="Tally">Tally</option>
			<option value="Hard&net">Hardware & Networking</option>
			</select><br>
Exam date :<select name="day">
			<script type="text/javascript">
			for (var d=01;d<=31;d++)
			{
			document.write("<option value="+d+">"+d);
			}</script></select>
			<select name="month">
<option value="Jan">Jan</option>
<option value="Feb">Feb</option>
<option value="Mar">Mar</option>
<option value="Apr">Apr</option>
<option value="May">May</option>
<option value="Jun">Jun</option>
<option value="Jul">Jul</option>
<option value="Aug">Aug</option>
<option value="Sep">Sep</option>
<option value="Oct">Oct</option>
<option value="Nov">Nov</option>
<option value="Dec">Dec</option>
</select>
<select name="year">
<option value="2015">2015</option>
</select><br>
Exam duration : <input type="text" name="etime"> hrs<br>
Batch time :<input type="text" name="bstime"> to <input type="text" name="betime"><br>
photo : <input type="file" name="image"><br>
<input type="submit" value="Register" name="submit"><input type="reset">
</form>
</body>
</html>