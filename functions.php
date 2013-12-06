<?php


//サイドバーの設定
if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(11) )
register_sidebars(1, 
    array( 
    'name'=>'トップページ左サイド', 
    'before_widget' => '<ul class="widcla"><li>', 
    'after_widget' => '</li></ul>', 
    'before_title' => '<h2>', 
    'after_title' => '</h2>', 
    )); 
register_sidebars(1, 
    array( 
    'name'=>'トップページ右サイド', 
    'before_widget' => '<ul class="widcla"><li>', 
    'after_widget' => '</li></ul>', 
    'before_title' => '<h2>', 
    'after_title' => '</h2>', 
    )); 
register_sidebars(1, 
    array( 
    'name'=>'※トップページ中央-横幅640px広告', 
    'before_widget' => '<ul class="widcla"><li>', 
    'after_widget' => '</li></ul>', 
    'before_title' => '<h2>', 
    'after_title' => '</h2>', 
));
register_sidebars(1, 
    array( 
    'name'=>'トップページ中央-左', 
    'before_widget' => '<ul class="widcla"><li>', 
    'after_widget' => '</li></ul>', 
    'before_title' => '<h2>', 
    'after_title' => '</h2>', 
    )); 
register_sidebars(1, 
    array( 
    'name'=>'トップページ中央-右', 
    'before_widget' => '<ul class="widcla"><li>', 
    'after_widget' => '</li></ul>', 
    'before_title' => '<h2>', 
    'after_title' => '</h2>', 
));
register_sidebars(1, 
    array( 
    'name'=>'トップページ中央-下', 
    'before_widget' => '<ul class="widcla"><li>', 
    'after_widget' => '</li></ul>', 
    'before_title' => '<h2>', 
    'after_title' => '</h2>', 
    )); 
register_sidebars(1, 
    array( 
    'name'=>'個別記事右サイドバー', 
    'before_widget' => '<ul class="widcla"><li>', 
    'after_widget' => '</li></ul>', 
    'before_title' => '<h2>', 
    'after_title' => '</h2>', 
));
register_sidebars(1, 
    array( 
    'name'=>'ページ右サイドバー', 
    'before_widget' => '<ul class="widcla"><li>', 
    'after_widget' => '</li></ul>', 
    'before_title' => '<h2>', 
    'after_title' => '</h2>', 
));
register_sidebars(1, 
    array( 
    'name'=>'フッター(左から1番目)', 
    'before_widget' => '<ul class="widcla"><li>', 
    'after_widget' => '</li></ul>', 
    'before_title' => '<h2>', 
    'after_title' => '</h2>', 
));
register_sidebars(1, 
    array( 
    'name'=>'フッター(左から2番目)', 
    'before_widget' => '<ul class="widcla"><li>', 
    'after_widget' => '</li></ul>', 
    'before_title' => '<h2>', 
    'after_title' => '</h2>', 
));
register_sidebars(1, 
    array( 
    'name'=>'フッター(左から3番目)', 
    'before_widget' => '<ul class="widcla"><li>', 
    'after_widget' => '</li></ul>', 
    'before_title' => '<h2>', 
    'after_title' => '</h2>', 
));
register_sidebars(1, 
    array( 
    'name'=>'フッター(左から4番目)', 
    'before_widget' => '<ul class="widcla"><li>', 
    'after_widget' => '</li></ul>', 
    'before_title' => '<h2>', 
    'after_title' => '</h2>', 
));


//続きを読むの設定
function remove_more_jump_link($link) { 
$offset = strpos($link, '#more-');
if ($offset) {
$end = strpos($link, '"',$offset);
}
if ($end) {
$link = '<p class="mt20 align2">' . substr_replace($link, '', $offset, $end-$offset) . '</p>';
}
return $link;
}
add_filter('the_content_more_link', 'remove_more_jump_link');


//コメント一覧の設定
function designplus($comment, $args, $depth) {
$GLOBALS['comment'] = $comment; ?>

<li class="compost">
<?php echo get_avatar($comment,$size='48',$default='<path_to_url>' ); ?>
<?php comment_text(); ?><br class="clear" />
<p class="cominfo">
<?php comment_date(); ?> <?php comment_time(); ?> | <?php comment_author_link(); ?>
</p>
<?php
}


