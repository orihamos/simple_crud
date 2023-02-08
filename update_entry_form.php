<?php
require 'conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // Validate form data
    if (empty($name) || empty($email) || empty($message)) {
        echo "All fields are required";
    } else {
        // Update data in the database
        $sql = "UPDATE entries SET name='$name', email='$email', message='$message' WHERE id=$id";
        if (mysqli_query($conn, $sql)) {
            echo "Entry updated successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}

mysqli_close($conn);
?>
