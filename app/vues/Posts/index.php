<?php
/*

      ./app/vues/posts/index.php
      Liste des posts

 */

  use \Noyau\Classes\Template;

?>

<!-- Affectation de $title  -->
<?php Template::startZone(); ?>
<?php echo "Home"; ?>
<?php Template::stopZone('title'); ?>

<?php Template::startZone(); ?> 
<script src="./assets/js/index.js"></script>
<?php Template::stopZone('scripts'); ?>


<?php  Template::startZone(); ?>

<div class="blog_left_sidebar">

<div id="liste-posts">
  <?php include '../app/vues/posts/liste.php' ?>
</div>

  <nav class="blog-pagination justify-content-center d-flex">
    <ul class="pagination">
      <li class="page-item">
        <a href="#" id="more-posts" class="page-link" style="width: auto; padding: 0 1em;">More posts</a>
      </li>
    </ul>
  </nav>
</div>


<?php Template::stopZone('content');?>