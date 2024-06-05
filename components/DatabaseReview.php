<?php
require_once 'includes/db.php';
//Constructs db connection
class DatabaseComponent {
    private $conn;

    public function __construct() {
        $this->conn = connectDB();
    }
    //Inserts review information
    public function insertReview($userID, $productID, $reviewText, $rating) {
        $stmt = $this->conn->prepare("INSERT INTO Reviews (UserID, ProductID, ReviewText, Rating) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("iiss", $userID, $productID, $reviewText, $rating);
        $result = $stmt->execute();
        $stmt->close();
        return $result;
    }
}
?>
