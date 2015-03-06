<html>
<head>
<link rel="stylesheet" type="text/css" href="CSS/formstyle.css">
</head>
<body>
	<div class="logo">
	
	</div>
 
      <div  class="form">
    		<form id="contactform">     			
				<p class="contact"><label for="username">Create a Username</label></p> 
    			<input id="name" name="username" placeholder="Username" required="" tabindex="1" type="text">
				
				<p class="contact"><label for="password">Create a Password</label></p> 
    			<input id="name" name="password" placeholder="" required="" tabindex="1" type="text">
				
				<p class="contact"><label for="repassword">Confirm your Password</label></p> 
    			<input id="name" name="repassword" placeholder="" required="" tabindex="1" type="text">
				
				<p class="contact"><label for="First Name">First Name</label></p> 
    			<input id="name" name="fname" placeholder="First name" required="" tabindex="1" type="text"> 
    			 
				 <p class="contact"><label for="Last name">Last Name</label></p> 
    			<input id="name" name="lname" placeholder="Last name" required="" tabindex="1" type="text">
				
				</fieldset>
				<select class="select-style course" name="cname">
					<option value="select">Course name..</option>
					<option value="Msoffice">Ms-office</option>
					<option value="Tally">Tally</option>
					<option value="Hard&net">Hardware & Networking</option>
				</select><br><br>
				<fieldset>
                 <label>Exam date</label>
                  <label class="month">
                  <select class="select-style" name="month">
                  <option value="">Month</option>
                  <option  value="Jan">January</option>
                  <option value="Feb">February</option>
                  <option value="Mar" >March</option>
                  <option value="Apr">April</option>
                  <option value="May">May</option>
                  <option value="Jun">June</option>
                  <option value="Jul">July</option>
                  <option value="Aug">August</option>
                  <option value="Sep">September</option>
                  <option value="Oct">October</option>
                  <option value="Nov">November</option>
                  <option value="Dec">December</option>
                  </label>
                 </select>   
                <label>Day<input class="day" maxlength="2" name="day"  placeholder="Day" required=""></label>
                <label>Year <input class="year" maxlength="4" name="year" value="2015" placeholder="Year" required=""></label><br><br>

				<label>Exam Duration <input class="etime" maxlength="2" name="etime"  placeholder="" required=""> hrs</label><br><br>
				<label>Batch Time <input class="bstime" name="bstime"  placeholder="" required=""> to <input class="bstime" name="betime"  placeholder="" required=""></label><br><br>
				
            <input class="button" name="submit" id="submit" tabindex="5" value="Register" type="submit"> 	 
   </form> 
</div>      
</div>

</body>
</html>
