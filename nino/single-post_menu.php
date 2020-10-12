<?php get_header(); ?>

	<main id="main">
		<p style="padding:10px 20px; color: #f00; border: 1px solid; margin: 10px 0 30px; background-color: #fe0;">投稿タイプ「メニュー」の投稿テンプレート single-post_menu.php を返して表示しています。</p>
		<?php // 投稿タイプ「メニュー」のシングルページを出力するループ ?>
		<?php while( have_posts() ) : the_post(); ?>
		<div id="menuContent">
			<h2><?php the_title(); ?></h2>
			<?php if ( has_post_thumbnail() ) the_post_thumbnail(); ?>
			<dl>
				<?php if ( post_custom ( 'PRICE' ) ) : ?>
				<dt>PRICE</dt>
				<dd>&yen;<?php echo esc_html ( post_custom ( 'PRICE' ) ); ?></dd>
				<?php endif; ?>
				<?php if ( post_custom ( '材料' ) ) : ?>
				<dt>材料</dt>
				<dd><?php echo esc_html ( post_custom ( '材料' ) ); ?></dd>
				<?php endif; ?>
				<?php if ( post_custom( 'コメント' ) ) : ?>
				<dt>コメント</dt>
				<dd><?php echo esc_html ( post_custom ( 'コメント' ) ); ?></dd>
				<?php endif; ?>
			</dl>
		</div><!-- /#menuContent -->
		<div id="content">
			<?php the_content(); ?>
		</div><!-- /#content -->
		<div class="utility"><?php edit_post_link( '編集する' ); ?></div>
		<?php endwhile; ?>
	</main>

<?php get_sidebar( 'blog' ); ?>
<?php get_footer(); ?>
