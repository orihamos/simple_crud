<?php
// Connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'crud');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Select all data from the 'entries' table
$query = "SELECT * FROM entries";
$result = mysqli_query($conn, $query);

// Check if there are any results
if (mysqli_num_rows($result) > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>Email</th><th>Message</th></tr>";
    // Loop through each row and display the data in a table row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["message"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No results found";
}

// Close the database connection
mysqli_close($conn);
?>
