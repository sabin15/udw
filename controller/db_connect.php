<?php
$server_name = "";
$user_name = "";
$password = "";
$database_name = "";

// Create connection
$conn = new mysqli($server_name, $user_name, $password, $database_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>
