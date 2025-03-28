<?php

    if($_GET['action'] == 'listAuteur'){
        $controlleurAuteur->getAllAuteur();
    }
    if($_GET['action'] == 'addAuteur'){
        $controlleurAuteur->formulaireAuteur();
    }

    if($_GET['action'] == 'createAuteur'){
        $controlleurAuteur->createAuteur();
    }
    if($_GET['action'] == 'updateAuteur'){
        $controlleurAuteur->updateAuteur();
    }
    if($_GET['action'] == 'editAuteur'){
        $controlleurAuteur->editAuteur();
    }
    if($_GET['action']=="deleteAuteur" ){
        $controlleurAuteur->deleteAuteur();
    }
?>