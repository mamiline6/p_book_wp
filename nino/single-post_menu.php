<?php get_header(); ?>

	<main id="main">
		<?php // 投稿タイプ「メニュー（シングルページ）」を出力するループ ?>
		<?php while( have_posts() ) : the_post(); ?>
		<div id="menuContent">
			<h2><?php the_title(); ?></h2>
		</div><!-- /#menuContent -->
		<div id="content">
			<?php the_content(); ?>
		</div><!-- /#content -->
		<div class="utility"><?php edit_post_link( '編集する' ); ?></div>
		<?php endwhile; ?>
	</main>

<?php get_sidebar( 'blog' ); ?>
<?php get_footer(); ?>
