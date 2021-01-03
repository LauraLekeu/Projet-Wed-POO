<?php
/*

      ./app/vues/template/partials/_main.php

 */
?>

<main>
  <section class="blog_area section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mb-5 mb-lg-0">
        <?php echo \Noyau\Classes\Template::getZone('content'); ?>
        </div>
        <div class="col-lg-4">
          <?php include_once '../app/vues/templates/partials/_aside.php'; ?>
        </div>
      </div>
    </div>
  </section>
</main>