<?php

require_once 'components/LoginDatabase.php';

class LoginController {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function login($email, $password) {
        $user = $this->db->getUserByEmail($email);

        if ($user) {
            if (password_verify($password, $user['Password'])) {
                session_start();
                $_SESSION['UserID'] = $user['UserID'];
                header("Location: Home.php");
            } else {
                echo "Invalid email or password.";
            }
        } else {
            echo "No user found with that email.";
        }
    }
}

?>
