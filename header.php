<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="description" content="<?php seo_description(); ?>">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.6.6/lottie.min.js" type="text/javascript"></script>
  </head>
  <body>
    <div id="particles-js"></div>
    <header class="">
      <div class="container">
        <div class="flex align-center justify-center">
          <div class="title mr-auto">
            <div class="flex align-center justify-center logo-wrap">
              <h1><?php bloginfo( 'name' ); ?></h1>
            </div>
          </div>
          <nav>
            <ul class="flex align-center justify-center ml-auto">
              <li><a href="">Top</a></li>
              <li><a href="">News</a></li>
              <li><a href="">About</a></li>
              <li><a href="">Contact</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
