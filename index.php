<?php get_header(); ?>
<?php get_sidebar(); ?>

<!-- メインカラム -->
<div id="contents">

<!-- カテゴリー一覧 start -->  
<div id="category_list">
<h2>街コンを開催地域で探す</h2>
<p><span class="category_hed">関東</span>   
| <a href="http://machikon-ex.com/eventlist/?region=東京都">東京都</a>
| <a href="http://machikon-ex.com/eventlist/?region=神奈川県">神奈川県</a>  
| <a href="http://machikon-ex.com/eventlist/?region=埼玉県">埼玉県</a>  
| <a href="http://machikon-ex.com/eventlist/?region=千葉県">千葉県</a>  
| <a href="http://machikon-ex.com/eventlist/?region=茨城県">茨城県</a> 
| <a href="http://machikon-ex.com/eventlist/?region=栃木県">栃木県</a> 
| <a href="http://machikon-ex.com/eventlist/?region=群馬県">群馬県</a> 
</p>
<p><span class="category_hed">北海道・東北</span> 
| <a href="http://machikon-ex.com/eventlist/?region=北海道">北海道</a> 
| <a href="http://machikon-ex.com/eventlist/?region=青森県">青森県</a> 
| <a href="http://machikon-ex.com/eventlist/?region=秋田県">秋田県</a> 
| <a href="http://machikon-ex.com/eventlist/?region=岩手県">岩手県</a> 
| <a href="http://machikon-ex.com/eventlist/?region=宮城県">宮城県</a> 
| <a href="http://machikon-ex.com/eventlist/?region=山形県">山形県</a> 
| <a href="http://machikon-ex.com/eventlist/?region=福島県">福島県</a> 
</p>
<p><span class="category_hed">北陸・甲信越</span> 
| <a href="http://machikon-ex.com/eventlist/?region=富山県">富山県</a>
| <a href="http://machikon-ex.com/eventlist/?region=山梨県">山梨県</a> 
| <a href="http://machikon-ex.com/eventlist/?region=新潟県">新潟県</a>
| <a href="http://machikon-ex.com/eventlist/?region=石川県">石川県</a>
| <a href="http://machikon-ex.com/eventlist/?region=福井県">福井県</a>
| <a href="http://machikon-ex.com/eventlist/?region=長野県">長野県</a>
</p>
<p><span class="category_hed">中部</span>
| <a href="http://machikon-ex.com/eventlist/?region=愛知県">愛知県</a>
| <a href="http://machikon-ex.com/eventlist/?region=岐阜県">岐阜県</a>
| <a href="http://machikon-ex.com/eventlist/?region=三重県">三重県</a>
| <a href="http://machikon-ex.com/eventlist/?region=静岡県">静岡県</a>
</p>
<p><span class="category_hed">関西</span>
| <a href="http://machikon-ex.com/eventlist/?region=大阪府">大阪府</a>
| <a href="http://machikon-ex.com/eventlist/?region=京都府">京都府</a>
| <a href="http://machikon-ex.com/eventlist/?region=奈良県">奈良県</a>
| <a href="http://machikon-ex.com/eventlist/?region=兵庫県">兵庫県</a>
| <a href="http://machikon-ex.com/eventlist/?region=和歌山県">和歌山県</a>
| <a href="http://machikon-ex.com/eventlist/?region=滋賀県">滋賀県</a>  
</p>
<p><span class="category_hed">中国</span>
| <a href="http://machikon-ex.com/eventlist/?region=山口県">山口県</a>
| <a href="http://machikon-ex.com/eventlist/?region=岡山県">岡山県</a>
| <a href="http://machikon-ex.com/eventlist/?region=島根県">島根県</a>
| <a href="http://machikon-ex.com/eventlist/?region=広島県">広島県</a>
| <a href="http://machikon-ex.com/eventlist/?region=鳥取県">鳥取県</a>
</p>
<p><span class="category_hed">四国</span>
| <a href="http://machikon-ex.com/eventlist/?region=徳島県">徳島県</a>
| <a href="http://machikon-ex.com/eventlist/?region=愛媛県">愛媛県</a>
| <a href="http://machikon-ex.com/eventlist/?region=香川県">香川県</a>
| <a href="http://machikon-ex.com/eventlist/?region=高知県">高知県</a>
</p>
<p><span class="category_hed">九州・沖縄</span>
| <a href="http://machikon-ex.com/eventlist/?region=福岡県">福岡県</a>
| <a href="http://machikon-ex.com/eventlist/?region=佐賀県">佐賀県</a>
| <a href="http://machikon-ex.com/eventlist/?region=大分県">大分県</a>
| <a href="http://machikon-ex.com/eventlist/?region=宮崎県">宮崎県</a>
| <a href="http://machikon-ex.com/eventlist/?region=熊本県">熊本県</a>
| <a href="http://machikon-ex.com/eventlist/?region=鹿児島県">鹿児島県</a>
| <a href="http://machikon-ex.com/eventlist/?region=沖縄県">沖縄県</a>
</p>
  
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