<?php
session_start(); // Start the session
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session

// Redirect to the login page or homepage
header('Location: index.php'); // Change 'login.php' to your desired redirect page
exit;
?>
