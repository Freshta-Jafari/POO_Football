<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="styles.css">
    <title>Gestion d'Équipes de Football</title>
</head>
<body>
    
     <div id="container">   
    <h3>liste les équipes d'un PAYS</h3>
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-text">
            <p>
         
            </p>
        </div>
    </div>
    <div class="card">
    <div class="card-header">
        </div>
        <div class="card-text">
            <p>
        
            </p>
        </div>
    </div>
    <div class="card">
    <div class="card-header">
        </div>
        <div class="card-text">
            <p>
         
            </p>
        </div>
    </div>
    <div class="card">
    <div class="card-header">
        </div>
        <div class="card-text">
            <p>
        
            </p>
        </div>
    </div>
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

$equipe1 = new Equipes("PSG", "1970",$pays1);
$equipe2 = new Equipes("Racing Club Stars", "1906",$pays1);
$equipe3 = new Equipes("FC Barcelone",  "1899",$pays2);
$equipe4 = new Equipes("Real Madrid",  "1902",$pays2);
$equipe5 = new Equipes("Munchester United",  "1878",$pays3);
$equipe6 = new Equipes("Juventus",  "1897",$pays4);


$joueur1 = new Joueurs("Mbappe", prenom: "Killian", dateNaissance: "1991",pays: $pays1);
$joueur2 = new Joueurs("Ronaldo", prenom: "Cristiano", dateNaissance: "1982",pays: $pays5);
$joueur3 = new Joueurs("Messi", prenom: "Lionel", dateNaissance: "1985",pays: $pays6);
$joueur4 = new Joueurs("Junior", prenom: "Neymar", dateNaissance: "1990",pays: $pays7);

$pays1->ajouterEquipe($equipe1,"1970");
$pays1->ajouterEquipe($equipe2, "1906");
$pays2->ajouterEquipe($equipe4, "1902");
$pays2->ajouterEquipe($equipe3, "1899");
$pays3->ajouterEquipe($equipe5, "1878");
$pays4->ajouterEquipe($equipe6, "1897");

$equipe1->ajouterJoueur($joueur1,"2017");
$equipe1->ajouterJoueur($joueur3,"2021");
$equipe1->ajouterJoueur($joueur4,"2017");
$equipe2->ajouterJoueur("","");
$equipe3->ajouterJoueur($joueur3,"2004");
$equipe3->ajouterJoueur($joueur4,"2013");
$equipe4->ajouterJoueur($joueur2,"2018");
$equipe5->ajouterJoueur("","");
$equipe6->ajouterJoueur($joueur4,"2017");

$joueur1->ajouterEquipe($equipe1, "2017");
$joueur2->ajouterEquipe($equipe4, "2009");
$joueur2->ajouterEquipe($equipe6, "2018");
$joueur2->ajouterEquipe($equipe5, "2021");
$joueur3->ajouterEquipe($equipe3,"2004");
$joueur3->ajouterEquipe($equipe1,"2021");
$joueur4->ajouterEquipe($equipe3,"2013");
$joueur4->ajouterEquipe($equipe1,"2017");


echo "'<h2> Liste les équipes d'un PAYS : <br> </h2>'";
echo $pays1->afficherEquipes();
echo $pays2->afficherEquipes();
echo $pays3->afficherEquipes();
echo $pays4->afficherEquipes();
echo "'<h2> Liste les joueurs de chaque équipe  : <br> </h2>'";
echo $equipe1->afficherJoueurs();
echo $equipe2->afficherJoueurs();
echo $equipe3->afficherJoueurs();
echo $equipe4->afficherJoueurs();
echo $equipe5->afficherJoueurs();
echo $equipe6->afficherJoueurs();
echo "'<h2>Liste la carrière d'un joueur : <br> </h2>'";
echo $joueur1->afficherEquipes();
echo $joueur2->afficherEquipes();
echo $joueur3->afficherEquipes();
echo $joueur4->afficherEquipes();




?>




</body> 
</html>