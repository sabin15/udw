<?php
$server_name = "localhost";
$user_name = "sabin";
$password = "sabin";
$database_name = "cms";

// Create connection
$conn = new mysqli($server_name, $user_name, $password, $database_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>
