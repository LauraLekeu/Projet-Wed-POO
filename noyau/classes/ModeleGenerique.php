<?php
/*

      ./noyau/classes/ModeleGenerique.php

 */
 namespace Noyau\Classes;

 abstract class ModeleGenerique {

   protected $_created_at;

   // Constructeur
   public function __construct(array $data = null) {
     if ($data) :
       $this->hydrater($data);
     endif;
   }

   // GETTERS 
   public function getCreated_at(string $format = 'Y-m-d- H:i:s'){
      return $this->_created_at->format($format);
   }

   // SETTERS
   public function setCreated_at(string $data = null) {
      if (isset($data)):
         $this->_created_at = new \DateTime($data); 
      endif;
   } 

   // Hydrateur
   public function hydrater(array $data = null){
      if ($data) :
         foreach ($data as $propriete => $valeur) :
            $nomMethode = 'set' . ucfirst($propriete);
            if (method_exists($this, $nomMethode)) :
            $this->$nomMethode($valeur);
            endif;
         endforeach;
      endif;
   }
 }
