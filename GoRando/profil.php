<?php
/**
 * Created by PhpStorm.
 * User: Amal
 * Date: 4/11/2018
 * Time: 4:26 PM
 */
require ('connexion.php');
$dbConnect = connexionBD::getInstance();

session_start();
$cin=$_SESSION['CIN'];





$reqPersonne = " SELECT * FROM `personne` WHERE `CIN` = $cin"  ;
$repPersonne = $dbConnect->query($reqPersonne);
$resultPersonne = $repPersonne->fetch();


         $reqRandoProp="SELECT * FROM `rando_proposee` WHERE `CIN` = $cin " ;
         $repRandoProp = $dbConnect->query($reqRandoProp);
         $resultRandoProp= $repRandoProp->fetchAll();

$reqRandoInscrit="SELECT * FROM `rando_inscrit` WHERE `CIN` = $cin " ;
$repRandoInscrit = $dbConnect->query($reqRandoInscrit);
$resultRandoInscrit = $repRandoInscrit->fetchAll();




$nom=$resultPersonne['nom'];
$prenom=$resultPersonne['prenom'];
$login=$resultPersonne['login'];
$email=$resultPersonne['email'];
$age=$resultPersonne['age'];
$tel=$resultPersonne['tel'];
$image2=$resultPersonne['image'];








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
        <section id="one" class="wrapper style1" style="opacity: 0.8;">

            <table>
                <tr>
                    <td style="width: 300px; height: 100px">
                        <div class="image fit flush">

                            <img style="border-radius:100%" src="<?php echo $image2; ?>" alt="" />


                        </div> </td>

                    <td style="vertical-align: top">
                        <h3> <?php echo $nom ;echo("&nbsp"); echo $prenom?> </h3>

                        <span class="glyphicon glyphicon-user"></span>   <?php echo $login; ?>
                        <br>
                        <span class="glyphicon glyphicon-phone-alt"></span>  <?php echo $tel; ?>
                        <br>
                        <span class="glyphicon glyphicon-envelope"></span>
                        <?php echo $email; ?>
                        <br>
                        <span class="glyphicon glyphicon-heart"></span>
                        <?php echo $age; ?>

                </tr>
            </table>


            <header class="special">

                <p style="font-size: medium"></p>
            </header>



            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Randonnées proposées</a></li>
                <li><a data-toggle="tab" href="#menu1"> Mes applications</a></li>


            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">

                        <?php  foreach ($resultRandoProp as $res) {

                        $lieu=$res['lieu'];

                        $date=$res['date'];

                        $image=$res['image'];

                        $id = $res['id_rando_prop'];

                            ?>

                    <ul class="responsive-table">
                        <li class="table-row">
                            <div class="col col-1"><img src="<?php echo $image; ?>" class="ImgRand"></div>
                            <div class="col col-2" ><h5>Randonnée à <?php echo $lieu; ?></h5>

                                <span class="glyphicon glyphicon-calendar"><?php echo $date; ?></span><br><br>
                                <a href="randodetail.php?id=<?php echo $id; ?>"><div><button type="button" class="btn btn-success" name="details" data-toggle="modal" data-target="#myModal">Détails</button></div></a>

                            </div>
                            <a href="annuler.php?id=<?php echo $id; ?>&cin=<?php echo $_SESSION['CIN'];?>"><div class="col col-4" ><button type="button" class="btn" name="annuler">Annuler</button></a>


                        </li>
                    </ul>

                    <?php }?>



                </div>
                <div id="menu1" class="tab-pane fade">


                    <?php  foreach ($resultRandoInscrit as $res) {
                        $id=$res['id_rando_prop'];

                        $req3="SELECT * FROM `rando_proposee` WHERE `id_rando_prop` = $id " ;
                        $rep3 = $dbConnect->query($req3);
                        $result3 = $rep3->fetch();

                        $ciin = $result3['CIN'];
                        $req2="SELECT * FROM `personne` WHERE `CIN` = $ciin " ;
                        $rep2 = $dbConnect->query($req2);
                        $result2 = $rep2->fetch();
                        $nom=$result2['nom'];
                        $prenom=$result2['prenom'];
                        $tell=$result2['tel'];
                        $lieu=$result3['lieu'];

                        $date=$result3['date'];

                        $image3=$result3['image'];

                        ?>

                        <ul class="responsive-table">
                            <li class="table-row">
                                <div class="col col-1"><img src="<?php echo $image3; ?>" class="ImgRand"></div>

                                <div class="col col-2" ><h5>Randonnée à <?php echo $lieu; ?></h5>

                                    <span class="glyphicon glyphicon-user"></span>   Organisée par <?php echo $nom;echo("&nbsp"); echo $prenom ?>
                                    <br>

                                    <span class="glyphicon glyphicon-calendar"><?php echo $date; ?></span><br>
                                    <br>
                                    <a href="randodetail.php?id=<?php echo $id; ?>">
                                        <div><button type="button" class="btn btn-success" name="details" data-toggle="modal" data-target="#myModal">Détails</button></div></a>

                                </div>
                                <div class="col col-3"><button type="button" class="btn btn-success" ">Payer</button></div>

                                <a href="annuler.php?id=<?php echo $id; ?>&cin=<?php echo $_SESSION['CIN'];?>"><div class="col col-4" ><button type="button" class="btn" name="annuler">Annuler</button></a>


                            </li>
                        </ul>

                    <?php }?>


                </div>
            </div>










    </div>
</section>




</body>
</html>
