<div id="config-data">
  <p class="config-mark"><i class="fas fa-wrench"></i></p>
  <p class="indent">
    <i class="fas fa-chevron-circle-down"></i> use template<br>
    <span>
      <?php echo get_template_failename() ?>
    </span>
  </p>

  <p class="indent">
    <i class="fas fa-chevron-circle-down"></i> theme options<br>
      <?php
      $options = get_option( 'theme_prefix_settings' );
      foreach ($options as $key => $value) {
        echo "<span>";
        echo "\$options[".$key."] => <br>";
        echo $value; // $valueにデータが入っている
        echo "</span>";
        echo "<br>";
      }
      ?>
  </p>
</div>
