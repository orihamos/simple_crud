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
        // Connect to the database
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $dbname = 'crud';

        // Create connection
        require 'conn.php';
        // Select all the entries from the entries table
        $query = "SELECT * FROM entries";
        $result = mysqli_query($conn, $query);

        // Display each entry
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
