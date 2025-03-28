<?php

class LivreController{

    function getAllLivre(){
        global $modelLivre;
        $result = $modelLivre->getAll();
        require_once './src/view/Livre/listLivre.php';
    }

    function createLivre(){
        global $modelLivre;
        global $modelAuteur;
        global $model;
        extract($_POST);
        $dateEdition = new DateTime($dateEdition);
        // Vérifier si une image a été uploadée
        if (!empty($_FILES['image']['name'])) {
            $image = $_FILES['image']['name'];
            $tmp_name = $_FILES['image']['tmp_name'];
            
            // Déplacer l'image dans le dossier "uploads/"
            move_uploaded_file($tmp_name, "uploads/" . $image);
        } else {
            $image = NULL; // Aucun fichier sélectionné
        }
        $auteur = $modelAuteur->getByid($ida);
        $categorie = $model->getByid($idc);
        $modelLivre->add($code, $titre, $dateEdition, $image,$auteur, $categorie);
        header("location:index.php?action=listLivre");
    }

    function formulaireLivre(){
        global $model;
        global $modelAuteur;
        $auteur = $modelAuteur->getAll();
        $categories = $model->getAll();
        require_once("./src/view/Livre/ajoutLivre.php");
    }

    function editLivre(){
        global $modelLivre;
        global $model;
        global $modelAuteur;
        extract($_POST);
        $auteur = $modelAuteur->getByid($ida);
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
        $modelLivre->update($id, $code, $titre, $dateEdition,$image, $auteur, $categorie);
        header("location:index.php?action=listLivre");
    }

    function updateLivre(){
        global $modelLivre;
        global $model;
        global $modelAuteur;
        $auteur = $modelAuteur->getAll();
        $categories = $model->getAll();
        $id = $_GET['id'];
        $result = $modelLivre->getByid($id);
        require_once("./src/view/Livre/modifierLivre.php");
    }

    function deleteLivre(){
        global $modelLivre;
        $id = $_GET["id"];
        // Récupérer le livre pour vérifier la présence d'une image
        $livre = $modelLivre->getByid($id);
        if (!empty($livre->image)  && file_exists( $livre->image)) {
            unlink("uploads/" . $livre->image);
        }
        $modelLivre->delete($id);
        header("location:index.php?action=listLivre");
    }

}
?>