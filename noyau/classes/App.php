<?php
/*

      ./noyau/classes/App.php 
      Classes de l'application

 */

namespace Noyau\Classes;

abstract class App {
  private static $_connexion = null, $_root, $_start = false;

  // GETTERS
  public static function getConnexion(){ 
    return SELF::$_connexion;
  }
  public static function getRoot(){ // Chemin vers le dossier racine
    return SELF::$_root;
  }

  // SETTRES
  private static function setConnexion(){
    $dsn = "mysql:host=".HOSTNAME.";dbname=".DBNAME;
    $param = array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

    try {
      SELF::$_connexion = new \PDO($dsn,USERNAME,USERPWD,$param);
      //var_dump(SELF::$_connexion); die();
    }
    catch (\PDOException $e) {
      echo "Erreur !: " . $e->getMessage() . "<br />";
      die();
    }
  }

  private static function setRoot(){
    $root = explode('index.php', $_SERVER['PHP_SELF']);
    SELF::$_root = 'http://' . $_SERVER['HTTP_HOST'].$root[0];
  }

  // AUTRES METHODES
  public static function start() {
    if(SELF::$_start === false):
      session_start();
      SELF::setRoot();
      SELF::setConnexion();
      SELF::$_start = true;
    endif;
  }

  public static function close() {
    SELF::$_connexion = null;
  }
}
