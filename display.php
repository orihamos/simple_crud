<html>
<head>
    <title>Entries</title>
</head>
<body>
    <h1>Entries</h1>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Actions</th>
        </tr>
        <?php
        // Include the database connection file
        require 'conn.php';
        // Get the id from the URL
        $id = $_GET['id'];
        // Select the entry with the given id from the entries table
        $query = "SELECT * FROM entries WHERE id = $id";
        $result = mysqli_query($conn, $query);

        // Display the entry
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['message'] . "</td>";
            echo "<td>";
            echo "<a href='edit_entry.php?id=" . $row['id'] . "'>Edit</a> | ";
            echo "<a href='delete_entry.php?id=" . $row['id'] . "'>Delete</a>";
            echo "</td>";
            echo "</tr>";
        }

        mysqli_close($conn);
        ?>
    </table>
    <br>
    <a href="create_entry.php">Create new entry</a>
</body>
</html>
