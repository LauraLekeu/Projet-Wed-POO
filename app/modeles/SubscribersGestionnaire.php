<?php
/*

      ./app/modeles/NewsletterGestionnaire.php

 */
 
 namespace App\Modeles;
 use \Noyau\Classes\App;

 class SubscribersGestionnaire extends \Noyau\Classes\GestionnaireGenerique {

    public function __construct() {
      $this->_table = 'subsribers';
      parent::__construct();
  }

    public function insertOneById($data) {
  
      $sql = "INSERT INTO subscribers
              SET email = :email,
                  created_at = NOW();";
      $rs = App::getConnexion()->prepare($sql);
      $rs->bindValue(':email', $data, \PDO::PARAM_STR);
      return $rs->execute();
    }



}
