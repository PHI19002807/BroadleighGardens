<?php

class Database {
    private $conn;

    public function __construct() {
        require_once 'includes/db.php'; // Assuming db.php contains the connection code
        $this->conn = connectDB();
    }

    public function checkEmailExists($email) {
        $stmt = $this->conn->prepare("SELECT COUNT(*) FROM Users WHERE Email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($count);
        $stmt->fetch();
        $stmt->close();
        return $count > 0;
    }

    public function insertUser($fname, $lname, $email, $hashedPassword) {
        $stmt = $this->conn->prepare("INSERT INTO Users (Fname, Lname, Email, Password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $fname, $lname, $email, $hashedPassword);
        $result = $stmt->execute();
        $stmt->close();
        return $result;
    }
}

?>
