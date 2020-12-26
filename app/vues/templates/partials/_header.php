<?php
/*

      ./app/vues/template/partials/_header.php

 */
?>

<header>
  <div class="header-area">
    <div class="main-header header-sticky">
      <div class="container">
        <div class="row align-items-center">
          <!-- Logo -->
          <div class="col-xl-2 col-lg-2">
            <div class="logo">
              <a href="<?php echo \Noyau\Classes\App::getRoot(); ?>"><img src="assets/img/logo/logo.png" alt=""></a>
            </div>
          </div>
          <div class="col-xl-10 col-lg-10 col-md-10">
            <!-- Main-menu -->
            <?php include_once '../app/vues/templates/partials/_nav.php'; ?>
          </div>
          <!-- Mobile Menu -->
          <div class="col-12">
            <div class="mobile_menu d-block d-lg-none"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Header End -->
</header>