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
            ORDER BY p.`{$data['orderByField']}` {$data['orderBySens']}
            LIMIT :limit
            OFFSET :offset;";
    $rs = App::getConnexion()->prepare($sql);
    $rs->bindValue(':limit', $data['limit'], \PDO::PARAM_INT);
    $rs->bindValue(':offset', $data['offset'], \PDO::PARAM_INT);
    $rs->execute();
    $tab = $rs->fetchAll(\PDO::FETCH_ASSOC);
    return $this->fromAssocToObject($tab, $this->_class);
  }


    public function findOneById(int $id) {
      $sql = "SELECT *, 
                      p.id, 
                      p.created_at,
                      c.name AS categorie
              FROM posts p
              JOIN categories c ON p.categorie_id = c.id
              JOIN authors a ON p.author_id = a.id
              WHERE p.id = :id;";
      $rs = App::getConnexion()->prepare($sql);
      $rs->bindValue(':id', $id, \PDO::PARAM_INT);
      $rs->execute();
      return new $this->_class($rs->fetch(\PDO::FETCH_ASSOC));
    }




  }
