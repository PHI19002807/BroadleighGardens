<?php

class Database {
    private $conn;

    public function __construct() {
        require_once 'includes/db.php'; // Assuming db.php contains the connection code
        $this->conn = connectDB();
    }

    public function getUserByEmail($email) {
        $stmt = $this->conn->prepare("SELECT UserID, Password FROM Users WHERE Email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result()->fetch_assoc();
        $stmt->close();
        return $result;
    }
}

?>
