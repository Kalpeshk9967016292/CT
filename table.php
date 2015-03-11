<?php
include('connect.php');

// sql to create table
$sql= mysql_query("Insert into briefq Values(1,1,'This is a Question')");

if ($sql == TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table:";
}

?>