<?php
	include('connect.php');
	
	$query = mysql_query("insert into admin_log values ('Sir',123456)");
	
	if($query == true)
	{
		echo "Successfully";
	}
	

?>