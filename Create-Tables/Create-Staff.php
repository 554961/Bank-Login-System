<?php 
//include config
require_once '../config.php';

//query
$qry = "CREATE TABLE Staff(
    staffID INT AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(100),
    lastName VARCHAR(100),
    email VARCHAR(255),
    phoneNum VARCHAR(15),
    address VARCHAR(255)
);";

// execute
mysqli_query($conn, $qry);

echo " Successfully created table Staff.";
?>