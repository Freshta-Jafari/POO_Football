<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="styles.css">
    <title>Gestion d'Équipes de Football</title>
</head>
<!-- <body>
    
    <div id="container">
    <h1>liste les équipes d'un PAYS</h1>
    <div class="card"></div>
    <div class="card"></div>
    <div class="card"></div>
    <div class="card"></div>
    </div>

    <div id="container">
    <h1>liste les joueurs de chaque équipe</h1>
    <div class="card"></div>
    <div class="card"></div>
    <div class="card"></div>
    <div class="card"></div>
    <div class="card"></div>
    <div class="card"></div>
    </div>

    <div id="container">
    <h1>liste la carrière d'un joueur</h1>
    <div class="card"></div>    
    <div class="card"></div>    
    <div class="card"></div>    
    <div class="card"></div>    
    </div>
    
</body> -->
</html>

<?php

spl_autoload_register(function ($class_name) {
    require 'classes/' . $class_name . '.php';
});

$pays1 =new Pays("France");
$pays2 =new Pays("Espagne");
$pays3 =new Pays("Angleterre");
$pays4 =new Pays("Italy");
$pays5 =new Pays("Portugal");
$pays6 =new Pays("Argentine");
$pays7 =new Pays("Bresil");

$equipe1 = new Equipes("PSG", $pays1);
$equipe2 = new Equipes("Racing Club Stars", $pays1);
$equipe3 = new Equipes("FC Barcelone",  $pays2);
$equipe4 = new Equipes("Real Madrid",  $pays2);
$equipe5 = new Equipes("Munchester United",  $pays3);
$equipe6 = new Equipes("Juventus",  $pays4);


$joueur1 = new Joueurs("Mbappe", prenom: "Killian", dateNaissance: "1991",pays: $pays1);
$joueur2 = new Joueurs("Ronaldo", prenom: "Cristiano", dateNaissance: "1982",pays: $pays5);
$joueur3 = new Joueurs("Messi", prenom: "Lionel", dateNaissance: "1985",pays: $pays6);
$joueur4 = new Joueurs("Junior", prenom: "Neymar", dateNaissance: "1990",pays: $pays7);


$joueur1->ajouterEquipe($equipe1, "2017");

$equipe1->ajouterJoueur($joueur1,"2017");
$equipe1->ajouterJoueur($joueur3,"2021");
$equipe1->ajouterJoueur($joueur4,"2017");

$equipe2->ajouterJoueur("","");

$equipe3->ajouterJoueur($joueur3,"2004");
$equipe3->ajouterJoueur($joueur4,"2013");

$equipe4->ajouterJoueur($joueur2,"2018");

$equipe5->ajouterJoueur("","");

$equipe6->ajouterJoueur($joueur4,"2017");


$joueur2->ajouterEquipe($equipe4, "2009");
$joueur2->ajouterEquipe($equipe6, "2018");
$joueur2->ajouterEquipe($equipe5, "2021");

$joueur3->ajouterEquipe($equipe3,"2004");
$joueur3->ajouterEquipe($equipe1,"2021");

$joueur4->ajouterEquipe($equipe3,"2013");
$joueur4->ajouterEquipe($equipe1,"2017");

echo $pays1->afficherEquipes(); 
echo $equipe1->afficherJoueurs(); 
echo $joueur1->afficherEquipes(); 


