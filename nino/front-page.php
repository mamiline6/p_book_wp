<?php get_header(); ?>

	<p style="padding:10px 20px; color: #f00; border: 1px solid; margin: 10px 0 30px; background-color: #fe0;">front-page テンプレートを返して表示しています。</p>
	<?php while( have_posts() ) : the_post(); ?>
	<div id="topMenu">
		<h2>おすすめメニュー</h2>
		<?php get_template_part ( 'loop-multi', 'front-recommend' ); ?>

		<h2>スペシャルクレープ</h2>
		<?php get_template_part ( 'loop-multi', 'front-special' ); ?>
	</div><!-- /#topMenu -->

	<div id="topBlog">
		<h2>新着ブログ</h2>
		<?php get_template_part ( 'loop-multi', 'front-recent' ); ?>
	</div><!-- /#topBlog -->
	<?php endwhile; ?>

<?php get_footer(); ?>