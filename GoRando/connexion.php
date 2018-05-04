<?php
/**
 * Created by PhpStorm.
 * User: Amal
 * Date: 3/26/2018
 * Time: 12:32 PM
 */

class connexionBD
{
    private static $_dbname = "gorando";
    private static $_user = "root";
    private static $_pwd = "";
    private static $_bdd = null;
    private static $_host = "localhost";

    private function __construct(){
        try{

            self::$_bdd = new PDO("mysql:host=".self::$_host.";dbname=".self::$_dbname.";charset=utf8", self::$_user, self::$_pwd);

        }catch (PDOException $e){
            die('Erreur : '.$e->getMessage());
        }
    }

    public static function getInstance(){
        if(!self::$_bdd){
            new connexionBD();
            return (self::$_bdd);}
            return(self::$_bdd);
        }

}

