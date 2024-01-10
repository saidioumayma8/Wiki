<?php

class utilisateurController
{
    private $utilisateurDAO;

    public function __construct()
    {
        $this->utilisateurDAO = new utilisateurDAO();
    }

    public function showLoginForm()
    {
        include_once 'app/views/authent/login.php';
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $result = $this->utilisateurDAO->login($email, $password);

            if ($result['success']) {
                // Get user information, including the role and user_id
                $user = $this->utilisateurDAO->getUserByEmail($email);

                $_SESSION['user_id'] = $user->getId();  // Assuming getId() is the method to retrieve the user_id
                $_SESSION['user'] = $user;

                // Check the user's role and redirect accordingly
                if ($user && $user->getRole() === 'admin') {
                    // Admin login successful, redirect to admin page
                    header('Location: index.php?action=adminpage');
                    exit();
                } elseif ($user && $user->getRole() === 'author') {
                    // Author login successful, redirect to author page
                    header('Location: index.php?action=authorpage');
                    exit();
                } else {
                    // Default redirect for other roles or unexpected cases
                    header('Location: index.php?action=home');
                    exit();
                }
            } else {
                // Login failed, display error message
                $errorMessage = $result['message'];
                include_once 'app/views/auth/login.php';
            }
        }
    }


    public function showregisterForm()
    {
        include_once 'app/views/authent/register.php';
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $result = $this->utilisateurDAO->registerUser($username, $email, $password);

            if ($result['success']) {
                // Registration successful, redirect to login page
                header('Location: index.php?action=login');
                exit();
            } else {
                // Registration failed, display error message
                $errorMessage = $result['message'];
                include_once 'app/views/auth/register.php';
            }
        }
    }

    public function logout()
    {
        // Unset all session variables
        $_SESSION = array();
        // Destroy the session
        session_destroy();
        // Redirect to the login page
        header("Location: index.php?action=login");
        exit();
    }
}

?>