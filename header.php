<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="description" content="<?php seo_description(); ?>">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#Navber" aria-controls="Navber" aria-expanded="false" aria-label="ナビゲーションの切替">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="Navber">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" class="dropdown-item" href="<?php echo esc_url( home_url( '/' ) ); ?>news">archive</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">リンク</a>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                ドロップダウン
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">メニュー1</a>
                <a class="dropdown-item" href="#">メニュー2</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">その他</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">無効</a>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
    </header>
