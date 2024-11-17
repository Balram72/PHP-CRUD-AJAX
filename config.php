<?php
$conn = mysqli_connect("localhost", "root", "", "employee_db");

if (!$conn) {
    die("Connection Error: " . mysqli_connect_error());
} 

?>