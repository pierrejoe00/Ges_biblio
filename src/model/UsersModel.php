<?php

class UsersModel{

    function getAll(){
        global $entityManager ;
        $result = $entityManager->getRepository(Users::class)->findAll();
        return $result;
    }

    function add($nom,$prenom,$pwd,$email,$numero){
        global $entityManager;
        $users = new Users($nom,$prenom,$pwd,$email,$numero,$role);
        $entityManager->persist($users);
        $entityManager->flush();
    }
    function delete($id){
        global $entityManager;
        $users= $entityManager->getRepository(Users::class)->find($id);
        $entityManager->remove($users);
        $entityManager->flush();
    }

    function getByid($id){
        global $entityManager;
        $users= $entityManager->getRepository(Users::class)->find($id);
        return $users;
    }

    function update($id,$nom,$prenom,$pwd,$email,$numero,$role){
        global $entityManager;
        $users = $this->getById($id);
        $users->setNom($nom);
        $users->setPrenom($prenom);
        $users->setPwd($pwd);
        $users->setEmail($email);
        $users->setNumero($numero);
        $users->setRole($role);
        $entityManager->flush();
    }

}

?>