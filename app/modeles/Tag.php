<?php
/*

      ./app/modeles/Post.php

 */

 namespace App\Modeles;

 class Tag extends \Noyau\Classes\ModeleGenerique {

    private $_id = null, $_name;

   // GETTERS
   public function getId() {
      return $this->_id;
   }

   public function getName() {
      return $this->_name;
   }
   // SETTERS 
   public function setId(int $data = null) {
      if (isset($data)):
        $this->_id = $data;
      endif;
   }

   public function setName(string $data = null) {
      if (isset($data)):
        $this->_name = $data;
      endif;
   }
}
