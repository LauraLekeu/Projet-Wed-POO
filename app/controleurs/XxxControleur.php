<?php
/*

   ./app/controleurs/XxxControleur.php

*/

namespace App\Controleurs; 
use \App\Modeles\XxxGestionnaire; 

class XxxControleur extends \Noyau\Classes\ControleurGenerique {

   public function __construct() {
      $this->_table = 'xxx';
      parent::__construct(); 
   }
   
}
 