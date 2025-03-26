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

    #[ORM\Column(type: 'string')]
    private string $nom;

    #[ORM\Column(type: 'string')]
    private string $prenom;  
    
    #[ORM\Column(type: 'string')]
    private string $profession;

    //Constructeur
    function __construct($nom, $prenom, $profession){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->profession = $profession;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function getProfession(): string
    {
        return $this->profession;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;
        return $this;
    }

    public function setProfession(string $profession): self
    {
        $this->profession = $profession;
        return $this;
    }
}
?>