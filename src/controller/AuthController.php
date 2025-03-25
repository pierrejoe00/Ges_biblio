<?php
class AuthController {
    public function handleAuth($action) {
        switch($action) {
            case 'login':
                // Logique de connexion
                // Définir $_SESSION['user_type'] selon le type d'utilisateur
                break;
            case 'register':
                // Logique d'inscription
                break;
        }
    }
}

$authController = new AuthController();
