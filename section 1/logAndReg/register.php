

<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
    <h2>Registration Form</h2>
    <form method="post" action="scripts/register.php">
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
