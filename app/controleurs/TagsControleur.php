<?php
/*

   ./app/controleurs/XxxControleur.php

*/

namespace App\Controleurs; 
use \App\Modeles\TagsGestionnaire; 

class TagsControleur extends \Noyau\Classes\ControleurGenerique {

   public function __construct() {
      $this->_table = 'tags';
      parent::__construct();
   }
   
}
 