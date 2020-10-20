<section id="sidebar">
<!--/* ▲ #sidebar 開始 */-->
<div id="primary" class="widget-area">
	<?php if(!dynamic_sidebar('primary-widget-area')): ?>
	<aside id="pages" class="widget-container">
		<h3 class="widget-title">Menu</h3>
			<ul>
				<?php wp_list_pages('title_li=&depth=2'); ?>
			</ul>
	</aside>
	<aside id="archives" class="widget-container">
		<h3 class="widget-title">Archives</h3>
		<ul>
			<?php wp_get_archives('type=monthly'); ?>
		</ul>
	</aside>
	<?php endif; ?>
</div>

<?php if(is_active_sidebar('secondary-widget-area')): ?>
<div id="secondary" class="widget-area">
	<aside class="widget-container">
		<div class="textwidget">
			<?php dynamic_sidebar('secondary-widget-area'); ?>
		</div>
	</aside>
</div>
<?php endif; ?>
<!--/* ▼ #sidebar 終了 */-->
</section>