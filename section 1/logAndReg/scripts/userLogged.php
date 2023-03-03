<?php
require "scripts/db.php";

session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to the login page
    header("Location: login.php");
    exit();
}

// Display the username of the logged in user
$username = $_SESSION['username'];
?>