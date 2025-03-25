<?php

    if($_GET['action'] == 'listUsers'){
        $controlleurUsers->getAllUsers();
    }
    if($_GET['action'] == 'addUsers'){
        $controlleurUsers->formulaireUsers();
    }

    if($_GET['action'] == 'createUsers'){
        $controlleurUsers->createUsers();
    }
    if($_GET['action'] == 'updateUsers'){
        $controlleurUsers->updateUsers();
    }
    if($_GET['action'] == 'editUsers'){
        $controlleurUsers->editUsers();
    }
    if($_GET['action']=="deleteUsers" ){
        $controlleurUsers->deleteUsers();
    }
?>