<?php

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'livre')]
class Livre
{
    /** @var int */
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private int|null $id = null;

    #[ORM\Column(type: 'string')]
    private string $code; 

    #[ORM\Column(type: 'string')]
    private string $titre; 

    #[ORM\Column(type: 'date')]
    private \DateTime $dateEdition;

    #[ORM\ManyToOne(targetEntity: Auteur::class)]
    #[ORM\JoinColumn(nullable: false)]
    private Auteur $auteur; // 

    #[ORM\Column(type: 'string', nullable: true)]
    private ?string $image = null;
    
    #[ORM\ManyToOne(targetEntity: Categorie::class)]
    #[ORM\JoinColumn(nullable: false)]
    private Categorie $categorie;

    //Constructeur
    function __construct($code, $titre, $auteur, $dateEdition, $categorie, $image){
        $this->code        = $code;
        $this->titre       = $titre;
        $this->auteur      = $auteur;
        $this->dateEdition = $dateEdition;
        $this->categorie   = $categorie;
        $this->image       = $image;
    }
    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): string // changed from getNom
    {
        return $this->code;
    }

    public function getTitre(): string // changed from getDescription
    {
        return $this->titre;
    }

    public function getDateEdition(): \DateTime // changed from getPrix
    {
        return $this->dateEdition;
    }

    public function getAuteur(): Auteur // changed from getQt
    {
        return $this->auteur;
    }

    public function getCategorie(): Categorie
    {
        return $this->categorie;
    }

    public function getImage(): ?string 
    { 
        return $this->image; 
    }

    public function setCode(string $code): self // changed from setNom
    {
        $this->code = $code;
        return $this;
    }

    public function setTitre(string $titre): self // changed from setDescription
    {
        $this->titre = $titre;
        return $this;
    }

    public function setDateEdition(\DateTime $dateEdition): self // changed from setPrix
    {
        $this->dateEdition = $dateEdition;
        return $this;
    }

    public function setAuteur(Auteur $auteur): self // changed from setQt
    {
        $this->auteur = $auteur;
        return $this;
    }
    
    public function setCategorie(Categorie $categorie)
    {
        $this->categorie = $categorie;
        return $this;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;
        return $this;
    }
}
?>