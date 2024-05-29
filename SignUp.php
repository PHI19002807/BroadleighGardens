<?php
require 'includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect input values
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash the password using bcrypt
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Connect to the database
    $conn = connectDB();

    // Check if the email already exists
    $stmt = $conn->prepare("SELECT COUNT(*) FROM Users WHERE Email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($count);
    $stmt->fetch();
    $stmt->close();

    if ($count > 0) {
        echo "Error: The email address is already registered.";
    } else {
        // Prepare the SQL statement for inserting the new user
        $stmt = $conn->prepare("INSERT INTO Users (Fname, Lname, Email, Password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $fname, $lname, $email, $hashedPassword);

        // Execute the statement
        if ($stmt->execute()) {
            header("Location: Login.php");
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="styles/css/styles.css">
</head>
<body>
    <h2>Register</h2>
    <form action="SignUp.php" method="post">
        <label for="fname">First Name:</label>
        <input type="text" id="fname" name="fname" required><br>
        <label for="lname">Last Name:</label>
        <input type="text" id="lname" name="lname" required><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" value="Register">
    </form>
</body>
</html>
