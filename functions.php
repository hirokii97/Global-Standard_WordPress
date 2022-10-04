
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



 // 投稿のアーカイブページを作成する
function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true; // リライトを有効にする
        $args['has_archive'] = 'blog'; // 任意のスラッグ名
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);



//投稿・固定ページ管理画面の記事一覧テーブルにIDカラムを作成
add_filter( 'manage_posts_columns', 'customize_admin_manage_posts_columns' );//投稿
add_filter( 'manage_pages_columns', 'customize_admin_manage_posts_columns' );//固定ページ
function customize_admin_manage_posts_columns($columns) {
  //投稿ID
  $columns['post-id'] = 'ID';

  return $columns;
}

//投稿・固定ページ管理画面の記事一覧テーブルにIDを表示
add_action( 'manage_posts_custom_column', 'customize_admin_add_column', 10, 2 );//投稿
add_action( 'manage_pages_custom_column', 'customize_admin_add_column', 10, 2 );//固定ページ
function customize_admin_add_column($column_name, $post_id) {
  //投稿ID
  if ( 'post-id' === $column_name ) {
    $thum = $post_id;
  }
  if ( isset($thum) && $thum ) {
    echo $thum;
  }
}

//投稿・固定ページ管理画面の記事一覧テーブルにIDソートを可能にする
add_filter( 'manage_edit-post_sortable_columns', 'sort_term_columns' );//投稿
add_filter( 'manage_edit-page_sortable_columns', 'sort_term_columns' );//固定ページ
function sort_term_columns($columns) {
  $columns['post-id'] = 'ID';
  return $columns;
}

add_action( 'wp_footer', 'add_thanks_page' );
function add_thanks_page() {

//資料ダウンロード完了
if( get_the_ID() == '179' ) {//投稿ID
echo <<< EOD
<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
  location = 'https://wpwork.hiroooo.com/download-thanks/'; 
}, false );
</script>
EOD;
}

//お問い合わせ完了
if( get_the_ID() == '188' ) { //投稿ID
echo <<< EOD
<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
  location = 'https://wpwork.hiroooo.com/contact-thanks/'; 
}, false );
</script>
EOD;
}
}

/**
 * パンくずタイトルの書き換え
 *
 * https://mtekk.us/code/breadcrumb-navxt/breadcrumb-navxt-doc/2/#bcn_breadcrumb_title
 * @param object $title タイトル.
 */
function my_bcn_breadcrumb_title( $title, $this_type, $this_id ) {
	if ( is_post_type_archive( 'blog' ) ) {
		$title = 'ニュース';
	}
	return $title;
};
add_filter( 'bcn_breadcrumb_title', 'my_bcn_breadcrumb_title', 10, 3 );

