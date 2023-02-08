<?php
require 'index.php';

// SQL statement for creating the table
$sql = "CREATE TABLE entries (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(30) NOT NULL,
email VARCHAR(50),
message TEXT NOT NULL
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

// Execute the SQL statement
if (mysqli_query($conn, $sql)) {
    echo "Table entries created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
?>
