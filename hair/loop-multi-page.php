<?php  
/**
 * ページ（page.php）で子ページを取得しアイキャッチ画像と抜粋を出力するマルチループ
 */
?>
<?php $args = array( 'posts_per_page' => -1, 'order' => 'ASC', 'orderby' => 'menu_order', 'post_type' => 'page', 'post_parent' => get_the_ID() );?>
<?php $the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	<div class="childPage">

		<?php // アイキャッチ画像があれば出力 ?>
		<?php if( has_post_thumbnail() ) : ?>
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
		<?php endif; ?>

		<?php // タイトル・抜粋を出力 ?>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php the_excerpt(); ?>

	</div><!-- .childPage -->

<?php endwhile; else: ?>
	<p>現在表示する記事がありません</p>
<?php endif; ?>

<?php //リセット ?>
<?php wp_reset_postdata(); ?>