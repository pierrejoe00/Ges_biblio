<?php
class AuthController {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function showHome() {
        require_once('./src/view/public/home.php');
    }

    public function showLoginForm() {
        require_once('./src/view/auth/login.php');
    }

    public function login($data) {
        $email = $data['email'];
        $password = $data['password'];
        
        $user = $this->userModel->getUserByEmail($email);
        
        if ($user && password_verify($password, $user->getPassword())) {
            $_SESSION['user_id'] = $user->getId();
            $_SESSION['user_role'] = $user->getRole();
            
            // Redirection selon le rôle
            if ($user->getRole() === 'admin') {
                header('Location: index.php?action=admin-dashboard');
            } else {
                header('Location: index.php?action=client-dashboard');
            }
        } else {
            header('Location: index.php?action=login&error=1');
        }
    }

    public function adminDashboard() {
        require_once('./src/view/admin/dashboard.php');
    }

    public function clientDashboard() {
        require_once('./src/view/client/dashboard.php');
    }
}
