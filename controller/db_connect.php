<?php
$server_name = "sql12.freemysqlhosting.net";
$user_name = "sql12341303";
$password = "XUTuyiNi78";
$database_name = "sql12341303";

// Create connection
$conn = new mysqli($server_name, $user_name, $password, $database_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>
