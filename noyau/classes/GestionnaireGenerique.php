<?php
/*

      ./noyau/classes/GestionnaireGenerique.php 
      Classes de l'application

 */

namespace Noyau\Classes;
use \Noyau\Classes;

abstract class GestionnaireGenerique {

   protected $_table, $_class;

   protected function __construct() {
      $this->_class = '\App\Modeles\\' . ucfirst(substr($this->_table, 0, -1));
   }

   // METHODES CRUD 

   public function findOneById(int $id) {
      $sql = "SELECT *
              FROM `{$this->_table}`
              WHERE id = :id;";
      $rs = App::getConnexion()->prepare($sql);
      $rs->bindValue(':id', $id, \PDO::PARAM_INT);
      $rs->execute();
      return new $this->_class($rs->fetch(\PDO::FETCH_ASSOC));
    }

    public function findAll(array $data) {
      $sql = "SELECT *
              FROM `{$this->_table}`
              ORDER BY `{$data['orderByField']}` {$data['orderBySens']}
              LIMIT :limit
              OFFSET :offset;";

      $rs = App::getConnexion()->prepare($sql);
      $rs->bindValue(':limit', $data['limit'], \PDO::PARAM_INT);
      $rs->bindValue(':offset', $data['offset'], \PDO::PARAM_INT);
      $rs->execute();
      $tab = $rs->fetchAll(\PDO::FETCH_ASSOC);
   
      
      return $this->fromAssocToObject($tab, $this->_class);
    }



   // AUTRES METHODES 

   protected function fromAssocToObject(array $rs, string $class) { // La fonction va convertir un tableau rs en objet de type 'Post' 
      $tab = [];
      foreach($rs as $r):
         $tab[] = new $this->_class($r);
      endforeach;
      return $tab;
   } 

}
