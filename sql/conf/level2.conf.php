<?php
  $servername = 'localhost';
  $username  = 'root';
  $password = '';
  $database = 'level2';
  $flag = "FLAG-a1e8c4268f2f673b5df74c953c16969d";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $database);

  // Check connection
  if ($conn->connect_error) {
      die("Unable to connect to MYSQL server");
  }
?>
