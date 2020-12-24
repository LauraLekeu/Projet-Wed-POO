<?php
/*

      ./app/modeles/XxxGestionnaire.php

 */
 
 namespace App\Modeles;
 use \Noyau\Classes\App;

 class PostsGestionnaire extends \Noyau\Classes\GestionnaireGenerique {

   public function __construct() {
      $this->_table = 'posts';
      parent::__construct();
   }

   public function findAll(array $data) {
    $sql = "SELECT *, 
                   p.id, 
                   p.created_at,
                   c.name AS categorie
            FROM posts p
            JOIN categories c ON p.categorie_id = c.id
            ORDER BY p.created_at DESC
             LIMIT 5;";
    $rs = App::getConnexion()->prepare($sql);
    $rs->execute();
    $tab = $rs->fetchAll(\PDO::FETCH_ASSOC);
    return $this->fromAssocToObject($tab, $this->_class);
  }

 }