<?php
/**
 * Created by PhpStorm.
 * User: salim
 * Date: 27/03/2018
 * Time: 14:10
 */

session_start();

session_destroy();

header('Location: accueil.php');
