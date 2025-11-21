<?php 
//include config
require_once '../config.php';

//query
$qry = "CREATE TABLE Statements(
    statementID INT AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(100),
    lastName VARCHAR(100),
    accountName VARCHAR(100),
    bankName VARCHAR(100),
    currentDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    statementPeriod VARCHAR(100),
    interestEarned FLOAT(1),
    beginningBalance FLOAT(1),
    endBalance FLOAT(1),
    transactionHistory TEXT
);";

// execute
mysqli_query($conn, $qry);

echo " Successfully created table.";
?>