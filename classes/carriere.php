<?php

class Carriere {
    private array $joueurs = [];
    private array $equipes = [];
    private DateTime $dateJouer;

    public function __construct(string $dateJouer) {
        $this->dateJouer = new DateTime($dateJouer);
    }


    public function getDateJouer()
    {
        return $this->dateJouer->format('Y');;
    }

    public function setDateJouer($dateJouer)
    {
        $this->dateJouer = $dateJouer;

        return $this;
    }
    public function ajouterJoueur($joueur, $dateNaissance){
        $this -> joueurs[] = ['joueur' => $joueur, 'dateNaissance'=> $dateNaissance];
    }
    public function ajouterEquipe($equipe, $anneeJouer){
        $this -> equipes[] = ['joueur' => $equipe, 'anneeJouer'=> $anneeJouer];
    }
    public function afficherCarrier(){


    }
}