<?php

class Joueurs {
    private string $nom;
    private string $prenom;
    private DateTime $dateNaissance;
    private Pays $pays;
    private $equipes = [];
    

    public function  __construct(string $nom, string $prenom, string $dateNaissance, Pays $pays){
        $this -> nom = $nom;
        $this -> prenom = $prenom;
        $this ->dateNaissance = new DateTime($dateNaissance);
        $this ->pays = $pays;
    }
 
    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }
   
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getPays()
    {
        return $this->pays;
    }

  
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    
    public function ajouterEquipe($equipe, $anneeDebut){
        $this -> equipes[] = ['joueur' => $equipe, 'anneeDebut'=> $anneeDebut];
    }
    
    public function age() {
        $today = new DateTime();
        return $today->diff($this->dateNaissance)->y;
    }
 
   public function afficherEquipes(){
        $resultat  = "<h2> Liste la carrière d'un joueur : <br> $this </h2>"; 

    foreach($this -> equipes as $equipe){
        $resultat .= $equipe['joueur'] . " (" . $equipe['anneeDebut'] . ") <br>";
    }
    return $resultat ;
   }

    public function __toString(): string {

        return $this -> prenom ." ". $this->nom;
    }
    
}