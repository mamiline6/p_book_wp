<?php get_header(); ?>

<?php //フロントページを出力するためのループ ?>
<?php while( have_posts() ) : the_post(); ?>

	<div id="topMain">
		<img src="<?php bloginfo( 'template_directory' ); ?>/images/home/main.jpg" width="960" height="425" alt="メインイメージ">
	</div><!--  #topMain -->

	<div id="topContent">
		<div id="topMessage"><?php the_content(); ?></div>

		<div id="topNews">

			<div id="topNewsHead">
				<h2>News</h2>
				<p class="viewAll"><a href="<?php echo home_url( '/news/' ); ?>">view all</a></p>
			</div><!-- #topNewsHead -->

			<?php //新着情報（投稿）を出力するループ（マルチループ） ?>
			<?php get_template_part( 'loop-multi', 'front-page' ); ?>

		</div><!--  #topNews -->

	</div><!--  #topContent -->

	<div id="topBanner">
		<ul>
			<li><a href="<?php echo home_url( '/shop/message/' ); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/images/home/bnr_01.jpg" width="300" height="160" alt="Concept"></a></li>
			<li><a href="<?php echo home_url( '/shop/access/' ); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/images/home/bnr_02.jpg" width="300" height="160" alt="Style"></a></li>
		</ul>
	</div><!--  #topBanner -->

<?php endwhile; ?>

<?php get_footer(); ?>