<?php get_header(); ?>

	<main id="main">

	<?php // 投稿（シングルページ）を出力するループ ?>
	<?php while( have_posts() ) : the_post(); ?>

		<?php // 記事の内容を出力 ?>
		<h1><?php the_title(); ?></h1>
		<p class="date"><?php the_time( 'Y.m.d' ); ?></p>
		<div class="content">
			<?php the_content(); ?>
		</div><!-- .content -->
		<?php edit_post_link(); ?>

	<?php endwhile; ?>

		<?php // ページリンク出力 ?>
		<div class="navPage">
			<div class="prev"><?php previous_post_link( '%link' ); ?></div>
			<div class="next"><?php next_post_link( '%link' ); ?></div>
		</div><!-- .navPage -->

	</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>