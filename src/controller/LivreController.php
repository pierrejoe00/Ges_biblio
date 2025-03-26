<?php

class LivreController{

    function getAllLivre(){
        global $modelLivre;
        $result = $modelLivre->getAll();
        require_once './src/view/Livre/listLivre.php';
    }

    function createLivre(){
        global $modelLivre;
        global $model;
        extract($_POST);
        // Vérifier si une image a été uploadée
        if (!empty($_FILES['image']['name'])) {
            $image = $_FILES['image']['name'];
            $tmp_name = $_FILES['image']['tmp_name'];
            
            // Déplacer l'image dans le dossier "uploads/"
            move_uploaded_file($tmp_name, "uploads/" . $image);
        } else {
            $image = NULL; // Aucun fichier sélectionné
        }
        $categorie = $model->getByid($idc);
        $modelLivre->add($code, $titre, $dateEdition, $auteur, $categorie, $image);
        header("location:index.php?action=listLivre");
    }

    function formulaireLivre(){
        global $model;
        $categories = $model->getAll();
        require_once("./src/view/Livre/ajoutLivre.php");
    }

    function editLivre(){
        global $modelLivre;
        global $model;
        extract($_POST);
        $categorie = $model->getByid($idc);
        $livre = $modelLivre->getByid($id);

        // Vérifier si une nouvelle image est uploadée
        if (!empty($_FILES['image']['name'])) {
            $image = $_FILES['image']['name'];
            $tmp_name = $_FILES['image']['tmp_name'];
            move_uploaded_file($tmp_name, "uploads/" . $image);
        } else {
            // Garder l'ancienne image si aucune nouvelle n'est uploadée
            $image = $_POST['old_image'];
        }
        $modelLivre->update($id, $code, $titre, $dateEdition, $auteur, $categorie, $image);
        header("location:index.php?action=listLivre");
    }

    function updateLivre(){
        global $modelLivre;
        global $model;
        $categories = $model->getAll();
        $id = $_GET['id'];
        $result = $modelLivre->getByid($id);
        require_once("./src/view/Livre/modifierLivre.php");
    }

    function deleteLivre(){
        global $modelLivre;
        $id = $_GET["id"];
        $modelLivre->delete($id);
        header("location:index.php?action=listLivre");
    }

}
?>