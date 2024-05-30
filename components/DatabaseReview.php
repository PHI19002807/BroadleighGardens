<?php
require_once 'includes/db.php';

class DatabaseComponent {
    private $conn;

    public function __construct() {
        $this->conn = connectDB();
    }

    public function insertReview($userID, $productID, $reviewText, $rating) {
        $stmt = $this->conn->prepare("INSERT INTO Reviews (UserID, ProductID, ReviewText, Rating) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("iiss", $userID, $productID, $reviewText, $rating);
        $result = $stmt->execute();
        $stmt->close();
        return $result;
    }
}
?>
