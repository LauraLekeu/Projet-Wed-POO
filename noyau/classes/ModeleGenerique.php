<?php
/*

      ./noyau/classes/ModeleGenerique.php

 */
 namespace Noyau\Classes;

 abstract class ModeleGenerique {

   protected $_datePublication;

   // Constructeur
   public function __construct(array $data = null) {
     if ($data) :
       $this->hydrater($data);
     endif;
   }

   // GETTERS 
   public function getDatePublication(string $format = 'Y-m-d- H:i:s'){
      return $this->_datePublication->format('l j F Y');
   }

   // SETTERS
   public function setDatePublication(string $data = null) {
      if (isset($data)):
         $this->_datePublication = new \DateTime($data); 
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
