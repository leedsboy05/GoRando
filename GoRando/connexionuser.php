<?php
require("connexion.php");
//  Récupération de l'utilisateur et de son pass hashé
$pseudo=$_POST['pseudo'];
$password=$_POST['password'];





$bdd= connexionBD::getInstance();
$req=('select * from `personne` where login='.'"'.$pseudo.'"');
$rep = $bdd->query($req);

$donnee=$rep->fetch();

$passrecup=$donnee['password'];

$nom=$donnee['nom'];
$prenom=$donnee['prenom'];
$cin=$donnee['CIN'];

$response = array();
$posts = array();

$posts[] = array('nom'=> $nom, 'prenom'=> $prenom,'cin'=>$cin);
$response['posts'] = $posts;




// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = password_verify($password, $passrecup);

if (!$donnee)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    if ($isPasswordCorrect) {
        session_start();
        $_SESSION['CIN'] = $donnee['CIN'];
        $_SESSION['pseudo'] = $pseudo;
        $_SESSION['nom'] = $donnee['nom'];
        $_SESSION['prenom'] = $donnee['prenom'];

        # $fp = fopen('results.json', 'w');
        #fwrite($fp, json_encode($posts));
        #fclose($fp);

        #echo 'Vous êtes connecté !';

        header('Location: accueil.php');
        exit();
        #echo 'Bonjour ' . $_SESSION['nom'];

    }
    else {
        echo 'Mauvais identifiant ou mot de passe !';
    }




}

