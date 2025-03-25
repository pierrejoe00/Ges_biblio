<?php

Class AuteurController{


    function getAllAuteur(){
        global $modelAuteur;
        $result = $modelAuteur->getAll();
       require_once './src/view/role/listAuteur.php';
    }

    function createAuteur(){
        global $modelAuteur;
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $profession = $_POST['profession'];
        $modelAuteur->add($nom,$prenom,$profession);
        header("location:index.php?action=listAuteur");
    }

    function formulaireAuteur(){
        require_once("./src/view/role/ajoutAuteur.php");
    }
    function editAuteur(){
        global $modelAuteur;
        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $profession = $_POST['profession'];
        $modelAuteur->update($id,$nom,$prenom,$profession);
        header("location:index.php?action=listAuteur");
    }

    function updateAuteur(){
        global $modelAuteur;
        $id = $_GET['id'];
        $result =  $modelAuteur->getByid($id);
        require_once("./src/view/role/modifierAuteur.php");
    }

    function deleteAuteur(){
        global $modelAuteur;
        $id=$_GET["id"];
        $modelAuteur->delete($id);
        header("location:index.php?action=listAuteur");
    }

}
?>