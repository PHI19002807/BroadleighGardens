<?php
require 'includes/db.php';
session_start();
$conn = connectDB();

if (isset($_GET['id'])) {
    $productID = $_GET['id'];
    $productResult = $conn->query("SELECT * FROM Products WHERE ProductID = $productID");
    $product = $productResult->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['UserID'])) {
    $reviewText = $_POST['review'];
    $rating = $_POST['rating'];
    $userID = $_SESSION['UserID'];

    $stmt = $conn->prepare("INSERT INTO Reviews (UserID, ProductID, ReviewText, Rating) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("iisi", $userID, $productID, $reviewText, $rating);
    $stmt->execute();
    $stmt->close();
}

$reviewsResult = $conn->query("SELECT * FROM Reviews WHERE ProductID = $productID");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $product['Name']; ?></title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <h1><?php echo $product['Name']; ?></h1>
    <img src="<?php echo $product['ImageURL']; ?>" alt="<?php echo $product['Name']; ?>">
    <p><?php echo $product['Description']; ?></p>
    <p>$<?php echo $product['Price']; ?></p>

    <h2>Reviews</h2>
    <div class="reviews">
        <?php while ($review = $reviewsResult->fetch_assoc()): ?>
            <div class="review">
                <p><?php echo $review['ReviewText']; ?></p>
                <p>Rating: <?php echo $review['Rating']; ?></p>
            </div>
        <?php endwhile; ?>
    </div>

    <?php if (isset($_SESSION['UserID'])): ?>
        <h2>Write a Review</h2>
        <form action="product.php?id=<?php echo $productID; ?>" method="post">
            <textarea name="review" required></textarea><br>
            <label for="rating">Rating:</label>
            <input type="number" name="rating" min="1" max="5" required><br>
            <input type="submit" value="Submit Review">
        </form>
    <?php endif; ?>
</body>
</html>
