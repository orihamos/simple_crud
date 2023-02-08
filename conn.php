<?php
  define('DB_HOST', 'localhost');
  define('DB_USER', 'root');
  define('DB_PASSWORD', '');
  define('DB_NAME', 'crud');

  try {
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if (!$conn) {
        throw new Exception("Connection failed: " . mysqli_connect_error());
    }
  } catch (Exception $e) {
    error_log($e->getMessage());
    exit("An error occurred. Please try again later.");
  }
?>