<?php

require_once 'components/Database.php';

class UserController {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function signUp($fname, $lname, $email, $password) {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        // Check if email already exists
        if ($this->db->checkEmailExists($email)) {
            echo "Error: The email address is already registered.";
            return;
        }

        // Insert user into database
        if ($this->db->insertUser($fname, $lname, $email, $hashedPassword)) {
            header("Location: Login.php");
        } else {
            echo "Error: Failed to register user.";
        }
    }
}

?>
