<?php
switch($_GET['action']) {
    case 'catalogue':
        $controlleurCatalogue->afficherCatalogue();
        break;
    case 'auteurs':
        $controlleurCatalogue->afficherAuteurs();
        break;
    case 'recherche':
        $controlleurCatalogue->rechercherLivres();
        break;
}
?>
