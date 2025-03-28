<?php

Class UsersController{


    function getAllUsers(){
        global $modelUsers;
        $result = $modelUsers->getAll();
       require_once './src/view/user/listUsers.php';
    }

    function createUsers(){
        global $modelUsers;
        global $modelRole;
        extract($_POST);
        $role = $modelRole->getById($role_id);
        $modelUsers->add($nom,$prenom, $pwd,$email,$numero,$role);
        header("location:index.php?action=listUsers");
    }

    function formulaireUsers(){
        
        global $model;
        global $modelRole;
        $role = $modelRole->getAll();
        require_once("./src/view/user/ajoutUsers.php");
    }
    function editUsers(){
        global $modelUsers;
        global $model;
        global $modelRole;
        extract($_POST);
        $role = $modelRole->getByid($role_id);
        $modelUsers->update($id,$nom,$prenom, $pwd,$email,$numero,$role);
        header("location:index.php?action=listUsers");
    }

    function updateUsers(){
        global $modelUsers;
        global $model;
        global $modelRole;
        $role = $modelRole->getAll();
        $id = $_GET['id'];
        $result =  $modelUsers->getByid($id);
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