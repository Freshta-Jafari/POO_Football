<?php

class Equipes {
    private string $nom;
    private Pays $pays;
    private $joueurs = [];

    public function __construct(string $nom, Pays $pays) {
        $this->nom = $nom;
        $this->pays = $pays;
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

    public function getPays()
    {
        return $this->pays;
    }

    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    public function getJoueurs()
    {
        return $this->joueurs;
    }

    public function setJoueurs($joueurs)
    {
        $this->joueurs = $joueurs;

        return $this;
    }

    public function ajouterJoueur($joueur, $anneeDebut){
        $this -> joueurs[] = ['joueur' => $joueur, 'anneeDebut'=> $anneeDebut];
    }
    
    public function afficherJoueurs(){
        $resultat  = "<h2> Liste les joueurs de chaque équipe : <br> {$this->nom} </h2>";

        foreach ($this -> joueurs as $joueurInfo ){
            $resultat  .= $joueurInfo['joueur'] . "(" . $joueurInfo['anneeDebut'] . ") <br>";
        }
        return $resultat ;
    }

    public function __toString()
    {
        return $this->nom;
    }

}