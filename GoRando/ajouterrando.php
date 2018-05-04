<?php
/**
 * Created by PhpStorm.
 * User: salim
 * Date: 01/05/2018
 * Time: 20:55
 */


require ('connexion.php');
$bdd = connexionBD::getInstance();


session_start();
$cin=$_SESSION['CIN'];

$heure_depart=$_POST['heure_départ'];
$heure_retour=$_POST['heure_retour'];
$lieu_depart=$_POST['lieu_depart'];
$date=$_POST['date'];
$nbPlaces=$_POST['places'];
$description=$_POST['description'];




$prix=$_POST['prix'];
$lieu=$_POST['lieu'];

$image1=$_FILES["image"]["name"];
$image='images/'.$image1;
$req = "INSERT INTO `rando_proposee` (`id_rando_prop`, `lieu`, `date`, `heure_départ`, `heure_retour`, `lieu_depart`, `places`, `description`,`CIN`,`image`, `prix`) VALUES (NULL, '$lieu', '$date', '$heure_depart','$heure_retour','$lieu_depart','$nbPlaces','$description','$cin','$image','$prix')";
$rep = $bdd->query($req);

header('Location: accueil.php');
exit;












