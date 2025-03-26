<?php

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'role')]
class Role
{
    /** @var int */
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private int|null $id = null;

    /** @var string */
    #[ORM\Column(type: 'string')]
    private string $nom;

    function __construct($nom){
        $this->nom = $nom;
    }

    public function getId(){
        return $this->id;
    }
    public function getNom(){
        return $this->nom;
    }

    public function setNom(String $nom){
        $this->nom = $nom;
        return $this;
    }

}
?>