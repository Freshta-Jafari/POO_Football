<?php

class Pays {
    private string $nom;
    private array $equipes;
    private array $joueurs;

    public function __construct(string $nom){
        $this->nom = $nom;
       $this->equipes = [];
       $this->joueurs = [];
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

    public function getEquipes()
    {
        return $this->equipes;
    }


    public function setEquipes(array $equipes)
    {
        $this->equipes = $equipes;

        return $this;
    }
    public function getJoueurs()
    {
        return $this->joueurs;
    }

    public function setJoueurs(array $joueurs)
    {
        $this->joueurs = $joueurs;

        return $this;
    }
   
    public function afficherEquipes(): string {
        $resultat  = "<h2> Liste les équipes d'un PAYS : <br> $this </h2>";

        if (empty($this->equipes)) {
            $resultat .= "Aucune équipe disponible.<br>";
        } else {
            foreach ($this->equipes as $equipe) {
                $resultat .= $equipe->getNom() . "<br>";
            }
        }
        return $resultat ;
       }


public function __toString()
{
    return $this->getNom();
}
   
}