<?php

class RoleModel{

    function getAll(){
        global $entityManager ;
        $result = $entityManager->getRepository(Role::class)->findAll();
        return $result;
    }

    function add($nom){
        global $entityManager;
        $role = new Role($nom);
        $entityManager->persist($role);
        $entityManager->flush();
    }
    function delete($id){
        global $entityManager;
        $role = $entityManager->getRepository(Role::class)->find($id);
        $entityManager->remove($role);
        $entityManager->flush();
    }

    function getByid($id){
        global $entityManager;
        $role = $entityManager->getRepository(Role::class)->find($id);
        return $role;
    }

    function update($id,$nom){
        global $entityManager;
        $role = $this->getById($id);
        $role->setNom($nom);
        $entityManager->flush();
    }

}

?>