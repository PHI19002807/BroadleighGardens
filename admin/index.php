<?php
session_start();
if (!isset($_SESSION['is_admin']) || !$_SESSION['is_admin']) {
    header("Location: ../login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <h1>Admin Dashboard</h1>
    <ul>
        <li><a href="users.php">Manage Users</a></li>
        <li><a href="products.php">Manage Products</a></li>
        <li><a href="reviews.php">Manage Reviews</a></li>
    </ul>
</body>
</html>
