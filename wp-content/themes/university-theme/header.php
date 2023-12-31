<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <?php wp_head() ?>

  </head>
  <body>

  <header class="site-header">
      <div class="container">
        <h1 class="school-logo-text float-left">
          <a href="<?= site_url('/')?>"><strong>Fictional</strong> University</a>
        </h1>
        <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        <div class="site-header__menu group">
          <nav class="main-navigation">
            <!-- <ul>
              <li><a href="<?= site_url('/about-us')?>">About Us</a></li>
              <li><a href="<?=site_url('/shop') ?>">Shop</a></li>
              <li><a href="<?= site_url('/cart')?>">Cart</a></li>
              <li><a href="#">Campuses</a></li>
              <li><a href="#">Blog</a></li>
            </ul> -->

            <?php wp_nav_menu() ?>
          </nav>
          <div class="site-header__util">
            <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
            <a href="#" class="btn btn--small btn--dark-orange float-left">Sign Up</a>
            <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
          </div>
        </div>
      </div>
    </header>