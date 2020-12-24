<?php
/*

   ./app/controleurs/XxxControleur.php

*/

namespace App\Controleurs; 
use \App\Modeles\PostsGestionnaire; 

class PostsControleur extends \Noyau\Classes\ControleurGenerique {

   public function __construct() {
      $this->_table = 'posts';
      parent::__construct();
   }
   
}
 