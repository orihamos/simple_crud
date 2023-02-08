<?php

require 'conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // Validate form data
    if (empty($name) || empty($email) || empty($message)) {
        echo "Error: All fields are required";
    } else {
        // Insert data into the database
        $sql = "INSERT INTO entries (name, email, message) VALUES ('$name', '$email', '$message')";
        if (mysqli_query($conn, $sql)) {
            header("Location: index.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
} else {
    header("Location: index.php");
}

mysqli_close($conn);

?>
