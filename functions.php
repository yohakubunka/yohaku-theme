<?php
$theme_debug_mode = True;
// wordpress basic options --------------------------------------------------------------------------------
//@codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support
function my_setup() {
  add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
  add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
  add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
  add_theme_support( 'html5', array( /* HTML5のタグで出力 */
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ) );
}
add_action( 'after_setup_theme', 'my_setup' );


 // add menu --------------------------------------------------------------------------------
 //@codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_nav_menus
function my_menu_init() {
  register_nav_menus( array(
    'global'  => 'グローバルメニュー',
    'utility' => 'ユーティリティメニュー',
    'drawer'  => 'ドロワーメニュー',
  ) );
}
add_action( 'init', 'my_menu_init' );

 // read script style sheet --------------------------------------------------------------------------------
 //headで読み込ませる
function my_script_init() {
  global $theme_debug_mode;
  wp_enqueue_style( 'style-name', get_template_directory_uri() . '/css/bootstrap.css', array(), '1.0.0', 'all' );
  // デバッグモードだった場合はCSSを読み込む
  if ($theme_debug_mode) {
    wp_enqueue_style( 'common_css', get_template_directory_uri() . '/css/common.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'debug_css', get_template_directory_uri() . '/debug/css/debug.css', array(), '1.0.0', 'all' );
  }else {
    wp_enqueue_style( 'common_css', get_template_directory_uri() . '/css/common.min.css', array(), '1.0.0', 'all' );
  }
  // fontawesome
  wp_enqueue_script('fontawesome_js', 'https://kit.fontawesome.com/39468e6aef.js', array());
}
add_action( 'wp_enqueue_scripts', 'my_script_init' );
//footerで読み込ませる
function my_load_widget_scripts() {
  global $theme_debug_mode;
    wp_enqueue_script('jquery_js', get_template_directory_uri() . '/js/jquery-3.4.1.min.js', array());
    // Bootstrap_script
    wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.bundle.js', array());
    // common_script
    wp_enqueue_script('common_js', get_template_directory_uri() . '/js/common.js', array());
    if ($theme_debug_mode) {
      wp_enqueue_script('debug_js', get_template_directory_uri() . '/debug/js/debug.js', array());
    }
    // code-prettify
    wp_enqueue_script('code-ttify_js', 'https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js', array());
}
// wp_footerに処理を登録
add_action('wp_footer', 'my_load_widget_scripts');
//adminで読み込ませる
function my_admin_styles() {
    wp_enqueue_style('my_admin_css', get_template_directory_uri() .'/css/_mixin.css','','1.4.0');
}
add_action('admin_print_styles', 'my_admin_styles');

//管理画面用css
function my_admin_style(){
    wp_enqueue_style( 'my_admin_style', get_template_directory_uri().'/css/admin/admin.min.css' );
}
add_action( 'admin_enqueue_scripts', 'my_admin_style' );

//ログイン画面用css
function custom_login() {
  $files = '<link rel="stylesheet" href=" ' . get_template_directory_uri() . '/css/admin/login.min.css" />';
  echo $files;
}
add_action( 'login_enqueue_scripts', 'custom_login' );

// meta title meta description  --------------------------------------------------------------------------------
require_once ( dirname(__FILE__) . '/functions/seo.php' );
require get_template_directory() . '/functions/seo_ogp.php';


// 投稿記事のpタグ,brタグが消えてしまう対処  --------------------------------------------------------------------------------
function my_tiny_mce_before_init( $init_array ) {
    $init_array['valid_elements']          = '*[*]';
    $init_array['extended_valid_elements'] = '*[*]';
    return $init_array;
}
add_filter( 'tiny_mce_before_init' , 'my_tiny_mce_before_init' );

// メディアライブラリにSVG画像をアップロード可能にする --------------------------------------------------------------
add_filter('upload_mimes', 'set_mime_types');
function set_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

// ログイン画面のロゴ変更
function custom_login_logo() {
    echo '<style type="text/css">h1 a { background: url(' . get_template_directory_uri() . '/images/login-logo.png) no-repeat center center !important; }</style>';
}
add_action( 'login_head', 'custom_login_logo' );

// hook method --------------------------------------------------------------------------------
require get_template_directory() . '/functions/method.php';
require get_template_directory() . '/functions/method_discription.php';
require get_template_directory() . '/functions/theme-option.php';
 ?>
