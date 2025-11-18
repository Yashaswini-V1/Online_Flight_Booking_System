<?php
// Parameters: host, username, password, database_name, port_number
$conn= new mysqli('localhost','root','','flight_booking_db', 3307)or die("Could not connect to mysql".mysqli_error($con));
?>