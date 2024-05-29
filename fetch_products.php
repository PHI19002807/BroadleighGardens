<?php
require 'includes/db2.php'; // Ensure this path is correct

// Check if the database connection is established
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$category = isset($_GET['category']) ? $_GET['category'] : '';

$sql = "SELECT * FROM products";
if (!empty($category)) {
    $sql .= " WHERE Category = ?";
}

$stmt = $conn->prepare($sql);
if ($stmt === false) {
    die("Prepare failed: " . $conn->error);
}

if (!empty($category)) {
    $stmt->bind_param('s', $category);
}

$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='product'>";
        echo "<img src='" . $row["ImageURL"] . "' alt='" . $row["Name"] . "'>";
        echo "<h2>" . $row["Name"] . "</h2>";
        echo "<p>" . $row["Description"] . "</p>";
        echo "<p>Price: £" . $row["Price"] . "</p>";
        echo "<p>Quantity: " . $row["Quantity"] . "</p>";
        echo "</div>";
    }
} else {
    echo "0 results";
}

$stmt->close();
$conn->close();
?>
