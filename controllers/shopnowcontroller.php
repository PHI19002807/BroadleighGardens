<?php
require 'includes/db.php';

//Connect to the database
$conn = connectDB();

//Fetch products from the database
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>

<?php
//Close the database connection
$conn->close();
?>
