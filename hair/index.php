<?php get_header(); ?>

<main id="main">

	<?php // 月別アーカイブページの場合、日付をタイトル出力 ?>
	<?php // それ以外の場合は ”News” を出力 ?>
	<?php if( is_month() ) : ?>
		<h1><?php echo single_month_title_jp(); ?></h1>
		<!-- h1><?php //the_archive_title(); ?></h1 -->
		<!-- h1><?php //get_the_archive_title(); ?></h1 -->
	<?php else: ?>
		<h1>News</h1>
	<?php endif; ?>

	<?php // 投稿・アーカイブページで投稿を出力するループ ?>
	<?php if( have_posts() ) : ?>

		<?php while( have_posts() ) : the_post(); ?>

			<div class="entry">

				<?php // 各記事を出力。最大出力数は、管理画面で設定 ?>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<p class="date"><?php the_time('Y.m.d'); ?></p>
				<?php the_excerpt(); ?>
				<p class="more"><a href="<?php the_permalink(); ?>">続きを読む</a></p>

			</div><!-- .entry -->
	
		<?php endwhile; ?>
			
			<div class="navPage">

				<?php // ページリンク出力 ?>
				<p class="prev"><?php previous_posts_link('%link', '前のページへ'); ?></p>
				<p class="next"><?php next_posts_link('次のページへ'); ?></p>

			</div><!-- .navPage -->

	<?php else: ?>
		<p>現在表示する記事がありません</p>
	<?php endif; ?>

</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>