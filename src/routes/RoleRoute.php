<?php

    if($_GET['action'] == 'listRole'){
        $controlleurRole->getAllRole();
    }
    if($_GET['action'] == 'addRole'){
        $controlleurRole->formulaireRole();
    }

    if($_GET['action'] == 'createRole'){
        $controlleurRole->createRole();
    }
    if($_GET['action'] == 'updateRole'){
        $controlleurRole->updateRole();
    }
    if($_GET['action'] == 'editRole'){
        $controlleurRole->editRole();
    }
    if($_GET['action']=="deleteRole" ){
        $controlleurRole->deleteRole();
    }
?>