<?php
/**
 * フロントページ（front-page.php）で新着情報（投稿）を3件出力するマルチループ
 * 
 */
?>
<?php 
	$args = array ( "post_type" => "post", "posts_per_page" => 3, "paged" => $paged );
	$the_query = new WP_Query( $args ); 
?>

<?php if( $the_query -> have_posts() ) : ?>
	<?php while( $the_query -> have_posts() ) : $the_query -> the_post(); ?>
	<div class="entry">
		<a href="<?php the_permalink(); ?>"><?php the_image( get_the_ID() ); ?></a>
		<p class="date"><?php the_time( 'Y.m.d' ); ?></p>
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

		<p class="excerpt"><?php echo mb_substr( strip_tags ( get_the_content()), 0 ,52 ); ?>…</p>
		<a href="<?php the_permalink(); ?>" class="more">more</a>
	</div><!-- /.entry -->	
	<?php endwhile; ?>

<?php else: ?>
	<p>現在表示する記事がありません。</p>
<?php endif; ?>

<?php //リセット ?>
<?php wp_reset_postdata(); ?>

