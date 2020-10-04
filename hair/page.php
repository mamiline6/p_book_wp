<?php get_header(); ?>

<main id="main">

<?php // ページ（page.php）のメインループ ?>
<?php while( have_posts() ) : the_post(); ?>

	<?php // ページタイトルを出力 ?>
	<h1><?php the_title(); ?></h1>

	<?php if( $post->post_parent ) : ?>

		<?php // 子ページ（親ページを持つ）の場合は本文を出力する ?>
		<div class="content">
			<?php the_content(); ?>
		</div><!-- .content -->
		<?php edit_post_link(); ?>

	<?php else: ?>

		<?php //親ページの場合は子ページのアイキャッチ画像と抜粋を出力する ?>
		<?php get_template_part( 'loop-multi', 'page' ); ?>
	
	<?php endif; ?>

<?php endwhile; ?>

</main>

<?php get_sidebar( 'page' ); ?>
<?php get_footer(); ?>