<?php get_header(); ?>
<?php get_sidebar(); ?>

<!-- メインカラム -->
<div id="contents">
 
<!-- カテゴリー一覧 start -->  
<div id="category_list">
<?php
$category_ids = 66; // 親カテゴリーのIDを入れる
$parent_cat = get_terms( "category", "parent=$category_ids&fields=all&get=all" );
foreach($parent_cat as $parent_value):
 ?>
<p><span class="category_hed"><?php echo $parent_value->name;?></span>   
<?php
    $cat_all = get_terms( "category", "parent=$parent_value->term_id&fields=all&get=all" );
    foreach($cat_all as $value):
?>
| <a href="<?php echo get_category_link($value->term_id); ?>"><?php echo $value->name;?></a> 
<?php endforeach; ?>  
</p>
<?php endforeach; ?>  
</div>
<!-- カテゴリー一覧 end -->

<!-- 中央-左 start -->
<div id="index-l">
  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(4) ) : ?>
	<h2>街コン ピックアップ</h2>
	<p class="align1"><a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory');?>/ads/23460ad1.jpg" alt="*" class="linkimg" /></a></p>
	<p class="align1"><a href="<?php bloginfo('url'); ?>">街コンの広告</a></p>
	<p class="align1 mt10"><a href="http://design-plus1.com/tcd-w/"><img src="<?php bloginfo('template_directory');?>/ads/23460ad2.jpg" alt="*" class="linkimg" /></a></p>
	<p class="align1"><a href="<?php bloginfo('url'); ?>">街コンの広告</a></p>
  <?php endif; ?>
</div>
<!-- 中央-左 end -->

<!-- 中央-右 start -->
<div id="index-r">
  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(5) ) : ?>
	<h2>街コン ランキング</h2>
	<p class="ml5"><img src="<?php bloginfo('template_directory');?>/images/rank01.png" alt="街コン　ランキング1位" /> &nbsp;<a href="<?php bloginfo('url'); ?>">人気1位の街コン</a></p>
	<p class="ml5 mt5"><img src="<?php bloginfo('template_directory');?>/images/rank02.png" alt="街コン　ランキング2位" /> &nbsp;<a href="<?php bloginfo('url'); ?>">人気2位の街コン</a></p>
	<p class="ml5 mt5"><img src="<?php bloginfo('template_directory');?>/images/rank03.png" alt="街コン　ランキング3位" /> &nbsp;<a href="<?php bloginfo('url'); ?>">人気3位の街コン</a></p>
	<p class="ml5 mt5"><img src="<?php bloginfo('template_directory');?>/images/rank04.png" alt="街コン　ランキング4位" /> &nbsp;<a href="<?php bloginfo('url'); ?>">人気4位の街コン</a></p>
	<h2 class="mt15">街コン 【PR】</h2>
	<ul>
	<li class="list2"><a href="<?php bloginfo('url'); ?>">ここに街コンを掲載</a></li>
	<li class="list2"><a href="<?php bloginfo('url'); ?>">広告スペースです</a></li>
	<li class="list2"><a href="<?php bloginfo('url'); ?>">人気の街コン</a></li>
	</ul>
  <?php endif; ?>
</div>
<!-- 中央-右 end -->

<!-- 中央-下 start -->
<div id="index-b">
  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(6) ) : ?>
	<h2>タグ リスト（ウィジェットから他のコンテンツも導入可）【中央-下】</h2>
	<ul>
  	<?php if(function_exists('wp_tag_cloud')) { ?>
	<li><?php wp_tag_cloud(''); ?></li>
	<?php } ?>
	</ul>
  <?php endif; ?>
</div>
<!-- 中央-下 end -->

<p class="mb10"><img src="<?php bloginfo('template_directory');?>/images/midasi-entry.png" alt="新着記事一覧" /></p>

<?php query_posts($query_string . '&posts_per_page'); ?>
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
<div class="entry" id="post<?php the_ID(); ?>">
  <div class="entrytitle">
	<dl>
	  <dt>
	  <?php
	  $designplus = get_bloginfo('template_directory') . '/images/thumbnail-icon.jpg';
	  if ( has_post_thumbnail()) {
	  the_post_thumbnail();
	  } else {
	  echo '<img src="' . $designplus . '" alt="*" />';
	  }
	  ?>
	  </dt>
	  <dd>
	<h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
	  	<p class="metadate"><?php the_time("Y年n月j日"); ?> | <?php the_category(', ') ?> | <a href="<?php comments_link(); ?>" title="<?php the_title(); ?>のコメント/トラックバック">コメント/トラックバック <?php comments_number('(0)', '(1)', '(%)'); ?></a></p>
	  </dd>
	</dl>
  </div>
  <div class="contents_body">
	<?php echo mb_substr(get_the_excerpt(), 0, 60); ?>
	<p class="mt10 align2"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="more-link"><span class="moretext">記事の続きを読む &raquo;</span></a></p>
  </div>
</div>
<?php endwhile; else: ?>


<h2 class="align1">ページが見つかりません</h2>
   <div class="contents_body">
    <p class="align1"><?php _e('申し訳ありません。ここにはお探しのページはないようです。'); ?></p>
   </div>
<?php endif; ?>

<?php page_navigation(); ?>
</div>
<!-- / メインカラム -->

<?php get_sidebar(2); ?>
<?php get_footer(); ?>