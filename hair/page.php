<?php get_header(); ?>

<main id="main">

<?php //ページタイトルを出力するメインループ ?>
<?php while( have_posts() ) : the_post(); ?>

	<?php // ページタイトルを出力 ?>
	<h1><?php the_title(); ?></h1>

	<?php //子ページを出力するループ ?>
	<?php get_template_part( 'loop-multi', 'page' ); ?>

<?php endwhile; ?>

</main>
<?php get_footer(); ?>