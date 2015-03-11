<?php
include('connect.php');

// sql to create table
$sql = "drop table mcqq";

if ($sql == TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table:";
}

?>