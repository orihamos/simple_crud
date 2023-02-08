<?php
require 'conn.php';

// Check if the id is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete the entry from the database
    $query = "DELETE FROM entries WHERE id=$id";

    if (mysqli_query($conn, $query)) {
        header("Location: index.php");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    echo "Error: ID not set in URL.";
}

?>
