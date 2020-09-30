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