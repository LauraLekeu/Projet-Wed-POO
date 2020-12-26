<?php
/*

      ./app/vues/auterus/liste.php
      Liste des auteurs

 */
?>

<?php foreach($posts as $post):?>

  <article class="blog_item">
    <div class="blog_item_img">
      <img class="card-img rounded-0" src="assets/img/blog/<?php echo $post->getImage(); ?>" alt="">
      <a href="post/<?php echo $post->getId(); ?>/<?php echo \Noyau\Classes\Utils::slugification($post->getTitle()); ?>" class="blog_item_date">
        <h3><?php echo $post->getCreated_at('d'); ?></h3>
        <p><?php echo $post->getCreated_at('M'); ?></p>
      </a>
    </div>
    <div class="blog_details">
      <a class="d-inline-block" href="post/<?php echo $post->getId(); ?>/<?php echo \Noyau\Classes\Utils::slugification($post->getTitle()); ?>">
        <h2><?php echo $post->getTitle(); ?></h2>
      </a>
      <p><?php echo \Noyau\Classes\Utils::tronquage($post->getContent()); ?></p>
      <ul class="blog-info-link">
        <li><a href="#"><i class="fa fa-user"></i><?php echo $post->getCategorie(); ?></a></li>
      </ul>
    </div>
  </article>

  <?php endforeach; ?>