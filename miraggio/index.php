<?php get_header(); ?>

<section id="contents-body">
<!--/* ▲ #contents-body 開始 */-->

<section id="contents">
<!--/* ▲ #contents 開始 */-->

<?php if(is_active_sidebar('home-content-widget-upper')): ?>
<section id="home-widget-area" class="<?php wp_widget_num_class('home-content-widget-upper'); ?>">
	<?php dynamic_sidebar('home-content-widget-upper'); ?>
</section>
<?php endif; ?>

<section id="update-info">
<?php 
if(! dynamic_sidebar('home-content-widget-lowwer')):
	if(have_posts()):
?>
	<h1 class="update-info-title">information</h1>
	<ul>
	<?php while(have_posts()): the_post(); ?>
		<li>
			<a href="<?php the_permalink(); ?>">
			<?php 
			if(has_post_thumbnail()):
				the_post_thumbnail();
			else:
				echo '<img src="'.get_default_image('default/update-info-thumbnail-default.png').'" alt="">';
			endif; ?>
			</a>
			<h2 class="update-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<p class="update-meta">
				<span class="entry-date"><a href="<?php the_permalink(); ?>"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time></a></span>
				<span class="entry-category"><?php the_category(','); ?></span>
			</p>
		</li>
	<?php endwhile; ?>
	</ul>
	<?php endif; ?>
<?php endif; ?>
</section>
<!--/* ▼ #contents 終了 */-->
</section>

<?php get_sidebar(); ?>
<!--/* ▼ #contents-body 終了 */-->
</section>

<?php get_footer(); ?>