<?php
session_start();

// Check if logout is requested
if (isset($_GET['logout'])) {
    // Unset all session variables
    session_unset();
    // Destroy the session
    session_destroy();

    // print_r($_SESSION);
    // Redirect to login page
    header('Location: login.php');
    // exit;
}

?>