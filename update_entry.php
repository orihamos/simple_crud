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

// Get the data from the form
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Update the record in the database
$query = "UPDATE entries SET name='$name', email='$email', message='$message' WHERE id=$id";

if (mysqli_query($conn, $query)) {
    header("Location: index.php");
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);

?>
