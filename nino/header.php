<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
	<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class($post->post_name . ''); ?>>

	<header id="header"><div id="headerInner">
		<h1><a href="<?php bloginfo( 'url' ); ?>"><img src="<?php bloginfo( 'template_url' ); ?>/images/logo.png" width="165" height="65" alt="<?php echo esc_attr( get_bloginfo('name') ); ?>"></a></h1>
		<p><?php bloginfo('description'); ?></p>
	</div></header><!-- /#header -->

	<?php if(is_front_page()) : ?>
		<div id="topMain">
			<ul>
				<li class="main01">クマ</li>
				<!-- <li class="main02">クレープ</li> -->
				<!-- <li class="main03">店内</li> -->
				<li class="main04">nino</li>
			</ul>
		</div>
	<?php endif; ?>

	<div id="container"><div id="containerInner">

		<?php wp_nav_menu ( array (
			'menu' => 'globalnav',
			'container_id' => 'navGloval'
		) ); ?>