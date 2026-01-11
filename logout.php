<?php
session_start();  // Start the session

// Destroy the session and redirect to the login page
session_unset();   // Unset all session variables
session_destroy(); // Destroy the session

header("Location: ./login.php");
exit();
?>
