<?php
/*

      ./app/vues/auterus/index.php
      Liste des auteurs

 */

use \Noyau\Classes\Template;

?>

<?php Template::startZone(); ?>
<div class="blog_left_sidebar">
<?php foreach($posts as $post):?>
  <article class="blog_item">
    <div class="blog_item_img">
      <img class="card-img rounded-0" src="assets/img/blog/<?php echo $post->getImage(); ?>" alt="">
      <a href="#" class="blog_item_date">
        <h3><?php echo $post->getCreated_at('d'); ?></h3>
        <p><?php echo $post->getCreated_at('M'); ?></p>
      </a>
    </div>
    <div class="blog_details">
      <a class="d-inline-block" href="single-blog.html">
        <h2><?php echo $post->getTitle(); ?></h2>
      </a>
      <p><?php echo $post->getContent(); ?></p>
      <ul class="blog-info-link">
        <li><a href="#"><i class="fa fa-user"></i><?php echo $post->getCategorie(); ?></a></li>
      </ul>
    </div>
  </article>
  <?php endforeach; ?>
  <nav class="blog-pagination justify-content-center d-flex">
    <ul class="pagination">
      <li class="page-item">
        <a href="#" class="page-link" style="width: auto; padding: 0 1em;">More posts</a>
      </li>
    </ul>
  </nav>
</div>


<?php Template::stopZone('content');?>