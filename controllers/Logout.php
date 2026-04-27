<?php
session_start(); // Starts session
unset($_SESSION['username']); // Removes key

session_destroy(); // Destroys session
header("Location: ../views/login.php"); // Redirect to login

exit(); // Stops all scripts
?>