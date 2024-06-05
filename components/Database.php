<?php

class Database {
    private $conn;

    //Constructs db connection
    public function __construct() {
        require_once 'includes/db.php';
        $this->conn = connectDB();
    }
    //Checks email
    public function checkEmailExists($email) {
        $stmt = $this->conn->prepare("SELECT COUNT(*) FROM Users WHERE Email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($count);
        $stmt->fetch();
        $stmt->close();
        return $count > 0;
    }
    //Inserts user information
    public function insertUser($fname, $lname, $email, $hashedPassword) {
        $stmt = $this->conn->prepare("INSERT INTO Users (Fname, Lname, Email, Password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $fname, $lname, $email, $hashedPassword);
        $result = $stmt->execute();
        $stmt->close();
        return $result;
    }
    //Gets the user by email
    public function getUserByEmail($email) {
        $stmt = $this->conn->prepare("SELECT * FROM Users WHERE Email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        $stmt->close();
        return $user;
    }
}


?>
