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
    <link rel="stylesheet" href="assets/css/decouverte.css">
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


                    <!-- <li><a data-scroll href="#">Sponsorship</a></li> -->
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

<!-- end -->


<!-- end -->

<header id="site-header" class="site-header valign-center">
    <div class="intro">

        <h2>"La vie n'est pas seulement RESPIRER</h2>

        <h1>C'est aussi avoir <strong>le souffle COUPE </strong>"</h1>

        <p>Alfred Hitchkock</p>
        <a class="btn btn-success"  href="research.php">Rechercher</a>

        <?php
        if (isset($_SESSION['CIN']) )
        {

            ?>
            <a class="btn btn-success"  href="createrando.php">Ajouter </a>


        <?php } ?>




    </div>

</header>



<?php




require ('connexion.php');
$dbConnect = connexionBD::getInstance();





$reqTrois = "SELECT * FROM `rando_proposee` order by `id_rando_prop` "  ;
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

            $id = $res['id_rando_prop'];

            ?>

            <div class="col-md-4 col-sm-6">
                <div class="schedule-box">

                        <img class="im" src="<?php echo $image ?>" alt="" />
                        <p align="center" class="title"><?php echo $lieu ?></p>
                        <div class="overlay"></div>
                        <div class="button"><a href="randodetail.php?id=<?php echo $id; ?>"> Détails </a></div>
                    <div class="time">
                        <time datetime="09:00"><?php echo $date; ?></time>
                    </div>

                    <h3><?php echo $lieu; ?></h3><br>



                </div>
            </div>
        <?php }?>
    </div>
    <br>


</section>

</body>
</html>
