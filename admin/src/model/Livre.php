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
    private string $date; 

    
    #[ORM\Column(type: 'string', nullable: true)]
    private ?string $image = null;

    #[ORM\ManyToOne(targetEntity: Auteur::class)]
    #[ORM\JoinColumn(nullable: false)]
    private Auteur $prenom;
    
    #[ORM\ManyToOne(targetEntity: Categorie::class)]
    #[ORM\JoinColumn(nullable: false)]
    private Categorie $categorie;

    //Constructeur

    function __construct($code,$titre, $date,$auteur,$categorie,$image){
        $this->code = $code;
        $this->titre = $titre;
        $this->date = $date;
        $this->auteur = $auteur;
        $this->categorie = $categorie;
        $this->image = $image;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function getTitre(): string
    {
        return $this->titre;
    }

    public function getDate(): date
    {
        return $this->date;
    }

    public function getAuteur(): Auteur
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

    public function setCode(string $code): self
    {
        $this->code = $code;
        return $this;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;
        return $this;
    }

    public function setDate(date $date): self
    {
        $this->date = $date;
        return $this;
    }

    public function setAuteur(Auteur $Auteur)
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