<ol itemscope itemtype="https://schema.org/BreadcrumbList" class="breadcrumb-list">
 <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
  <a href="<?php echo esc_url(home_url()); ?>" itemprop="item">
   <span itemprop="name">TOP</span>
  </a> &gt;
  <meta itemprop="position" content="1" />
 </li>
 <?php
  $postId = $post->ID;
  $parentPostArry = array_reverse(get_post_ancestors($post));
  $postTypeObject = get_post_type_object(get_post_type());
  $postTypeName = $postTypeObject->labels->name;
  $taxonomySlug = get_query_var('taxonomy');
  $termName = urldecode(get_query_var('term'));
  if(is_front_page() || is_home()) {
   // トップページ
   return false;
  } else if(is_page()) {
   // 固定ページ
   function is_subpage() {
    global $post;
    if ( is_page() && $post->post_parent ) {
     return $post->post_parent;
    } else {
     return false;
    }
   }
   if(is_subpage()) {
    foreach($parentPostArry as $index => $parentsPostId) {
     echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
     echo '<a href="'.get_permalink($parentsPostId).'" itemprop="item"><span itemprop="name">'.get_the_title($parentsPostId).'</span></a> &gt; ';
     echo '<meta itemprop="position" content="'.($index + 2).'" /></li>';
     $parentPages = $index + 1;
    }
    echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
    echo '<a href="'.get_permalink($postId).'" itemprop="item"><span itemprop="name">'.get_the_title($postId).'</span></a> &gt; ';
    echo '<meta itemprop="position" content="'.($parentPages + 2).'" />';
   } else {
    echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
    echo '<a href="'.get_the_permalink().'" itemprop="item"><span itemprop="name">'.single_post_title('',false).'</span></a> &gt; ';
    echo '<meta itemprop="position" content="2" /></li>';
   }
  } else if(is_post_type_archive()) {
   // カスタム投稿一覧ページ
   echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
   echo '<a href="'.get_post_type_archive_link(get_post_type()).'" itemprop="item"><span itemprop="name">'.$postTypeName.'</span></a> &gt; ';
   echo '<meta itemprop="position" content="2" /></li>';
  } else if(is_tax()) {
   // カスタム分類一覧ページ
   echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
   echo '<a href="'.get_post_type_archive_link(get_post_type()).'" itemprop="item"><span itemprop="name">'.$postTypeName.'</span></a> &gt; ';
   echo '<meta itemprop="position" content="2" /></li>';
   echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
   echo '<a href="'.get_term_link($termName, $taxonomySlug).'" itemprop="item"><span itemprop="name">'.single_term_title('',false).'</span></a> &gt; ';
   echo '<meta itemprop="position" content="3" /></li>';
  } else if(is_singular(get_post_type())) {
   // カスタム投稿詳細ページ
   echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
   echo '<a href="'.get_post_type_archive_link(get_post_type()).'" itemprop="item"><span itemprop="name">'.$postTypeName.'</span></a> &gt; ';
   echo '<meta itemprop="position" content="2" /></li>';
   echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
   echo '<a href="'.get_the_permalink().'" itemprop="item"><span itemprop="name">'.single_post_title('',false).'</span></a> &gt; ';
   echo '<meta itemprop="position" content="3" /></li>';
  } else if(is_search()) {
   // 検索結果ページ
   echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
   echo '<span itemprop="name">キーワード検索結果</span><meta itemprop="position" content="2" /></li>';
  } else if(is_404()) {
   // 検索結果ページ
   echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
   echo '<span itemprop="name">ページが見つかりません</span><meta itemprop="position" content="2" /></li>';
  } else {
   return false;
  }
 ?>
</ol>
