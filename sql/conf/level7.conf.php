<?php
  $servername = 'localhost';
  $username  = 'root';
  $password = '';
  $database = 'level7';

  // Create connection
  $conn = new mysqli($servername, $username, $password, $database);

  // Check connection
  if ($conn->connect_error) {
      die("Unable to connect to MYSQL server");
  }
?>
