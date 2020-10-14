<?php
/**
 * フロントページ（front-page.php）で新着情報（メニュー）からおすすめ3件出力するマルチループ
 * 
 */
?>
<?php 
	$args = array ( "cat_menu" => "recommend", "posts_per_page" => 3, "paged" => $paged );
	$the_query = new WP_Query( $args ); 
?>

<?php if( $the_query -> have_posts() ) : ?>
	<ul id="recommend">
	<?php while( $the_query -> have_posts() ) : $the_query -> the_post(); ?>
		<li><a href="<?php the_permalink(); ?>">
		<?php if( has_post_thumbnail() ) the_post_thumbnail( 'top_thumbnail' ); ?>
		<?php the_title(); ?>
		</a></li>
	<?php endwhile; ?>
	</ul><!-- /#recommend -->	

<?php else: ?>
	<p>現在おすすめメニューはありません。</p>
<?php endif; ?>

<?php //リセット ?>
<?php wp_reset_postdata(); ?>

