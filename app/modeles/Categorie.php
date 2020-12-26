<?php
/*

      ./app/modeles/Post.php

 */

 namespace App\Modeles;

 class Categorie extends \Noyau\Classes\ModeleGenerique {

    private $_id = null, $_name, $_nbPosts;

   // GETTERS
   public function getId() {
      return $this->_id;
   }

   public function getName() {
      return $this->_name;
   }

   public function getNbPosts() {
      return $this->_nbPosts;
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

   public function setNbPosts(string $data = null) {
      if (isset($data)):
        $this->_nbPosts = $data;
      endif;
   }
}
