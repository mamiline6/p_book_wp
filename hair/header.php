<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
</head>
<body <?php body_class(); ?>>
    <div id="wrapper">
        <header id="header">
            <h1><a href="<?php bloginfo( 'url' ); ?>">
            <img src="<?php bloginfo( 'template_directory' ); ?>/images/logo.png" width="175" height="27" alt="bloginfo( 'name' );">
            </a></h1>

            <ul id="navGlobal">
                <?php wp_list_pages( array ( 'depth' => 1, 'title_li' => '' ) ); ?>
            </ul>
        </header>
        <div id="container">