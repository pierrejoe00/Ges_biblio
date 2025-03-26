<?php

Class UsersController{


    function getAllUsers(){
        global $modelUsers;
        $result = $modelUsers->getAll();
       require_once './src/view/user/listUsers.php';
    }

    function createUsers(){
        global $modelUsers;
        global $model;
        extract($_POST);
        $role = $model->getByid($role_id);
        $modelUsers->add($nom,$prenom, $pwd,$email,$numero,$role);
        header("location:index.php?action=listUsers");
    }

    function formulaireUsers(){
        global $model;
        $role = $model->getAll();
        require_once("./src/view/user/ajoutUsers.php");
    }
    function editUsers(){
        global $modelUsers;
        global $model;
        extract($_POST);
        $role = $mode->getByid($role_id);
        $modelUsers->update($id,$nom,$prenom, $pwd,$email,$numero,$role);
        header("location:index.php?action=listUsers");
    }

    function updateUsers(){
        global $modelUsers;
        global $model;
        $role = $model->getAll();
        $id = $_GET['id'];
        $result =  $modelProduit->getByid($id);
        require_once("./src/view/user/modifierUsers.php");
    }

    function deleteUsers(){
        global $modelUsers;
        $id=$_GET["id"];
        $modelUsers->delete($id);
        header("location:index.php?action=listUsers");
    }

}
?>