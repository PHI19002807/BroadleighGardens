<?php
session_start();
require '../includes/db.php';
$conn = connectDB();

if (!isset($_SESSION['is_admin']) || !$_SESSION['is_admin']) {
    header("Location: ../login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_user'])) {
    $userID = $_POST['user_id'];
    $stmt = $conn->prepare("DELETE FROM Users WHERE UserID = ?");
    $stmt->bind_param("i", $userID);
    if ($stmt->execute()) {
        echo "User deleted successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}

$usersResult = $conn->query("SELECT * FROM Users");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Users</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <h1>Manage Users</h1>
    <table>
        <tr>
            <th>UserID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        <?php while ($user = $usersResult->fetch_assoc()): ?>
        <tr>
            <td><?php echo $user['UserID']; ?></td>
            <td><?php echo $user['Fname']; ?></td>
            <td><?php echo $user['Lname']; ?></td>
            <td><?php echo $user['Email']; ?></td>
            <td>
                <form action="users.php" method="post">
                    <input type="hidden" name="user_id" value="<?php echo $user['UserID']; ?>">
                    <input type="submit" name="delete_user" value="Delete">
                </form>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
