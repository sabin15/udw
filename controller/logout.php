<?php
session_start();
session_destroy();
unset($_SESSION["username"]);
header("Location:/udw/index.php");
?>
