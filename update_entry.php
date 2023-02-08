<?php
require 'conn.php';

// Check if the id is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get the data from the form
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);

        // Update the record in the database
        $query = "UPDATE entries SET name='$name', email='$email', message='$message' WHERE id=$id";

        if (mysqli_query($conn, $query)) {
            header("Location: index.php");
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }
} else {
    echo "Error: ID not set in URL.";
}

mysqli_close($conn);

?>
