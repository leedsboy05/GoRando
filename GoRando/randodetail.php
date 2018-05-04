<?php
/**
 * Created by PhpStorm.
 * User: Amal
 * Date: 4/11/2018
 * Time: 4:26 PM
 */
require ('connexion.php');
session_start();
$dbConnect = connexionBD::getInstance();

$id=$_GET['id'];



$reqRandoDet = " SELECT * FROM `rando_proposee` WHERE `id_rando_prop` = $id"  ;
$repRandoDet = $dbConnect->query($reqRandoDet);
$resultRandoDet = $repRandoDet->fetch();

$lieu=$resultRandoDet['lieu'];
$CIN=$resultRandoDet['CIN'];


$reqPPR="SELECT * FROM `personne` WHERE `CIN` = $CIN " ;
$repPPR = $dbConnect->query($reqPPR);
$resultPPR = $repPPR->fetch();
$nom=$resultPPR['nom'];
$prenom=$resultPPR['prenom'];
$tell=$resultPPR['tel'];

$id_rando = $resultRandoDet['id_rando_prop'];
$heure_depart=$resultRandoDet['heure_départ'];
$lieu_depart=$resultRandoDet['lieu_depart'];
$date=$resultRandoDet['date'];
$nbPlaces=$resultRandoDet['places'];
$description=$resultRandoDet['description'];
$image=$resultRandoDet['image'];
$prix=$resultRandoDet['prix'];






?>

<!DOCTYPE HTML>
<!--
	Caminar by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<head>
    <title> GoRando </title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/main.css">

</head>
<body>

<!-- Header -->

<nav id="site-nav" class="navbar navbar-fixed-top navbar-custom">
    <div class="container">
        <div class="navbar-header">

            <!-- logo -->
            <div class="site-branding">
                <a class="logo" href="accueil.php">

                    <!-- logo image  -->
                    <img src="assets/images/logo.png" alt="Logo">

                    GoRando
                </a>
            </div>

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-items" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div><!-- /.navbar-header -->

        <div class="collapse navbar-collapse" id="navbar-items">
            <ul class="nav navbar-nav navbar-right">


                <?php
                /**
                 * Created by PhpStorm.
                 * User: salim
                 * Date: 26/03/2018
                 * Time: 19:10
                 */



                if (!isset($_SESSION['CIN']) )
                {

                    ?>

                    <!-- <li><a data-scroll href="#">Sponsorship</a></li> -->

                    <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Se Connecter</a></li>


                <?php }

                else {
                    ?>

                    <div class="collapse navbar-collapse" id="navbar-items">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="deconnexion.php">Se déconnecter</a></li>


                        </ul>
                    </div>




                <?php } ?>




            </ul>
        </div>
    </div><!-- /.container -->
</nav>
<header id="header">
    <div class="logo"><a href="#"> <font color="teal"> GoRando</font>  <span style="font-size: medium"> <font color="#778899"> Pleins d'aventures vous attendent </font> </span></a></div>
</header>

<!-- Main -->
<section id="main">
    <div class="inner">

        <!-- One -->
        <section id="one" class="wrapper style1">

            <table>
                <tr>
                    <td style="width: 300px; height: 100px">
                        <div class="image fit flush">

                            <img src="<?php echo $image; ?> " alt="" />


                        </div> </td>

                    <td style="vertical-align: top">
                        <h3>Randonnée à <?php echo $lieu; ?> </h3>

                        <span class="glyphicon glyphicon-user"></span>   Organisée par <?php echo $nom;echo("&nbsp"); echo $prenom ?>
                        <br>
                        <span class="glyphicon glyphicon-phone-alt"></span>  <?php echo $tell; ?>
                        <br>  <br>
                        <span class="glyphicon glyphicon-calendar"></span>
                        <?php echo $date; ?>
                        <span class="glyphicon glyphicon-map-marker"></span>
                        <?php echo $lieu_depart; ?>
                        <span class="glyphicon glyphicon-time"></span>
                        <?php echo $heure_depart; ?>



                    </td>
                    <td style="vertical-align: middle">
                        <p align="center">
                        <span class="glyphicon glyphicon-th-large"> </span> Nombre de places restant <span class="badge badge-primary badge-pill"><?php echo $nbPlaces; ?> </span>
                        <br><br>
                        <font style="font-size: 20px; color: indianred">  <span class="glyphicon glyphicon-usd"></span> Prix  <?php echo $prix; ?> TND </font>
                        <br><br>
                            <?php

                            if (isset($_SESSION['CIN']) )
                            {

                            ?>

                        <a href="reserver.php?id=<?php echo $id; ?>&cin=<?php echo $_SESSION['CIN'];?>" <p align="center"> <button class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up"></span> Réserver </button>   </p> </a>
                        </p></td>

<?php }

