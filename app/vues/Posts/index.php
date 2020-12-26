<?php
/*

      ./app/vues/auterus/index.php
      Liste des auteurs

 */
?>

<?php  

  use \Noyau\Classes\Template;

  GLOBAL $zoneScripts;
  $zoneScripts .= '<script src="assets/js/index.js"></script>';

  Template::startZone(); 

?>

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