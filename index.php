<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" 
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles.css">
    <title>Gestion d'Équipes de Football</title>
</head>
<body>
    
 
  


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

$equipe1 = new Equipe("PSG", "1970",$pays1);
$equipe2 = new Equipe("Racing Club Stars", "1906",$pays1);
$equipe3 = new Equipe("FC Barcelone",  "1899",$pays2);
$equipe4 = new Equipe("Real Madrid",  "1902",$pays2);
$equipe5 = new Equipe("Munchester United",  "1878",$pays3);
$equipe6 = new Equipe("Juventus",  "1897",$pays4);


$joueur1 = new Joueur("Mbappe", prenom: "Killian", dateNaissance: "1991",pays: $pays1);
$joueur2 = new Joueur("Ronaldo", prenom: "Cristiano", dateNaissance: "1982",pays: $pays5);
$joueur3 = new Joueur("Messi", prenom: "Lionel", dateNaissance: "1985",pays: $pays6);
$joueur4 = new Joueur("Junior", prenom: "Neymar", dateNaissance: "1990",pays: $pays7);

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



?>
<div id="container">


    <section class="section-pays">   
    <h3>liste les équipes d'un PAYS</h3>
    <div class="card-pays">
        <?php   echo $pays1->afficherEquipes(); ?>
        
    </div>
    <div class="card-pays">
        <?php   echo $pays2->afficherEquipes(); ?>
        
    </div>
    <div class="card-pays">
        <?php   echo $pays3->afficherEquipes(); ?>
        
    </div>
    <div class="card-pays">
        <?php   echo $pays4->afficherEquipes(); ?>
        
    </div>
    </section>

  
    <section class="section-equipes">
    <h3>liste les joueurs de chaque équipe</h3>
    <div class="card-equipes">
    <?php   echo $equipe1->afficherJoueurs(); ?>
        </div>
        <div class="card-equipes">
    <?php   echo $equipe2->afficherJoueurs(); ?>
        </div>
        <div class="card-equipes">
    <?php   echo $equipe3->afficherJoueurs(); ?>
        </div>
        <div class="card-equipes">
    <?php   echo $equipe4->afficherJoueurs(); ?>
        </div>
        <div class="card-equipes">
    <?php   echo $equipe5->afficherJoueurs(); ?>
        </div>
        <div class="card-equipes">
    <?php   echo $equipe6->afficherJoueurs(); ?>
        </div>
    </section>

    <section class="section-joueurs">
    <h3>liste la carrière d'un joueur</h3>
    <div class="card-joueurs">
        <?php  echo $joueur1->afficherEquipes();  ?>
    </div>
    <div class="card-joueurs">
        <?php  echo $joueur2->afficherEquipes();  ?>
    </div>
    <div class="card-joueurs">
        <?php  echo $joueur3->afficherEquipes();  ?>
    </div>
    <div class="card-joueurs">
        <?php  echo $joueur4->afficherEquipes();  ?>
    </div>
    </section>




    </div>

</body> 
</html>