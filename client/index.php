<?php
    require_once("../bootstrap.php");
    require_once("../src/view/public/header.php");
    require_once("../src/view/public/navbar.php");
    
    session_start();
    
    // Vérification que c'est bien un client
    if(!isset($_SESSION['user_type']) || $_SESSION['user_type'] !== 'client') {
        header('Location: ../index.php');
        exit();
    }

    // Client controllers
    require_once("../src/controller/client/CatalogueController.php");
    $controlleurCatalogue = new Client\CatalogueController();

    if(isset($_GET['action'])) {
        require_once '../src/routes/client/CatalogueRoute.php';
    } else {
        // Page par défaut du client
        $controlleurCatalogue->afficherCatalogue();
    }
?>
