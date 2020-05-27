<?php
$server_name = "alacritas.cis.utas.edu.au";
$user_name = "nlsherpa";
$password = "554385";
$database_name = "nlsherpa";

// Create connection
$conn = new mysqli($server_name, $user_name, $password, $database_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>
