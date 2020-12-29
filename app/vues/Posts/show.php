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
<?php echo $post->getTitle(); ?>
<?php Template::stopZone('title'); ?>


<!-- Affectation de $content  -->
<?php Template::startZone(); ?>
   <div class="single-post">
      <div class="feature-img">
         <img class="img-fluid" src="assets/img/blog/<?php echo $post->getImage(); ?>" alt="">
      </div>
      <div class="blog_details">
         <h2><?php echo $post->getTitle(); ?></h2>
         <ul class="blog-info-link mt-3 mb-4">
            <li><a href="#"><i class="fa fa-user"></i><?php echo $post->getCategorie(); ?></a></li>
         </ul>
         <p class="excert"><?php echo $post->getContent(); ?></p>
      </div>
   </div>

   <div class="blog-author">
      <div class="media align-items-center">
         <img src="assets/img/blog/<?php echo $post->getAvatar(); ?>" alt="">
         <div class="media-body">
            <a href="#">
            <h4><?php echo $post->getFirstname(); ?><?php echo $post->getLastname(); ?></h4>
            </a>
            <p><?php echo $post->getBiography(); ?></p>
         </div>
      </div>
   </div>
<?php Template::stopZone('content');?>