<?php

class Pays {
    private string $nom;
    private $equipes = [];


    public function __construct(string $nom){
        $this->nom = $nom;
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

    public function ajouterEquipe($equipe, $anneeDebut){
        $this -> equipes[] = ['equipe' => $equipe, 'anneeDebut'=> $anneeDebut];
    }

    public function afficherEquipes(){
        $resultat  = "<h3> {$this} </h3>"; 

    foreach($this -> equipes as $equipe){
        $resultat .= $equipe['equipe'] . "<br>";
    }
    return $resultat ;
   }



public function __toString()
{
    return $this->getNom();
}
   

  

}