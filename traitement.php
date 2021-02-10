<?php

require ('config.php');

//On déclare en variable les données récuperées du formulaire
$name = $_POST['name'];
$mdp = $_POST['password'];

//On récupere tout le contenu de la table
$username = $dbh -> query('SELECT * FROM login');

//Boucle pour déterminer tous les users avec leurs mots de passe
while ($donnees = $username -> fetch()){
//    echo $donnees['username'];
//    echo $donnees['password'];

//    vérification entre la base de données et le formulaire
    if ($name === $donnees['username'] && $mdp === $donnees['password']){
        $authentification = true;
    }else{
        $authentification = false;
    }
//    Vérification de la réponse obtenue
//    var_dump($authentification);

//    Obtention de la bonne combinaison
    if ($authentification === true){
        $validation = true;
    }
}
var_dump($validation);

