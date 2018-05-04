<!DOCTYPE html>
<html lang="en">
<head>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
        <?php
        if (isset($_SESSION['CIN']) )
        {

            ?>
            <a class="btn btn-success"  href="createrando.php">Ajouter </a>


        <?php } ?>




    </div>

</header>

<br><br><br><br>




<script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/ericwinton/pen/jqKyyq?depth=everything&order=popularity&page=7&q=product&show_forks=false" />

    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
    <style class="cp-pen-styles">body {
            padding-top: 30px;
        }
        .product {
            margin-bottom: 30px;
        }
        .product-inner {
            box-shadow: 0 0 10px rgba(0,0,0,.2);
            padding: 10px;
        }
        .product img {
            margin-bottom: 10px;
        }</style>


<div class="container">
    <div class="row" id="search">
        <form id="search-form" action="recherche.php" method="POST" enctype="multipart/form-data">

       </div>
      <div class="row" id="filter">

            <div class="form-group col-sm-3 col-xs-6">
                <p>Lieu</p>
                  <select name="lieu" data-filter="make" class="filter-make filter form-control" placeholder="lieu">
                      <option value="">choisir lieu </option>
                    <option value="El jam" >El jam</option>
                    <option value="Dogga">Beja</option>
                    <option value="Matmata">Matmata</option>
                    <option value="Wed Zitoun">Wed Zitoun</option>
                    <option value="Feija">Feija</option>


                    </select>
            </div>
            <div class="form-group col-sm-3 col-xs-6">
                <p>Date Depart</p>
                <input class="form-control" name="date" type="date" placeholder="Date de depart" />
            </div>
            <div class="form-group col-sm-3 col-xs-6">
                <p>lieu depart</p>
                <select name="lieu_depart" data-filter="type" class="filter-type filter form-control" placeholder="lieu depart">
                    <option value="">choisir lieu </option>
                    <option value="Bizerte">Bizerte</option>
                    <option value="Tunis centre ville">Tunis Centre Ville</option>
                    <option value="Sousse">Sousse</option>
                </select>
            </div>
          <br><br> <br><br>
        <div class="form-group col-xs-3">
            <button type="submit" class="btn btn-block btn-primary">Recherche</button>
        </div>

        </form>
    </div>

</div>
<br><br><br><br>
<br><br><br><br>

</body></html>
