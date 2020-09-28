<h1><?php bloginfo( 'name' ); ?></h1>
<h2>新着情報一覧</h2>

<?php // 投稿を出力するループ ?>
<?php if( have_posts() ) : ?>
		<?php while( have_posts() ) : the_post(); ?>
			<?php // 各記事を出力 ?>
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<p class="date"><?php the_time('Y.m.d'); ?></p>
			<?php the_excerpt(); ?>
			<p class="more"><a href="<?php the_permalink(); ?>">続きを読む</a></p>
		<?php endwhile; ?>
<?php else: ?>
		<p>現在表示する記事がありません</p>
<?php endif; ?>