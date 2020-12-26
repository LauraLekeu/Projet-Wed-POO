<?php
/*

      ./www/index.php --- DISPATCHER CENTRAL

*/

require_once '../vendor/autoload.php';

require_once '../app/config/params.php';

// Demarage de l'application
\Noyau\Classes\App::start();

// Connexion
\Noyau\Classes\App::getConnexion();

require_once '../app/routeur.php';
 
// On ne charge le template QUE SI on n'est PAS EN AJAX !!!
if (!(isset($_SERVER['HTTP_X_REQUESTED_WITH'])
&& strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')) {
  require_once '../app/vues/templates/index.php'; // on affiche $zone1
}

// Fermer l'application
\Noyau\Classes\App::close();

