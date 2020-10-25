<?php get_header(); ?>

<section id="contents-body">
<!--/* ▲ #contents-body 開始 */-->

<!-- header template end -->

<section id="contents">
<!--/* ▲ #contents 開始 */-->

<?php if( have_posts() ): while( have_posts() ): the_post(); ?>
<article class="<?php post_class(); ?>">
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>

		<div class="entry-meta">
			<span class="sep">投稿日：<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<time class="entry-date" datetime="<?php the_time('Y-m-d'); ?>" pubdate="<?php the_time('Y-m-d'); ?>"><?php the_time( get_option( 'date-format' ) ); ?></time>
			</a></span>
			<span class="author vcard">投稿者：<a class="url fn n" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" title="<?php the_author(); ?>">
				<?php the_author(); ?>
			</a></span>
		</div>
	</header>

	<section class="entry-content">
	<?php the_content(); ?>
	</section>

	<footer class="page-footer">
		<div class="entry-meta">
			<span class="cat-links">カテゴリー：<?php the_category( ',' ); ?></span>
			<span class="tag-links"><?php the_tags( 'タグ：' ); ?></span>
		</div>
	</footer>
</article>

<?php wp_link_pages( 'before=<nav class="pages-link">&after=</nav>&link_before=<span>&link_after=</span>' ); ?>

<nav class="navigation" id="nav-below">
	<ul>
		<?php previous_post_link( '<li class="nav-previous">%link</li>', '%title', true ); ?>
		<?php next_post_link( '<li class="nav-next">%link</li>', '%title', true ); ?>
	</ul>
</nav>

<?php comments_template( null, true ); ?>
<?php endwhile; endif; ?>

<!--/* ▼ #contents 終了 */-->
</section>

<?php get_sidebar(); ?>
<!--/* ▼ #contents-body 終了 */-->
</section>

<?php get_footer(); ?>