<?php
require_once 'components/DatabaseComponent.php';

class ReviewController {
    private $db;
    //Constructing db connection
    public function __construct() {
        $this->db = new DatabaseComponent();
    }

    public function submitReview($userID, $productID, $reviewText, $rating) {
        //Validate inputs if needed

        //Insert review information into the database
        $result = $this->db->insertReview($userID, $productID, $reviewText, $rating);

        if ($result) {
            return "Review submitted successfully.";
        } else {
            return "Error occurred while submitting review.";
        }
    }
}
?>
