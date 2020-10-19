<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<title><?php 
// 現在のページ｜サイトのタイトル|キャッチフレーズ｜ページ送り数
wp_title( '|',true,'right' ); bloginfo('name');
echo '|';
bloginfo('description');

global $page, $paged;
if($paged >= 2 || $page >=2) {
	echo '|'. max($paged,$page) . 'ページ';
}
?></title>
<link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet" type="text/css" />
<link rel="apple-touch-icon" href="<?php get_default_image('apple-touch-icon.png'); ?>" />
<?php wp_head(); ?>
</head>

<body class="<?php body_class(); ?>">
<div id="wrap">
<!--/* ▲ #wrap 開始 */-->

<div id="container">
<!--/* ▲ #container 開始 */-->

<header id="header">
<!--/* ▲ #header 開始 */-->

<div id="hgroup">
	<h1 id="site-id"><a href="<?php echo home_url('/'); ?>">
	<?php if(get_theme_mod('site_title_image')) :?>
		<img src="<?php echo get_theme_mod('site_title_image'); ?>" alt="<?php get_bloginfo('name'); ?>">
	<?php else:
		bloginfo('name');
	endif;?>
	</a></h1>
	<h2 id="description"><?php bloginfo('description'); ?></h2>
</div>

<?php wp_nav_menu(
	array (
		'conainer'       => 'nav',
		'container_id'   => 'utility-nav',
		'theme_location' => 'header',
		'fallback_cb'    => null
	)
); ?>

<div class="widget-area" id="header-widget-area">
<?php dynamic_sidebar('header-widget-area'); ?>
</div>

<?php wp_nav_menu(
	array(
		'container'      => 'nav',
		'container_id'   => 'global-nav',
		'theme_location' => 'global'
	)
); ?>

<?php if(get_header_image()): ?>
<div id="branding">
<img src="<?php header_image(); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT ?>" alt="">
</div>
<?php endif; ?>

<?php if(! is_front_page() && ! is_404()) {
	bread_crumb('elm_class=bread-crumb&home_label=Home');
} ?>

<!--/* ▼ #header 終了 */-->
</header>