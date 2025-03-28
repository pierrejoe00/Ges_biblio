<?php

    if($_GET['action'] == 'listLivre'){
        $controlleurLivre->getAllLivre();
    }
    if($_GET['action'] == 'addLivre'){
        $controlleurLivre->formulaireLivre();
    }

    if($_GET['action'] == 'createLivre'){
        $controlleurLivre->createLivre();
    }
    if($_GET['action'] == 'updateLivre'){
        $controlleurLivre->updateLivre();
    }
    if($_GET['action'] == 'editLivre'){
        $controlleurLivre->editLivre();
    }
    if($_GET['action']=="deleteLivre" ){
        $controlleurLivre->deleteLivre();
    }
?>