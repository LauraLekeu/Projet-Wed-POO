<?php
/*

      ./noyau/classes/Template.php 
      Classes de l'application

 */

namespace Noyau\Classes;

abstract class Template {

   private static $_zones;

   public static function getZone($contenu) {
      
      return SELF::$_zones[$contenu];
   
   }

   public static function setZone($zone, $str) {
      SELF::$_zones[$zone] = $str;
      //  var_dump(SELF::$_zones);
   }
  
   public static function startZone() {
      ob_start();
   }

   public static function stopZone(string $zone) {
      SELF::$_zones[$zone] = ob_get_clean();
   }

   public static function addZones($zones) {
      foreach($zones as $zone):
         SELF::setZone($zone, '');
      endforeach;
   }

}
