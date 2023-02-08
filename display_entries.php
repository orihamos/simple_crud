<?php
include 'conn.php';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

$sql = "SELECT * FROM entries";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Name</th>";
    echo "<th>Email</th>";
    echo "<th>Message</th>";
    echo "<th>Action</th>";
    echo "</tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['message'] . "</td>";
        echo "<td>";
        echo "<a href='edit_entry.php?id=" . $row['id'] . "'>Edit</a>";
        echo " / ";
        echo "<a href='delete_entry.php?id=" . $row['id'] . "'>Delete</a>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No entries found.";
}

if (isset($_GET['message'])) {
    echo "<p>".$_GET['message']."</p>";
}
mysqli_close($conn);
?>
