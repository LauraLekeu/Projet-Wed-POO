<?php
/*

      ./noyau/classes/Template.php 
      Classes de l'application

 */

namespace Noyau\Classes;

abstract class Utils {
  
  public static function slugification(string $str) {
    return trim(preg_replace(array('/[^a-zA-Z0-9 -]/', '/[ -]+/', '/^-|-$/'), array('', '-', ''), strtolower($str)), '-');
  }


  public static function tronquage($string, $max = 150, $end = '...') :string {
    if (strlen($string) > $max) {
        $string = substr($string, 0, $max - strlen($end)).$end;
    }
    return $string;
  }

}


