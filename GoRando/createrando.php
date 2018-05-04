<?php
/**
 * Created by PhpStorm.
 * User: salim
 * Date: 26/03/2018
 * Time: 19:10
 */

session_start();

if (isset($_SESSION['CIN']) )
{

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



                    <!-- <li><a data-scroll href="#">Sponsorship</a></li> -->






                    <div class="collapse navbar-collapse" id="navbar-items">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="deconnexion.php">Se déconnecter</a></li>


                        </ul>
                    </div>









            </ul>
        </div>
    </div><!-- /.container -->
</nav>
<header id="header">
    <div class="logo"><a href="#"> <font color="teal"> GoRando</font>  <span style="font-size: medium"> <font color="#778899"> Pleins d'aventures vous attendent </font> </span></a></div>
</header>

   <!-- modal2-->

        <div class="modal-content" style="margin-right : 60px;margin-left : 60px;">
                <div class="modal-header" style="padding:10px 30px;">
                   
                    <h4><span class="glyphicon glyphicon-lock"></span> Créer Randonnée</h4>
                </div>
                <div class="modal-body" style="padding:40px 50px;">
                    <form role="form"  method="post" action="ajouterrando.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <label><span class="glyphicon glyphicon-map-marker"></span> Lieu</label>
                            <input type="text" class="form-control" name="lieu" placeholder="Enter Lieu">
                        </div>
                        <div class="form-group">
                            <label><span class="glyphicon glyphicon-calendar"></span> Date</label>
                            <input type="date" class="form-control" name="date" placeholder="Enter Date">
                        </div>
                        <div class="form-group">
                            <label><span class="glyphicon glyphicon-plane"></span> Heure depart</label>
                            <input type="time" class="form-control" name="heure_départ" placeholder="Enter Heure départ">
                        </div>
                        <div class="form-group">
                            <label><span class="glyphicon glyphicon-plane"></span> Heure retour</label>
                            <input type="time" class="form-control" name="heure_retour" placeholder="Enter Heure retour">
                        </div>
                        <div class="form-group">
                            <label><span class="glyphicon glyphicon-map-marker"></span> lieu de depart</label>
                            <input type="text" class="form-control" name="lieu_depart" placeholder="Enter Lieu départ">
                        </div>
                        <div class="form-group">
                            <label><span class="glyphicon glyphicon-user"></span> nombre de places</label>
                            <input type="number" class="form-control" name="places" placeholder="Enter Nombre de places">
                        </div>
                        <div class="form-group">
                            <label><span class="glyphicon glyphicon-edit"></span> Description</label>
                            <input type="text" class="form-control" name="description" placeholder="Enter Description">
                        </div>
                        <div class="form-group">
                            <label><span class="glyphicon glyphicon-usd"></span> Prix </label>
                            <input type="number" class="form-control" name="prix" placeholder="Enter Prix">
                        </div>
                        <div class="form-group">
                            <label><span class="glyphicon glyphicon-picture"></span>Photo</label>
                            <input type="file" class="form-control" name="image" placeholder="Enter Photo">
                        </div>
                        <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Ajouter </button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Quitter</button>
                </div>
            </div>

        
            
    <!-- end -->

        



        







    




    


    <!-- script -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="bower_components/smooth-scroll/dist/js/smooth-scroll.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>

<?php } ?>