else {?>
                    <a href="#" data-toggle="modal" data-target="#myModal"> <p align="center"> <button class="btn btn-success"><span class="glyphicon glyphicon-thumbs-up"></span> Réserver </button>   </p> </a>

            <?php }?>

                    </p></td>

                </tr>
            </table>


            <header class="special">
                <h2>Description</h2>
                <p style="font-size: medium">Attachez vos ceintures...</p>
            </header>

            <div class="content">




                <p>
                
                <?php echo $description; ?>
                </p>
            </div>
        </section>



    </div>
</section>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="padding:10px 30px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4><span class="glyphicon glyphicon-lock"></span> Se connecter</h4>
            </div>
            <div class="modal-body" style="padding:40px 50px;">
                <form role="form" action="connexionuser.php" method="post">
                    <div class="form-group">
                        <label for="usrname"><span class="glyphicon glyphicon-user"></span> Login</label>
                        <input type="text" class="form-control" name="pseudo" placeholder="Enter Login">
                    </div>
                    <div class="form-group">
                        <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Mot de passe</label>
                        <input type="text" class="form-control" name="password" placeholder="Enter password">
                    </div>
                    <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Se connecter</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <p>Vous n'êtes pas membre? <a href="#" data-toggle="modal" data-dismiss="modal" data-target="#myModal1" >Créez compte</a></p>
                <p><a href="#">Mot de passe oublié</a></p>
            </div>
        </div>

    </div>
</div>

<!-- end modal -->

<!-- modal2-->

<div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="padding:10px 30px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4><span class="glyphicon glyphicon-lock"></span> Créez compte</h4>
            </div>
            <div class="modal-body" style="padding:40px 50px;">
                <form role="form" method="post" action="nouv_personne.php">
                    <div class="form-group">
                        <label><span class="glyphicon glyphicon-user"></span> CIN</label>
                        <input type="number" class="form-control" name="cin" placeholder="Enter CIN">
                    </div>
                    <div class="form-group">
                        <label><span class="glyphicon glyphicon-user"></span> Nom</label>
                        <input type="text" class="form-control" name="nom" placeholder="Enter nom">
                    </div>
                    <div class="form-group">
                        <label><span class="glyphicon glyphicon-user"></span> Prénom</label>
                        <input type="text" class="form-control" name="prenom" placeholder="Enter prenom">
                    </div>
                    <div class="form-group">
                        <label><span class="glyphicon glyphicon-eye-close"></span> Login</label>
                        <input type="text" class="form-control" name="login" placeholder="Enter login">
                    </div>
                    <div class="form-group">
                        <label><span class="glyphicon glyphicon-eye-open"></span> Mot de passe</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter password">
                    </div>
                    <div class="form-group">
                        <label><span class="glyphicon glyphicon-envelope"></span> Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label><span class="glyphicon glyphicon-eye-open"></span> Age</label>
                        <input type="number" class="form-control" name="age" placeholder="Enter age">
                    </div>
                    <div class="form-group">
                        <label><span class="glyphicon glyphicon-phone"></span> Téléphone</label>
                        <input type="number" class="form-control" name="tel" placeholder="Enter telephone">
                    </div>
                    <div class="form-group">
                        <label><span class="glyphicon glyphicon-eye-open"></span> Photo</label>
                        <input type="file" class="form-control" name="image" placeholder="Enter photo">
                    </div>
                    <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Se connecter</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Quitter</button>
            </div>
        </div>

    </div>
</div>



</body>
</html>
