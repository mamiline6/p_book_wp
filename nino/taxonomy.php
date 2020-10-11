<?php get_header(); ?>

<main id="main">
	<div id="mainList">
	<p style="padding:10px 20px; color: #f00; border: 1px solid; margin: 10px 0 30px; background-color: #fe0;">投稿タイプ「メニュー」のタクソノミーテンプレート taxonomy.php を返して表示しています。</p>

	<?php wp_nav_menu ( array (
		'menu' => 'subnav'

	)); ?>

	<?php if ( have_posts() ) : ?><?php // メニューの一覧を出力するループ ?>
		<?php while ( have_posts() ) : the_post(); ?>
		
		<div class="menuItem"><?php // メニューを出力 ?>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<a href="<?php the_permalink(); ?>">
			<?php if ( have_post_thumbnail() ) the_post_thumbnail( 'menu_thumbnail' ); ?>
			</a>
			<?php if ( post_custom( 'PRICE' ) ) : ?>
			<p class="price">PRICE &yen;<?php echo esc_html( post_custom( 'PRICE' ) ); ?></p>
			<?php endif; ?>
		</div><!-- /.menuItem -->
		<?php endwhile; ?>
	<?php else: ?>
		<p>現在表示するメニューはありません。</p>
	<?php endif; ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
