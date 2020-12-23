<?php
/*

      ./noyau/classes/Template.php 
      Classes de l'application

 */

namespace Noyau\Classes;

abstract class Template {
  
   public static function startZone() {
      ob_start();
   }

   public static function stopZone(string $zone) {
      GLOBAL $$zone;
      $$zone .= ob_get_clean();
   }

}
