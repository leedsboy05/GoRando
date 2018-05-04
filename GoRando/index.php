<?php
/**
 * Created by PhpStorm.
 * User: salim
 * Date: 26/03/2018
 * Time: 19:10
 */

session_start ();

if (isset($_SESSION['CIN']) )
{
    echo 'Bonjour ' . $_SESSION['nom'];
?>

    <form action="deconnexion.php">


        <input type="submit" value="deconnexion" align="left">

    </form>



<?php

}

else{
    header('Location: acceuil.php');
    echo("pas de sesssion");
}



?>
