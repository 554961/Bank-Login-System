<?php
// connect to db
$conn = mysqli_connect("localhost", "root", "", "bank");

// test connection
if ($conn === false) 
    {die("ERROR: Could not connect to database." . mysqli_connect_error($conn)); }
?>