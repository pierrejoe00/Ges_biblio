<?php

Class RoleController{


    function getAllRole(){
        global $modelRole;
        $result = $modelRole->getAll();
       require_once './src/view/role/listRole.php';
    }

    function createRole(){
        global $modelRole;
        $nom = $_POST['nom'];
        $modelRole->add($nom);
        header("location:index.php?action=listRole");
    }

    function formulaireRole(){
        require_once("./src/view/role/ajoutRole.php");
    }
    function editRole(){
        global $modelRole;
        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $modelRole->update($id,$nom);
        header("location:index.php?action=listRole");
    }

    function updateRole(){
        global $modelRole;
        $id = $_GET['id'];
        $result =  $modelRole->getByid($id);
        require_once("./src/view/role/modifierRole.php");
    }

    function deleteRole(){
        global $modelRole;
        $id=$_GET["id"];
        $modelRole->delete($id);
        header("location:index.php?action=listRole");
    }

}
?>