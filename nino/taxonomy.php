<?php get_header(); ?>

<main id="main">
	
	<p style="padding:10px 20px; color: #f00; border: 1px solid; margin: 10px 0 30px; background-color: #fe0;">投稿タイプ「メニュー」のタクソノミーテンプレート taxonomy.php を返して表示しています。</p>

	<ul class="menuCategory">
	</ul>

	<div id="menuList">
	<?php // メニューの一覧を出力するループ ?>
	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>
		<?php // メニューを出力 ?>
		<div class="menuItem">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php // アイキャッチ画像を出力 ?>
			<a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) the_post_thumbnail( 'menu_thumbnail' ); ?>
			</a>
			<?php if ( post_custom ( 'PRICE' ) ) : ?>
				<p class="price">PRICE &yen;<?php echo esc_html ( post_custom ( 'PRICE' ) ); ?></p>
			<?php endif; ?>
		</div><!-- /.menuItem -->
		<?php endwhile; ?>
	<?php else: ?>
		<p>現在表示するメニューはありません。</p>
	<?php endif; ?>
</main>

<?php get_sidebar( 'blog' ); ?>
<?php get_footer(); ?>
