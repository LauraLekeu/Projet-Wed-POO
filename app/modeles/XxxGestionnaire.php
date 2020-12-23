<?php
/*

      ./app/modeles/XxxGestionnaire.php

 */
 
 namespace App\Modeles;
 use \Noyau\Classes\App;

 class XxxGestionnaire extends \Noyau\Classes\GestionnaireGenerique {

   public function __construct() {
      $this->_table = 'xxx';
      parent::__construct();
   }

 }