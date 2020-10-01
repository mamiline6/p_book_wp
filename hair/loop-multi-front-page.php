<?php
/**
 * フロントページ（front-page.php）で新着情報（投稿）を5件出力するマルチループ
 * 
 */
?>
<?php $args = array( "post_type" => "post", "posts_per_page" => 5, "paged" => $paged ); ?>
<?php $the_query = new WP_Query( $args ); ?>
<?php if( $the_query -> have_posts() ) : ?>

	<ul>
	<?php while( $the_query->have_posts() ) : $the_query -> the_post(); ?>
		<li>
			<span class="date"><?php the_time( 'Y.m.d' ); ?></span>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</li>
	<?php endwhile; ?>
	</ul>

<?php else: ?>

	<li>現在表示する記事がありません。</li>

<?php endif; ?>

<?php //リセット ?>
<?php wp_reset_postdata(); ?>

<?php  
/**
 * ページ（page.php）で子ページを取得しアイキャッチ画像と抜粋を出力するマルチループ
 */
?>

<?php 
$getID =  get_the_ID();
$args = array( 'posts_per_page' => -1, 'order' => 'ASC', 'orderby' => 'menu_order', 'post_type' => 'page', 'post_parent' => $getID );
?>

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