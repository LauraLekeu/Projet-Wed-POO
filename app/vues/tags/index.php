<?php
/*

      ./app/vues/tags/index.php
      Liste des tags

 */
?>


<h4 class="widget_title">Tag Clouds</h4>

<ul class="list">
  <?php foreach($tags as $tag): ?>
    <li>
      <a href="#"><?php echo $tag->getName(); ?></a>
    </li>
  <?php endforeach; ?>
</ul>
