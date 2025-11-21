<?php 
//include config
require_once '../config.php';

//query
$qry = "CREATE TABLE Accounts(
    accountID INT AUTO_INCREMENT PRIMARY KEY,
    accountName VARCHAR(100),
    currentBalance FLOAT(53),
    overdraftAllowance FLOAT(53)
);";

// execute
mysqli_query($conn, $qry);

echo " Successfully created table.";
?>