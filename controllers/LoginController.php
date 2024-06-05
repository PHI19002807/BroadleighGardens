<?php

require_once 'components/Database.php';

class LoginController {
    private $db;
    //Constructing db connection
    public function __construct() {
        $this->db = new Database();
    }
    //Login function
    public function login($email, $password) {
        $user = $this->db->getUserByEmail($email);

        if ($user) {
            if (password_verify($password, $user['Password'])) {
                session_start();
                $_SESSION['UserID'] = $user['UserID'];
                $_SESSION['LoggedIn'] = true; //Set a flag to indicate the user is logged in
                header("Location: Home.php");
                exit(); //Terminate the script after redirecting
            } else {
                echo "Invalid email or password.";
            }
        } else {
            echo "No user found with that email.";
        }
    }

    public function logout() {
        session_start();
        //Unset all session variables
        $_SESSION = array();
        //Destroy the session
        session_destroy();
        header("Location: Login.php");
        exit(); //Terminate the script after redirecting
    }
    //Function for checking if user is logged in
    public function isLoggedIn() {
        session_start();
        return isset($_SESSION['LoggedIn']) && $_SESSION['LoggedIn'] === true;
    }
}

?>
