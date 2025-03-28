<?php

class AuteurController {

    function getAllAuteur(){
        global $modelAuteur;
        $result = $modelAuteur->getAll();
        require_once './src/view/auteur/listAuteur.php';
    }

    function createAuteur(){
        global $modelAuteur;
        global $model;
        extract($_POST);
        $modelAuteur->add($nom, $prenom, $profession);
        header("location:index.php?action=listAuteur");
        
    }

    function formulaireAuteur(){
        global $model;
        $role = $model->getAll();
        require_once("./src/view/auteur/ajoutAuteur.php");
    }

    function editAuteur(){
        global $modelAuteur;
        global $model;
        extract($_POST); // extraction des variables
        $modelAuteur->update($id, $nom, $prenom, $profession);
        header("Location: index.php?action=listAuteur");
    }

    function updateAuteur(){
        global $modelAuteur;
        global $model;
        $id = $_GET['id']; // définition de la variable $id
        $result =  $modelAuteur->getByid($id);
        require_once("./src/view/auteur/modifierAuteur.php");
    }

    function deleteAuteur(){
        global $modelAuteur;
        $id = $_GET["id"];
        $modelAuteur->delete($id);
        header("Location: index.php?action=listAuteur");
    }

}
?>