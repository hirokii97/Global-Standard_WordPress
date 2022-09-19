
<?php
/**
 * テーマのセットアップ
 **/
function my_setup() {
  add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
  add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
  add_theme_support('title-tag'); // タイトルタグ自動生成
  add_theme_support(
    'html5', //HTML5でマークアップ
    array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );
}
add_action('after_setup_theme', 'my_setup');

/**
* CSSとJavaScriptの読み込み
*/
function my_script_init() {
  wp_enqueue_style('my', get_template_directory_uri() . '/assets/css/style.css', array(), filemtime(get_theme_file_path('/assets/css/style.css')), 'all');
  wp_enqueue_script('my', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), filemtime(get_theme_file_path('/assets/js/script.js')), true);
}
add_action('wp_enqueue_scripts', 'my_script_init');

/**
 * メニューの登録
 */
function my_menu_init() {
  register_nav_menus(
    array(
      'global' => 'ヘッダーメニュー',
      'drawer' => 'ドロワーメニュー',
      'footer' => 'フッダーメニュー',
    )
  );
}
add_action('init', 'my_menu_init');

/**
 * アーカイブタイトル書き換え
 */

 function my_archive_title($title){
  if(is_category()){
    $title = single_cat_title('', false);
  } elseif(is_tag()) {
    $title = single_tag_title('', false);
  } elseif(is_post_type_archive()){
    $title = post_type_archive_title('', false);
  } elseif(is_tax()) {
    $title = single_term_title('', false);
  } elseif(is_author()){
    $title = get_the_author();
  } elseif(is_date()){
    $title = '';
    if(get_query_var('year')){
      $title .= get_query_var('year') . '年';
    }
    if (get_query_var('monthnum')){
      $title .= get_query_var('monthnum') . '月';
    }
    if (get_query_var('day')){
      $title .= get_query_var('day') . '日';
    }
  }
  return $title;
 };
 add_filter('get_the_archive_title', 'my_archive_title');