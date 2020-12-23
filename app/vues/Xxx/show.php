<?php
/*

      ./app/vues/auteurs/show.php
      Vue des auteurs
      Variables disponnibles : ARRAY(OBJ Actualite(id, titre, texte, dateCreation ))

 */

use \Noyau\Classes\Template;

?>

<!-- Affectation de $title  -->
<?php Template::startZone(); ?>
<?php echo $auteur->getPseudo(); ?>
<?php Template::stopZone('title'); ?>


<!-- Affectation de $content  -->
<?php Template::startZone(); ?>
   <h1>Auteur n°<?php echo $auteur->getId(); ?></h1>
   <h2><?php echo $auteur->getPseudo(); ?></h2>
   <hr>
<?php Template::stopZone('content');?>
   
   
