<html>
<head>
  <title>CRUD Application</title>
</head>
<body>
  <h1>CRUD Application</h1>
  <?php
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
  echo "Connected successfully";
  ?>

  <br>
  <a href="display_entries.php">View Entries</a>
</body>
</html>

