<?php
    require_once("./bootstrap.php");
    require_once("./src/controller/AuthController.php");

    session_start();

    // Page d'accueil commune
    if(!isset($_GET['action'])) {
        require_once("./src/view/public/header.php");
        $homePage = "./src/view/public/home.php";
        if(file_exists($homePage)) {
            include($homePage);
            require_once("./src/view/public/footer.php"); 
        } else {
            die("Erreur : fichier home.php introuvable");
        }
        exit();
    }

    // Gérer les actions publiques (login/register) avant de charger les controllers admin
    if(isset($_GET['action'])) {
        if($_GET['action'] === 'login') {
            require_once("./src/view/public/header.php");
            require_once("./src/view/public/login.php");
            require_once("./src/view/public/footer.php");
            exit();
        }
        if($_GET['action'] === 'register') {
            require_once("./src/view/public/header.php");
            require_once("./src/view/public/register.php");
            require_once("./src/view/public/footer.php");
            exit();
        }
    }

    // À partir d'ici, charger les controllers admin et autres routes protégées
    // Vérification de la session et des droits d'accès
    if(!isset($_SESSION['user_type'])) {
        header('Location: index.php?action=login');
        exit();
    }

    // Redirection selon le type d'utilisateur
    if($_SESSION['user_type'] === 'client') {
        header('Location: ./client/index.php?action=' . $_GET['action']);
        exit();
    } elseif($_SESSION['user_type'] !== 'admin') {
        header('Location: index.php?action=login');
        exit();
    }

    // Admin controllers - chargés uniquement si l'utilisateur est admin
    require_once("./src/controller/admin/CategorieController.php");
    require_once("./src/controller/admin/LivreController.php");
    require_once("./src/controller/admin/RoleController.php");
    require_once("./src/controller/admin/UsersController.php");
    require_once("./src/controller/admin/AuteurController.php");

    // Client controllers
    require_once("./src/controller/client/CatalogueController.php");

    // Models
    require_once("./src/model/CategorieModel.php");
    require_once("./src/model/Categorie.php");
    require_once("./src/model/LivreModel.php");
    require_once("./src/model/Livre.php");
    require_once("./src/model/RoleModel.php");
    require_once("./src/model/Role.php");
    require_once("./src/model/UsersModel.php");
    require_once("./src/model/Users.php");
    require_once("./src/model/AuteurModel.php");
    require_once("./src/model/Auteur.php");

    // Admin instances
    $controlleur = new Admin\CategorieController();
    $model = new CategorieModel();

    $controlleurLivre = new Admin\LivreController();
    $modelLivre = new LivreModel();

    $controlleurRole = new Admin\RoleController();
    $modelRole = new RoleModel();

    $controlleurUsers = new Admin\UsersController();
    $modelUsers = new UsersModel();

    $controlleurAuteur = new Admin\AuteurController();
    $modelAuteur = new AuteurModel();

    // Client instances
    $controlleurCatalogue = new Client\CatalogueController();

    if(isset($_GET['action'])){
        if($_GET['action'] === 'login') {
            require_once("./src/view/public/header.php");
            require_once("./src/view/public/login.php");
            require_once("./src/view/public/footer.php");
            exit();
        }
        if($_GET['action'] === 'register') {
            $authController->handleAuth($_GET['action']);
        } else {
            // Routes administrateur uniquement
            require_once './src/routes/admin/CategorieRoute.php';
            require_once './src/routes/admin/LivreRoute.php';
            require_once './src/routes/admin/RoleRoute.php';
            require_once './src/routes/admin/UsersRoute.php';
            require_once './src/routes/admin/AuteurRoute.php';
        }
    }
?>