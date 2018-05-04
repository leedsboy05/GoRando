<?php
/**
 * Created by PhpStorm.
 * User: salim
 * Date: 03/05/2018
 * Time: 11:49
 */


require ('connexion.php');
session_start();
$dbConnect = connexionBD::getInstance();

$CIN=$_SESSION['CIN'];
$id=$_GET['id'];
$cin=$_GET['cin'];










if($cin==$CIN) {

    $reqexist = "SELECT *  FROM `rando_inscrit` WHERE `id_rando_prop` = $id AND `CIN` =$CIN";
    echo $reqexist;
    $repexist=$dbConnect->query($reqexist);
    $resexist = $repexist->fetch();
echo $resexist[0];
    if($resexist==null) {
        $reqReserver = "INSERT INTO `rando_inscrit` (`id_rando_prop`, `CIN`) VALUES ('$id','$cin')";
        $repReserver = $dbConnect->query($reqReserver);

        $req1 = "select `places`from `rando_proposee` where `rando_proposee`.`id_rando_prop` = $id";
        $repReserver1 = $dbConnect->query($req1);

        $resultplaces = $repReserver1->fetch();
        $nb1 = $resultplaces[0];

        echo $nb1;


        $nb = (int)$nb1 - 1;
        echo $nb;


        $sql = "UPDATE `rando_proposee` SET `places`=$nb WHERE `rando_proposee`.`id_rando_prop` = $id";
        echo $sql;

        $rep = $dbConnect->query($sql);

        header('Location: accueil.php');
        exit();
    }
    else{

        header('Location: accueil.php');
        exit();


    }

}