<?php
require "db.php";

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    // Check if the username and password match in the database
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($db, $query);
    if (mysqli_num_rows($result) == 1) {
        // Start the session and redirect to the homepage
        session_start();
        $_SESSION['username'] = $username;
        header("Location: ../index.php");
    } else {
        // Display an error message
        echo "Invalid username or password.";
    }
}

mysqli_close($db);
?>