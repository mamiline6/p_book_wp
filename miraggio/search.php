<?php get_header(); ?>

<section id="contents-body">
<!--/* ▲ #contents-body 開始 */-->

<section id="contents">
<!--/* ▲ #contents 開始 */-->

<?php get_template_part( 'archive' ); ?>

<header class="page-header">
	<h1 class="page-title"><?php single_archive_title(); ?></h1>
</header>
<?php if( category_description() ): ?>
	<div class="archive_meta"><?php echo category_description(); ?></div>
<?php endif; ?>

<?php if( have_posts() ): while( have_posts() ): the_post(); ?>
<article class="hentry">
	<header class="entry-header">
		<h1 class="entry-title">
			<a title="" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h1>
		<div class="entry-meta">
			<span class="sep">投稿日：<a href="<?php the_permalink(); ?>" title="entry title">
				<time class="entry-date" datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate="<?php the_time( 'Y-m-d' ); ?>"><?php the_date('get_format'); ?></time>
			</a></span>
			<span class="author vcard">投稿者：<a title="<?php the_author(); ?>" href=""<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?> class="url fn n">
				<?php the_author(); ?>
			</a></span>
		</div>
	</header>

	<section class="entry-content">
		<p><a href="<?php the_permalink(); ?>">
		<?php if( has_post_thumbnail() ): the_post_thumbnail( 'large_thumbnail' );

		else:
			echo '<img src=" '. get_default_image( '/default/post-thumbnail-default.png').' " class="attachment-post-thumbnail" alt="">';

		endif; ?>
		</a></p>
		<p><?php the_excerpt(); ?> … </p>
		<a href="<?php the_permalink(); ?>" class="more-link">続きを読む<span class="meta-nav">&gt;</span></a>
	</section>

	<footer class="entry-footer">
		<div class="entry-utility">
			<span class="cat-links">カテゴリー：<a href="<?php the_permalink(); ?>" title="Cat A の投稿をすべて表示" ><?php the_category( ',' ); ?></a></span>
			<span class="tag-links">タグ：<a href="<?php the_permalink(); ?>"><?php the_tags( '' ); ?></a></span>
		</div>
	</footer>
</article>
	<?php endwhile; endif; ?>

<?php page_navi( 'elm_class=page-nav&edge_type=span' ); ?>

<!--/* ▼ #contents 終了 */-->
</section>

<?php get_sidebar(); ?>
<!--/* ▼ #contents-body 終了 */-->
</section>

<?php get_footer(); ?>