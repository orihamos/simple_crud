<?php
require 'conn.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM entries WHERE id=$id";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $email = $row['email'];
    $message = $row['message'];
} ?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit Entry</title>
</head>
<body>

  <h2>Edit Entry</h2>

  <form action="update_entry.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?php echo $name; ?>"><br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?php echo $email; ?>"><br><br>
    <label for="message">Message:</label>
    <textarea id="message" name="message"><?php echo $message; ?></textarea><br><br>
    <input type="submit" value="Update">
  </form> 

</body>
</html>
<?php
mysqli_close($conn);
?>

