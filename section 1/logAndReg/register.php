<?php
require "db.php";

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($db, $_POST['confirm_password']);

    // Check if the passwords match
    if ($password == $confirm_password) {
        // Check if the username already exists
        $query = "SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($db, $query);
        if (mysqli_num_rows($result) == 0) {
            // Add the user to the database
            $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
            mysqli_query($db, $query);

            // Display a success message
            echo "Registration successful.";
        } else {
            // Display an error message
            echo "Username already exists.";
        }
    } else {
        // Display an error message
        echo "Passwords do not match.";
    }
}

mysqli_close($db);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
    <h2>Registration Form</h2>
    <form method="post" action="register.php">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required><br>
        <label for="confirm_password">Confirm Password:</label>
        <input type="password" name="confirm_password" required><br>
        <input type="submit" name="submit" value="Register">
    </form>
</body>
</html>
