<?php

    if($_GET['action'] == 'listProduit'){
        $controlleurProduit->getAllProduit();
    }
    if($_GET['action'] == 'addProduit'){
        $controlleurProduit->formulaireProduit();
    }

    if($_GET['action'] == 'createProduit'){
        $controlleurProduit->createProduit();
    }
    if($_GET['action'] == 'updateProduit'){
        $controlleurProduit->updateProduit();
    }
    if($_GET['action'] == 'editProduit'){
        $controlleurProduit->editProduit();
    }
    if($_GET['action']=="deleteProduit" ){
        $controlleurProduit->deleteProduit();
    }
?>