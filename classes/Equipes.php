<?php

class Equipes {
    private string $nom;
    private DateTime $date;
    private Pays $pays;
    private $joueurs = [];

    public function __construct(string $nom, string $date, Pays $pays) {
        $this->nom = $nom;
        $this->date = new DateTime($date);
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
    public function getDate()
    {
        return $this->date->format('Y');
    }

    public function setDate($date)
    {
        $this->date = $date;

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
        $resultat  = "<h3> {$this->nom} </h3>";
        $resultat .= "<h4> {$this->getPays()} {$this->getDate()} </h4>" ;

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