
<?php


require('connexion.php');

$bdd= connexionBD::getInstance();


    $cin = $_POST['cin'];
    $login = $_POST['login'];
    $pwd = $_POST['password'];


$hashed_password = password_hash($pwd, PASSWORD_DEFAULT);
var_dump($hashed_password);


    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $image=$_FILES["image"]["name"];
    $image1='images/'.$image;




    $req='INSERT INTO `personne` (`CIN`, `login`, `password`, `nom`, `prenom`, `age`, `tel`, `email`, `privilege`,`image`) VALUES ('.'"'.$cin.'"'.','.'"'.$login.'"'.','.'"'.$hashed_password.'"'.','.'"'.$nom.'"'.','.'"'.$prenom.'"'.','.'"'.$age.'"'.','.'"'.$tel.'"'.','.'"'.$email.'"'.',NULL,'.'"'.$image1.'"'.')';

    $rep = $bdd->query($req);

session_start();
$_SESSION['CIN'] = $cin;
header('Location: accueil.php');
exit();


?>



