<?php get_header(); ?>

<section id="contents-body">
<!--/* ▲ #contents-body 開始 */-->

<!-- header template end -->

<section id="contents">
<!--/* ▲ #contents 開始 */-->

<?php if( have_posts() ): while( have_posts() ): the_post(); ?>
<article class="<?php post_class(); ?>">
	<header class="entry-header">
		<h1 class="page-title"><?php the_title(); ?></h1>
	</header>

	<section class="entry-content">
	<?php the_content(); ?>
	</section>

</article>

<?php wp_link_pages( 'before=<nav class="pages-link">&after=</nav>&link_before=<span>&link_after=</span>' ); ?>

<?php comments_template( null, true ); ?>
<?php endwhile; endif; ?>

<!--/* ▼ #contents 終了 */-->
</section>

<?php get_sidebar(); ?>
<!--/* ▼ #contents-body 終了 */-->
</section>

<?php get_footer(); ?>