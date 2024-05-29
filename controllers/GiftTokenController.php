<?php
// GiftTokenController.php

class GiftTokenController {
    // Define the showForm() method
    public function showForm() {
        // Include the form component
        include(dirname(__FILE__) . '/../components/gift_token_form.php');
    }

    // Define the handleFormSubmission() method
    public function handleFormSubmission() {
        // Database connection
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "broadleighgardens";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare and bind SQL statement
        $sql = "INSERT INTO gifttokens (Name, Address, City, PostalCode, Country, PhoneNo, Email, Amount, Date, PersonalMessage)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssssdss", $name, $address, $city, $postal_code, $country, $phone, $email, $amount, $date, $personal_message);

        // Validate and sanitize form data
        $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        $address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
        $city = filter_var($_POST['city'], FILTER_SANITIZE_STRING);
        $postal_code = filter_var($_POST['postal_code'], FILTER_SANITIZE_STRING);
        $country = filter_var($_POST['country'], FILTER_SANITIZE_STRING);
        $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $amount = filter_var($_POST['amount'], FILTER_VALIDATE_FLOAT);
        $date = filter_var($_POST['date'], FILTER_SANITIZE_STRING);
        $personal_message = filter_var($_POST['personal_message'], FILTER_SANITIZE_STRING);

        // Validate form data
        if (
            empty($name) || empty($address) || empty($city) || 
            empty($postal_code) || empty($country) || empty($phone) || 
            empty($email) || empty($amount) || empty($date) || empty($personal_message)
        ) {
            die("All fields are required.");
        }

        // Execute the statement
        if ($stmt->execute()) {
            echo "<p>Gift token information inserted successfully.</p>";
        } else {
            // Print any errors
            echo "<p>Error: " . $sql . "<br>" . $stmt->error . "</p>";
        }

        // Close statement and connection
        $stmt->close();
        $conn->close();
    }
}
?>
