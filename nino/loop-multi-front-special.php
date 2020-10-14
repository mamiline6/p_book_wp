<?php
/**
 * フロントページ（front-page.php）で新着情報（メニュー）からスペシャル3件出力するマルチループ
 * 
 */
?>
<?php 
	$args = array ( "cat_menu" => "special", "posts_per_page" => 3, "paged" => $paged );
	$the_query = new WP_Query( $args ); 
?>

<?php if( $the_query -> have_posts() ) : ?>
	<?php while( $the_query -> have_posts() ) : $the_query -> the_post(); ?>
	<div class="special">
		<a href="<?php the_permalink(); ?>">
			<?php if( has_post_thumbnail() ) the_post_thumbnail( 'top_thumbnail' ); ?>
		<div class="spacialTxt">
			<?php the_content(); ?>
		</div><!-- /.spacialTxt -->
	<?php endwhile; ?>
	</div><!-- /.special -->	

<?php else: ?>
	<p>現在スペシャルクレープはありません。</p>
<?php endif; ?>

<?php //リセット ?>
<?php wp_reset_postdata(); ?>