//ページナビゲーションの設定
function page_navigation() {
    global $wp_rewrite;
    global $wp_query;
    global $paged;
    $paginate_base = get_pagenum_link(1);
    if(($wp_query->max_num_pages) > 1):
            if (strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()) {
                    $paginate_format = '';
                    $paginate_base = add_query_arg('paged', '%#%');
            } else {
                    $paginate_format = (substr($paginate_base, -1 ,1) == '/' ? '' : '/') .
                    user_trailingslashit('page/%#%/', 'paged');;
                    $paginate_base .= '%_%';
            }
            $result = paginate_links( array(
                    'base' => $paginate_base,
                    'format' => $paginate_format,
                    'total' => $wp_query->max_num_pages,
                    'mid_size' => 3,
                    'current' => ($paged ? $paged : 1),
            ));
            echo '<p class="local-navigation">'."\n".$result."</p>\n";
    endif;
}


//パンくずリストの設定
function get_breadcrumbs(){
	global $wp_query;

	if ( !is_home() ){

		// Start the UL
		echo '<ul>';
		// Add the Home link
		echo '<li><h1><a href="'. get_settings('home') .'">'. get_bloginfo('name') .'</a></h1></li>';

		if ( is_category() )
		{
			$catTitle = single_cat_title( "", false );
			$cat = get_cat_ID( $catTitle );
			echo "<li> &raquo; ". get_category_parents( $cat, TRUE, " &raquo; " ) ."</li>";
		}
		elseif ( is_archive() && !is_category() )
		{
			echo "<li> &raquo; Archives</li>";
		}
		elseif ( is_search() ) {

			echo "<li> &raquo; Search Results</li>";
		}
		elseif ( is_404() )
		{
			echo "<li> &raquo; 404 Not Found</li>";
		}
		elseif ( is_single() )
		{
			$category = get_the_category();
			$category_id = get_cat_ID( $category[0]->cat_name );

			echo '<li> &raquo; '. get_category_parents( $category_id, TRUE, " &raquo; " );
			echo the_title('','', FALSE) ."</li>";
		}
		elseif ( is_page() )
		{
			$post = $wp_query->get_queried_object();

			if ( $post->post_parent == 0 ){

				echo "<li> &raquo; ".the_title('','', FALSE)."</li>";

			} else {
				$title = the_title('','', FALSE);
				$ancestors = array_reverse( get_post_ancestors( $post->ID ) );
				array_push($ancestors, $post->ID);

				foreach ( $ancestors as $ancestor ){
					if( $ancestor != end($ancestors) ){
						echo '<li> &raquo; <a href="'. get_permalink($ancestor) .'">'. strip_tags( apply_filters( 'single_post_title', get_the_title( $ancestor ) ) ) .'</a></li>';
					} else {
						echo '<li> &raquo; '. strip_tags( apply_filters( 'single_post_title', get_the_title( $ancestor ) ) ) .'</li>';
					}
				}
			}
		}

		// End the UL
		echo "</ul>";
	}
}


//カスタムメニューの設定
register_nav_menu( 'navi_menu', '上部のナビゲーションメニュー' );
register_nav_menu( 'foot-menu2', 'フッターメニュー（左から2番目）' );
register_nav_menu( 'foot-menu3', 'フッターメニュー（左から3番目）' );
register_nav_menu( 'foot-menu4', 'フッターメニュー（左から4番目）' );


//カスタムヘッダーの設定
add_custom_image_header('','admin_header_style');

function admin_header_style() {
?>
<style type="text/css">
#headimg	{width: 950px!important}
</style>
<?php
}

define('NO_HEADER_TEXT',true);

define('HEADER_IMAGE','%s/images/header.jpg');

define('HEADER_IMAGE_WIDTH',950);

define('HEADER_IMAGE_HEIGHT',110);


//カスタム背景の設定
add_custom_background();


//アイキャッチ画像の設定
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 100, 100 );


wp_enqueue_script('jquery-ui-datepicker');
wp_enqueue_style('jquery-style', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/themes/smoothness/jquery-ui.css');



?>