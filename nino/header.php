<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
</head>
<body <?php body_class(); ?>>
<div id="wrapper">
	<header id="header"><div id="headerInner">
        <h1></h1>
        <p></p>

        <?php wp_nav_menu ( array (
            'menu' => 'globalnav',
            'container_id' => 'navGloval'
        ) ); ?>

    </div></header><!-- /#header -->

    <div id="container"><div id="containerInner">