<footer id="footer">

<?php
$area_widgets = array(
	'first-footer-widget-area',
	'second-footer-widget-area',
	'third-footer-widget-area',
	'fourth-footer-widget-area'
);

if('is_active_sidebar_area($area_widgets)'):
?>
<!--/* ▲ #footer 開始 */-->
	<div id="footer-widget-area" class="area-widgets <?php wp_area_widget_num_class($area_widgets); ?>">
	<!--/* ▲ #footer-widget-area 開始 */-->

		<?php if(is_active_sidebar('first-footer-widget-area')): ?>
		<section id="first" class="widget-area">
			<?php dynamic_sidebar('first-footer-widget-area'); ?>
		</section>
		<?php endif; ?>

		<?php if(is_active_sidebar('second-footer-widget-area')): ?>
		<section id="second" class="widget-area">
			<?php dynamic_sidebar('second-footer-widget-area'); ?>
		</section>
		<?php endif; ?>

		<?php if(is_active_sidebar('third-footer-widget-area')): ?>
		<section id="third" class="widget-area">
			<?php dynamic_sidebar('third-footer-widget-area'); ?>
		</section>
		<?php endif; ?>

		<?php if(is_active_sidebar('fourth-footer-widget-area')): ?>
		<section id="fourth" class="widget-area">
			<?php dynamic_sidebar('fourth-footer-widget-area'); ?>
		</section>
		<?php endif; ?>

	<!--/* ▼ #footer-widget-area 終了 */-->
	</div>
<?php endif; ?>

	<?php wp_nav_menu(
	array(
		'container'      => 'nav',
		'container_id'   => 'footer-nav',
		'theme_location' => 'footer',
		'fallback_cd'    => null

	)
); ?>
	<p id="copyright">
		<small>Copyright &copy; <?php echo date_i18n('Y'); ?> <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a> All rights reserved.</small>
	</p>
	<p id="go-top"><a href="#header" onclick="scrollup(); return false;">
		<img src="<?php echo get_default_image('go-to.png'); ?>" alt="go top">
	</a></p>
<!--/* ▼ #footer 終了 */-->
</footer>

<!--/* ▼ #container 終了 */-->
</div>

<!--/* ▼ #wrap 終了 */-->
</div>

<script src="<?php echo get_template_directory_uri(); ?>/js/scroll.js"></script>
<?php wp_footer(); ?>
</body>
</html>