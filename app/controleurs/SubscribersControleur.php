<?php
/*

   ./app/controleurs/NewsletterControleur.php

*/

namespace App\Controleurs; 
use \App\Modeles\SubscribersGestionnaire; 

class SubscribersControleur extends \Noyau\Classes\ControleurGenerique {

   public function __construct() {
      $this->_table = 'subscribers';
      parent::__construct();
   }
   
}
 