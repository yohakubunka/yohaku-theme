<footer class="navbar-dark bg-dark py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <p class="footer-sns">
          <i class="fab fa-facebook-square"></i>
          <i class="fab fa-twitter"></i>
          <i class="fab fa-instagram"></i>
        </p>
      </div>
      <div class="col-md-4">
        <p class="copylight">
          Copyright © <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?> </a>All Rights Reserved.
        </p>
      </div>
    </div>
  </div>
</footer>
<script src="<?php echo get_template_directory_uri() ?>/js/particles.js"></script>
<?php wp_footer(); ?>
<?php
global $theme_debug_mode;
if ($theme_debug_mode) {
  get_template_part( 'debug/config-data' );
}
?>
<style>
html {
  margin-top: 0px!important;
}
</style>
</body>
</html>
