<?php
require_once '../controllers/ReviewController.php';


$userID = $_SESSION['UserID']; // Get the user ID from the session
$productID = $_POST['product'];
$reviewText = $_POST['review'];
$rating = $_POST['rating'];

//Instantiate the ReviewController
$reviewController = new ReviewController();

// ubmit the review
$message = $reviewController->submitReview($userID, $productID, $reviewText, $rating);

//Redirect back to home page with a message
header("Location: ../Home.php?message=" . urlencode($message));
exit();
?>
