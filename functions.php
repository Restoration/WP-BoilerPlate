<?php
$defaults = array(
  'default-image'          => '',
  'random-default'         => false,
  'width'                  => 960,
  'height'                 => 300,
  'flex-height'            => false,
  'flex-width'             => false,
  'default-text-color'     => '',
  'header-text'            => true,
  'uploads'                => true,
  'wp-head-callback'       => '',
  'admin-head-callback'    => '',
  'admin-preview-callback' => '',
);
//カスタムヘッダー
add_theme_support('custom-header',$defaults);

//カスタム背景
$defaults = array(
	'default-color'          => '',
	'default-image'          => '',
	'wp-head-callback'       => '_custom_background_cb',
	'admin-head-callback'    => '',
	'admin-preview-callback' => ''
);
add_theme_support('custom-background',$defaults);

//サムネイル表示表示
add_theme_support( 'post-thumbnails' );

//HTML5の使用許可
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

//サイドバーにウィジェット追加
register_sidebar(array(
  'name' => 'sideWidget',
  'before_widget' => '<div class="widgetArea">',
  'after_widget' => '</div>',
  'before_title' => '<h3 class="widgetTitle">',
  'after_title' => '</h3>',
));
//フッターウィジェット追加
register_sidebar(array(
	'name'=> 'footerWidgetLeft',
	'before_widget' => '<div class="widgetArea">',
  'after_widget' => '</div>',
  'before_title' => '<h3 class="widgetTitle">',
  'after_title' => '</h3>',
));
register_sidebar(array(
	'name'=> 'footerWidgetCenter',
	'before_widget' => '<div class="widgetArea">',
  'after_widget' => '</div>',
  'before_title' => '<h3 class="widgetTitle">',
  'after_title' => '</h3>',
));

register_sidebar(array(
	'name'=> 'footerWidgetRight',
	'before_widget' => '<div class="widgetArea">',
  'after_widget' => '</div>',
  'before_title' => '<h3 class="widgetTitle">',
  'after_title' => '</h3>',
));


/* more-linkのハッシュ消し */
function remove_more_jump_link($link) {
  $offset = strpos($link, '#more-');
  if ($offset) {
    $end = strpos($link, '"',$offset);
  }
  if ($end) {
    $link = substr_replace($link, '', $offset, $end-$offset);
  }
  return $link;
}
add_filter('the_content_more_link', 'remove_more_jump_link');



//検索
function SearchFilter($query) {
if ($query->is_search) {
$query->set('post_type', 'post');
}
return $query;
}
add_filter('pre_get_posts','SearchFilter');



//ヘッダーをスッキリさせる
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action( 'wp_head', 'wp_generator' );




//投稿ページをスッキリさせる
function remove_default_post_screen_metaboxes() {
remove_meta_box( 'postcustom','post','normal' ); // カスタムフィールド
remove_meta_box( 'postexcerpt','post','normal' ); // 抜粋
remove_meta_box( 'commentstatusdiv','post','normal' ); // コメント
remove_meta_box( 'trackbacksdiv','post','normal' ); // トラバ
remove_meta_box( 'slugdiv','post','normal' ); // スラッグ
remove_meta_box( 'authordiv','post','normal' ); // 著者
}
add_action('admin_menu','remove_default_post_screen_metaboxes');


//pタグ除去
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

//date()の日付の表示
function my_the_post() {
    global $previousday;
    $previousday = '';
}
add_action( 'the_post', 'my_the_post' );