<?php get_header(); ?>
 <?php get_template_part( 'breadcrumb-list' ); ?>

<div class="container">
  <div class="row">
    <div class="col-3">
      <?php get_sidebar(); ?>
    </div>
    <div class="col-9">
      <ul>
        <?php
        $args = array(
          'posts_per_page' => 10 // 表示件数
        );
        $posts = get_posts( $args );
        foreach ( $posts as $post ): // ループの開始
          setup_postdata( $post ); // 記事データの取得
          ?>
          <li>
            <a href="<?php the_permalink(); ?>">
              <?php the_time('Y/m/d'); ?> / <?php the_title(); ?> /
              <span>
                <?php
                if(mb_strlen($post->post_content, 'UTF-8')>200){
                  $content = get_the_content();
                  $text = strip_tags( strip_shortcodes( $content ) );
                  $content= mb_substr($text, 0, 200, 'UTF-8');
                  echo $content.'……';
                }else{
                  $content = get_the_content();
                  $text = strip_tags( strip_shortcodes( $content ) );
                  echo $text;
                }
                ?>
              </span>
            </a>
          </li>
        <?php
        endforeach; // ループの終了
        ?>
      </ul>
    </div>
  </div>
</div>
<?php get_footer(); ?>
