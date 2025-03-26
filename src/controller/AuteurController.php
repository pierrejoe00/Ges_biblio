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
        extract($_POST); // extraction des variables
        // Vérifiez la cohérence du nom de variable (prefession vs profession)
        $modelAuteur->add($nom, $prenom, $profession);
        header("location:index.php?action=listAuteurs");
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
        header("location:index.php?action=listAuteurs");
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
        header("location:index.php?action=listAuteurs");
    }

}
?>