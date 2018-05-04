<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GoRando</title>

    <!-- css -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bower_components/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body data-spy="scroll" data-target="#site-nav">

<?php
/**
 * Created by PhpStorm.
 * User: salim
 * Date: 26/03/2018
 * Time: 19:10
 */


session_start ();

if (!isset($_SESSION['CIN']) )
{

?>


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

                <!-- navigation menu -->
                <li class="active"><a data-scroll href="#about">A propos</a></li>
                <li><a data-scroll href="#speakers">Equipe</a></li>
                <li><a data-scroll href="#schedule">Randonnées</a></li>

                <!-- <li><a data-scroll href="#">Sponsorship</a></li> -->
                <li><a data-scroll href="#photos">Photos</a></li>
                <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Se Connecter</a></li>

            </ul>
        </div>
    </div><!-- /.container -->
</nav>

<?php }

else {
    ?>

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

                <!-- navigation menu -->
                <li class="active"><a data-scroll href="#about">A propos</a></li>
                <li><a data-scroll href="#speakers">Equipe</a></li>
                <li><a data-scroll href="#schedule">Randonnées</a></li>

                <!-- <li><a data-scroll href="#">Sponsorship</a></li> -->
                <li><a data-scroll href="#photos">Photos</a></li>
                <li><a href="profil.php">Profil</a></li>
                <li><a href="deconnexion.php">Se déconnecter</a></li>

            </ul>
        </div>
    </div><!-- /.container -->
</nav>





<?php } ?>




<!--
modal
-->
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
                        <input type="password" class="form-control" name="password" placeholder="Enter password">
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
                <form role="form" method="post" action="nouv_personne.php" enctype="multipart/form-data">
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

<!-- end -->

<header id="site-header" class="site-header valign-center">
    <div class="intro">

        <h2>"La vie n'est pas seulement RESPIRER</h2>

        <h1>C'est aussi avoir <strong>le souffle COUPE </strong>"</h1>

        <p>Alfred Hitchkock</p>

        <a class="btn btn-success" href="decouverte.php">Découvrir</a>

        <?php
        if (isset($_SESSION['CIN']) )
        {

        ?>
        <a class="btn btn-success"  href="createrando.php">Ajouter </a>


        <?php } ?>




    </div>
</header>

<section id="about" class="section about">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">

                <h3 class="section-title">A propos de nous</h3>

                <p>
                    Nous sommes un groupe d'étudiants, avons réalisé ce site au sein d'un projet de développement web.
                </p>                    <figure>
                <img alt="" class="img-responsive" src="assets/images/about-us.jpg">
            </figure>

            </div><!-- /.col-sm-6 -->

            <div class="col-sm-6">

                <h3 class="section-title multiple-title">Notre objectif</h3>

                <p>Vous aimez sortir mais vous ne savez pas où aller ? Vous aimez faire des randonnées mais vous ne savez pas où trouver une bonne équipe ? GoRando est le site qu'il vous faut! GoRando est le nouveau guide de sorties en Tunisie qui réunit dans un seul site les meilleurs endroits à visiter en Tunisie, les événements culturels et les excursions et randonnées. Ne perdez plus votre temps à chercher dans plusieurs sites les bons plans de sortie près de chez vous et ne ratez plus aucun événement! GoRando est un véritable guide pour les Tunisiens qui regroupe toutes les bonnes adresses pour passer un bon moment en famille ou entre amis.. </p>
                <br>
                <p>GoRando vous permet de :</p>
                <ul class="list-arrow-right">

                    <li></li>
                    <li>Créer des randonnées</li>
                    <li>Rejoindre des randonnées</li>
                    <li>Découvrir des endroits de la Tunisie</li>

                </ul>

            </div><!-- /.col-sm-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>


