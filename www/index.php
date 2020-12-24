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

require_once '../app/vues/templates/index.php';

// Fermer l'application
\Noyau\Classes\App::close();

