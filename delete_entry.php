<?php

// Connect to the database
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'crud';

// Create connection
$conn = mysqli_connect($host, $user, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the id of the entry to delete
$id = $_GET['id'];

// Delete the entry from the database
$query = "DELETE FROM entries WHERE id=$id";

if (mysqli_query($conn, $query)) {
    header("Location: index.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);

?>