<section id="speakers" class="section speakers">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h3 class="section-title">Equipe</h3>

            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <div class="speaker">

                    <figure>
                        <img alt="" class="img-responsive center-block" src="assets/images/speakers/speaker-1.jpg">
                    </figure>

                    <h4>CHAABENE Amal</h4>

                    <ul class="social-block">
                        <li><a href=""><i class="ion-social-twitter"></i></a></li>
                        <li><a href=""><i class="ion-social-facebook"></i></a></li>
                        <li><a href=""><i class="ion-social-linkedin-outline"></i></a></li>
                        <li><a href=""><i class="ion-social-googleplus"></i></a></li>
                    </ul>

                </div><!-- /.speaker -->
            </div><!-- /.col-md-4 -->

            <div class="col-lg-3">
                <div class="speaker">

                    <figure>
                        <img alt="" class="img-responsive center-block" src="assets/images/speakers/speaker-2.jpg">
                    </figure>

                    <h4>NAFFATI Salim</h4>

                    <ul class="social-block">
                        <li><a href=""><i class="ion-social-twitter"></i></a></li>
                        <li><a href=""><i class="ion-social-facebook"></i></a></li>
                        <li><a href=""><i class="ion-social-linkedin-outline"></i></a></li>
                        <li><a href=""><i class="ion-social-googleplus"></i></a></li>
                    </ul>

                </div><!-- /.speaker -->
            </div><!-- /.col-md-4 -->

            <div class="col-lg-3">
                <div class="speaker">

                    <figure>
                        <img alt="" class="img-responsive center-block" src="assets/images/speakers/speaker-3.jpg">
                    </figure>

                    <h4>HAMMOUDA Hajer</h4>


                    <ul class="social-block">
                        <li><a href=""><i class="ion-social-twitter"></i></a></li>
                        <li><a href=""><i class="ion-social-facebook"></i></a></li>
                        <li><a href=""><i class="ion-social-linkedin-outline"></i></a></li>
                        <li><a href=""><i class="ion-social-googleplus"></i></a></li>
                    </ul>

                </div><!-- /.speaker -->
            </div><!-- /.col-md-4 -->


            <div class="col-lg-3">

                <div class="speaker">

                    <figure>
                        <img alt="" class="img-responsive center-block" src="assets/images/speakers/speaker-4.jpg">
                    </figure>

                    <h4>KHASSKHOUSSI Wissem</h4>


                    <ul class="social-block">
                        <li><a href=""><i class="ion-social-twitter"></i></a></li>
                        <li><a href=""><i class="ion-social-facebook"></i></a></li>
                        <li><a href=""><i class="ion-social-linkedin-outline"></i></a></li>
                        <li><a href=""><i class="ion-social-googleplus"></i></a></li>
                    </ul>
                </div>
            </div>


        </div>
    </div>
</section>




<?php




require ('connexion.php');
$dbConnect = connexionBD::getInstance();





$reqTrois = "SELECT * FROM `rando_proposee` order by `id_rando_prop` desc limit 3"  ;
$repTrois = $dbConnect->query($reqTrois);
$resultTrois = $repTrois->fetchAll();
?>

<section id="schedule" class="section schedule">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title">Randonnées</h3>
            </div>
        </div>
        <div class="row">

            <?php
            foreach ($resultTrois as $res) {

            $lieu=$res['lieu'];

            $date=$res['date'];

            $image=$res['image'];

            $heure_depart = $res['heure_départ'];

            ?>

            <div class="col-md-4 col-sm-6">
                <div class="schedule-box" style="background-image:url(<?php echo $image; ?>)">
                    <div class="time">
                        <time datetime="09:00"><?php echo $date; ?></time>
                    </div>
                    <h3><?php echo $lieu; ?></h3>

                </div>
            </div>
            <?php }?>
        </div>
        <br>

        <p align="center">
        <a class="btn btn-success"  href="decouverte.php" >Voir Plus</a></p>
</section>



<section id="photos" class="section photos">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="section-title">Photos</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="grid">

                    <li class="grid-item grid-item-sm-6">
                        <img alt="" class="img-responsive center-block" src="assets/images/photos/photos-1.jpg">
                    </li>

                    <li class="grid-item grid-item-sm-3">
                        <img alt="" class="img-responsive center-block" src="assets/images/photos/photos-2.jpg">
                    </li>

                    <li class="grid-item grid-item-sm-3">
                        <img alt="" class="img-responsive center-block" src="assets/images/photos/photos-3.jpg">
                    </li>

                    <li class="grid-item grid-item-sm-3">
                        <img alt="" class="img-responsive center-block" src="assets/images/photos/photos-5.jpg">
                    </li>

                    <li class="grid-item grid-item-sm-3">
                        <img alt="" class="img-responsive center-block" src="assets/images/photos/photos-6.jpg">
                    </li>

                    <li class="grid-item grid-item-sm-3">
                        <img alt="" class="img-responsive center-block" src="assets/images/photos/photos-7.jpg">
                    </li>

                    <li class="grid-item grid-item-sm-3">
                        <img alt="" class="img-responsive center-block" src="assets/images/photos/photos-8.jpg">
                    </li>

                    <li class="grid-item grid-item-sm-3">
                        <img alt="" class="img-responsive center-block" src="assets/images/photos/photos-2.jpg">
                    </li>

                    <li class="grid-item grid-item-sm-3">
                        <img alt="" class="img-responsive center-block" src="assets/images/photos/photos-3.jpg">
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="location" class="section location">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <h3 class="section-title">Localisation</h3>
                <address>
                    <p>GoRando<br> Tunis <br> Centre Urbain<br> Phone: +1159t3764<br> Email: contact@gorando.com</p>
                </address>
            </div>
            <div class="col-sm-9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96706.50013548559!2d-78.9870674333782!3d40.76030630398601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sbd!4v1436299406518" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>



<!-- script -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="bower_components/smooth-scroll/dist/js/smooth-scroll.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>