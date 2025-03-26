<?php

class AuteurModel{

    function getAll(){
        global $entityManager;
        $result = $entityManager->getRepository(Auteur::class)->findAll();
        return $result;
    }

    function add($nom, $prenom, $profession){
        global $entityManager;
        $auteur = new Auteur($nom, $prenom, $profession);
        $entityManager->persist($auteur);
        $entityManager->flush();
    }
    
    function delete($id){
        global $entityManager;
        $auteur = $entityManager->getRepository(Auteur::class)->find($id);
        $entityManager->remove($auteur);
        $entityManager->flush();
    }

    function getByid($id){
        global $entityManager;
        $auteur = $entityManager->getRepository(Auteur::class)->find($id);
        return $auteur;
    }

    function update($id, $nom, $prenom, $profession){
        global $entityManager;
        $auteur = $this->getByid($id);
        $auteur->setNom($nom);
        $auteur->setPrenom($prenom);
        $auteur->setProfession($profession);
        $entityManager->flush();
    }

}

?>