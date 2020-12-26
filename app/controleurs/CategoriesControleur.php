<?php
/*

   ./app/controleurs/XxxControleur.php

*/

namespace App\Controleurs; 
use \App\Modeles\CategoriesGestionnaire; 

class CategoriesControleur extends \Noyau\Classes\ControleurGenerique {

   public function __construct() {
      $this->_table = 'categories';
      parent::__construct();
   }
   
}
 