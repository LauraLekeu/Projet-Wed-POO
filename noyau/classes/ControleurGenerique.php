<?php
/*

      ./noyau/classes/ControleurGenerique.php 

 */

namespace Noyau\Classes;

abstract class ControleurGenerique {

   protected $_gestionnaire, $_table;

   public function __construct() {
      $gestionnaireName = '\App\Modeles\\' . ucfirst($this->_table) . 'Gestionnaire';
      $this->_gestionnaire = new $gestionnaireName;
      
   }

    public function indexAction(array $userData= []) {
      $defaultValue = [
         'view' => 'index',
         'orderByField' => 'id',
         'orderBySens' => 'asc',
         'limit' => 4294967295,
         'offset' => 0
      ];

      $data = array_merge($defaultValue ,$userData);

      $r = $this->_table ;

      $$r = $this->_gestionnaire->findAll($data); 
   
      include '../app/vues/' . $this->_table . '/' . $data['view'] . '.php';
      }
   }


