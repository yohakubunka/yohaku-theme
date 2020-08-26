<?php get_header(); ?>
<div class="container">
  <div class="row">
    <?php get_template_part( 'breadcrumb-list' ); ?>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-3">
      <?php get_sidebar(); ?>
    </div>
    <div class="col-9"><!-- main START --------------------------------------------------------------------------->
      <p>
        <?php the_title(); ?>
        <?php
          $year   = get_the_date( 'Y' );
          $month  = get_the_date( 'm' );
        ?>
        <a href="<?php echo get_month_link( $year, $month ); ?>">
          <?php echo get_the_date(); ?>
        </a>
      </p>
      <?php
        the_content();
      ?>
      <?php
        $categories = get_the_category();
        echo '<ul class="category-list">';
        foreach( $categories as $category ){
        	echo '<li><a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a></li>';
        }
        echo '</ul>';
      ?>
      <?php
        $posttags = get_the_tags();
        if( $posttags ){
        	echo '<ul class="tag-list">';
        	foreach ( $posttags as $tag ) {
        		echo '<li><a href="' . get_tag_link( $tag->term_id ) . '">#' . $tag->name . '</a></li>';
        	}
        	echo '</ul>';
        }
      ?>
    </div><!-- main END --------------------------------------------------------------------------->
  </div>
</div>
<?php get_footer(); ?>
