<?php
    require_once("bootstrap.php");
    require_once("./src/view/public/header.php");
    require_once("./src/view/public/navbar.php");
    require_once("./src/controller/CategorieController.php");
    require_once("./src/controller/LivreController.php");
    require_once("./src/controller/RoleController.php");
    require_once("./src/controller/UsersController.php");
    require_once("./src/controller/AuteurController.php");
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

    $controlleur = new CategorieController();
    $model = new CategorieModel();

    $controlleurLivre = new LivreController();
    $modelLivre = new LivreModel();

    $controlleurRole = new RoleController();
    $modelRole = new RoleModel();

    $controlleurUsers = new UsersController();
    $modelUsers = new UsersModel();

    $controlleurAuteur = new AuteurController();
    $modelAuteur = new AuteurModel();


    if(isset($_GET['action'])){
        require_once './src/routes/CategorieRoute.php';
        require_once './src/routes/LivreRoute.php';
        require_once './src/routes/RoleRoute.php';
        require_once './src/routes/UsersRoute.php';
        require_once './src/routes/AuteurRoute.php';
        
    }

    
?>