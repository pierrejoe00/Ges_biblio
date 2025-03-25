<?php

class LivreModel{

    function getAll(){
        global $entityManager ;
        $result = $entityManager->getRepository(Livre::class)->findAll();
        return $result;
    }

    function add($code,$titre, $date,$auteur,$categorie,$image){
        global $entityManager;
        $livre = new Livre($code,$titre, $date,$auteur,$categorie,$image);
        $livre->setImage($image);
        $entityManager->persist($livre);
        $entityManager->flush();
    }
    function delete($id){
        global $entityManager;
        $livre= $entityManager->getRepository(Livre::class)->find($id);
        $entityManager->remove($livre);
        $entityManager->flush();
    }

    function getByid($id){
        global $entityManager;
        $livre= $entityManager->getRepository(Livre::class)->find($id);
        return $livre;
    }

    function update($id,$nom,$description,$qt,$prix,$categorie,$image){
        global $entityManager;
        $livre = $this->getById($id);
        $livre->setCode($code);
        $livre->setTitre($titre);
        $livre->setDate($date);
        $livre->setAuteur($auteur);
        $livre->setCategorie($categorie);
        $livre->setImage($image);
        $entityManager->flush();
    }

}

?>