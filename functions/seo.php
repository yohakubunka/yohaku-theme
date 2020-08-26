<?php
function seo_description() {
  if( is_front_page() or is_home() ){
    //トップページの場合の処理
    echo get_bloginfo('description');
  }else{
    $description_str = "";
    if (is_page() ) {
      // 固定ページの場合の処理
      $description_str = mb_substr(strip_tags($post->post_content), 0, 100, 'UTF-8');
      echo $description_str;
    }
    if (is_single() ) {
      //投稿ページの場合の処理
      $description_str = mb_substr(strip_tags($post->post_content), 0, 100, 'UTF-8');
      echo $description_str;
    }
  }
}
 ?>
