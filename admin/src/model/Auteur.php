<?php

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'auteur')]
class Auteur
{
    /** @var int */
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private int|null $id = null;

    /** @var string */
    #[ORM\Column(type: 'string')]
    private string $Nom;

    #[ORM\Column(type: 'string')]
    private string $Prenom;

    #[ORM\Column(type: 'string')]
    private string $profession;


    function __construct($nom,$prenom,$profession){
        $this->nom = $nom; 
        $this->prenom = $prenom;
        $this->profession = $profession;
    }
        

    public function getId(){
        return $this->id;
    }

    public function getNom(){
        return $this->nom;
    }

    public function getPrenom(){
        return $this->prenom;
    }

    public function getProfession(){
        return $this->profession;
    }

    public function setNom(String $nom){
        $this->nom = $nom;
        return $this->nom;
    }

    public function setPrenom(String $prenom){
        $this->prenom = $prenom;
        return $this->prenom;

    }

    public function setProfession(String $profession){
        $this->profession = $profession;
        return $this->profession;
    }

   




    
}
?>