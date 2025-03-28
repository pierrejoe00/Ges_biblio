<?php

class LivreModel{

    function getAll(){
        global $entityManager;
        $result = $entityManager->getRepository(Livre::class)->findAll();
        return $result;
    }

    function add($code, $titre, $dateEdition, $image, $auteur, $categorie){
        global $entityManager;
        $livre = new Livre($code, $titre, $dateEdition, $image, $auteur, $categorie);
        $livre->setImage($image);
        $entityManager->persist($livre);
        $entityManager->flush();
    }

    function delete($id){
        global $entityManager;
        $livre = $entityManager->getRepository(Livre::class)->find($id);
        $entityManager->remove($livre);
        $entityManager->flush();
    }

    function getByid($id){
        global $entityManager;
        $livre = $entityManager->getRepository(Livre::class)->find($id);
        return $livre;
    }

    function update($id, $code, $titre, $dateEdition, $image, $auteur, $categorie){
        global $entityManager;
        $livre = $this->getByid($id);
        $livre->setCode($code);
        $livre->setTitre($titre);
        $livre->setDateEdition($dateEdition);
        $livre->setImage($image);
        $livre->setAuteur($auteur);
        $livre->setCategorie($categorie);
        $entityManager->flush();
    }

}

?>