<?php

    if($_GET['action'] == 'listAuteurs'){
        $controlleurAuteurs->getAllAuteurs();
    }
    if($_GET['action'] == 'addAuteurs'){
        $controlleurAuteurs->formulaireAuteurs();
    }

    if($_GET['action'] == 'createAuteurs'){
        $controlleurAuteurs->createAuteurs();
    }
    if($_GET['action'] == 'updateAuteurs'){
        $controlleurAuteurs->updateAuteurs();
    }
    if($_GET['action'] == 'editAuteurs'){
        $controlleurAuteurs->editAuteurs();
    }
    if($_GET['action']=="deleteAuteurs" ){
        $controlleurAuteurs->deleteAuteurs();
    }
?>