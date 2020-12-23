<?php
/*

      ./app/modeles/Xxx.php

 */

 namespace App\Modeles;

 class Xxx extends \Noyau\Classes\ModeleGenerique {

    private $_id = null, $_pseudo;

   // GETTERS
   public function getId() {
      return $this->_id;
   }

   public function getPseudo() {
      return $this->_pseudo;
   }

    
   // SETTERS 
   public function setId(int $data = null) {
      if (isset($data)):
        $this->_id = $data;
      endif;
   }

   public function setPseudo(string $data = null) {
      if (isset($data)):
        $this->_pseudo = $data;
      endif;
   }


 }
