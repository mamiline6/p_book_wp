<?php get_header(); ?>

<main id="main">

<?php while( have_posts() ) : the_post(); ?>

	<?php // ページタイトルを出力 ?>
	<h1><?php the_title(); ?></h1>

		<div class="content">
			<?php the_content(); ?>
		</div><!-- .content -->
		<?php edit_post_link(); ?>

<?php endwhile; ?>

</main>

<?php get_footer(); ?>