<?php

require_once 'controllers/UserController.php';

$userController = new UserController();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

     $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $userController->signUp($fname, $lname, $email, $password);
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
