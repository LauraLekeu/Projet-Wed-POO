<?php
/*

      ./app/modeles/XxxGestionnaire.php

 */
 
 namespace App\Modeles;
 use \Noyau\Classes\App;

 class CategoriesGestionnaire extends \Noyau\Classes\GestionnaireGenerique {

    public function __construct() {
      $this->_table = 'categories';
      parent::__construct();
  }

    public function findAll(array $data) {
      $sql = "SELECT COUNT(p.id) AS nbPosts,
                     p.categorie_id,
                     c.name
              FROM posts p
              JOIN categories c ON p.categorie_id = c.id
              GROUP BY c.id
              ORDER BY c.name ASC
              LIMIT :limit
              OFFSET :offset;";

      $rs = App::getConnexion()->prepare($sql);
      $rs->bindValue(':limit', $data['limit'], \PDO::PARAM_INT);
      $rs->bindValue(':offset', $data['offset'], \PDO::PARAM_INT);
      $rs->execute();
      $tab = $rs->fetchAll(\PDO::FETCH_ASSOC);
      return $this->fromAssocToObject($tab, $this->_class);
    }



}
