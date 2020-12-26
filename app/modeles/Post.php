<?php
/*

      ./app/modeles/Post.php

 */

 namespace App\Modeles;

 class Post extends \Noyau\Classes\ModeleGenerique {

    private $_id = null, $_title, $_content, $_image, $_categorie, $_firstname, $_lastname, $_biography, $_avatar;

   // GETTERS
   public function getId() {
      return $this->_id;
   }

   public function getTitle() {
      return $this->_title;
   }

   public function getContent() {
      return $this->_content;
   }

   public function getImage() {
      return $this->_image;
   }

   public function getCategorie() {
      return $this->_categorie;
   }

   public function getFirstname() {
      return $this->_firstname;
   }

   public function getLastname() {
      return $this->_lastname;
   }

   public function getBiography() {
      return $this->_biography;
   }

   public function getAvatar() {
      return $this->_avatar;
   }

    
   // SETTERS 
   public function setId(int $data = null) {
      if (isset($data)):
        $this->_id = $data;
      endif;
   }

   public function setTitle(string $data = null) {
      if (isset($data)):
        $this->_title = $data;
      endif;
   }

   public function setContent(string $data = null) {
      if (isset($data)):
        $this->_content = $data;
      endif;
   }

   public function setImage(string $data = null) {
      if (isset($data)):
        $this->_image = $data;
      endif;
   }

   public function setCategorie(string $data = null) {
      if (isset($data)):
        $this->_categorie = $data;
      endif;
   }

   public function setFirstname(string $data = null) {
      if (isset($data)):
        $this->_firstname = $data;
      endif;
   }

   public function setLastname(string $data = null) {
      if (isset($data)):
        $this->_lastname = $data;
      endif;
   }

   public function setBiography(string $data = null) {
      if (isset($data)):
        $this->_biography = $data;
      endif;
   }

   public function setAvatar(string $data = null) {
      if (isset($data)):
        $this->_avatar = $data;
      endif;
   }

 }
