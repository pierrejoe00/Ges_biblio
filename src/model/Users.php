<?php

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'users')]
class Users
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
    private string $pwd;


    #[ORM\Column(type: 'string')]
    private string $email; 

    #[ORM\Column(type: 'integer')]
    private string $numero;       

    
    #[ORM\ManyToOne(targetEntity: Role::class)]
    #[ORM\JoinColumn(nullable: false)]
    private Role $role;

    //Constructeur

    function __construct($nom,$prenom,$pwd,$email,$numero,$role){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->pwd = $pwd;
        $this->email = $email;
        $this->numero = $numero;
        $this->role = $role;
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

    public function getPwd(): string
    {
        return $this->pwd;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getNumero(): int
    {
        return $this->numero;
    }

    public function getRole(): Role
    {
        return $this->role;
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

    public function setPwd(string $pwd): self
    {
        $this->pwd = $pwd;
        return $this;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }
    
    public function setNumero(string $numero): self
    {
        $this->numero = $numero;
        return $this;
    }

    public function setRole(Role $role)
    {
        $this->role = $role;
        return $this;
    }


    

}
?>