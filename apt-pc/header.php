<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8" />
<title><?php bloginfo( 'name' ); ?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_uri(); ?>" />
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" />
<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png" />
<?php wp_head(); ?>
</head>

<body class="home">
<div id="wrap">
  <div id="header" role="banner">
    <div class="inner clearfix">
      <h1 class="site-id">
        <a href="<?php echo home_url( '/' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/site_id.png" width="322" height="42" alt="<?php bloginfo( 'description' ); ?><?php bloginfo( 'name' ); ?>" /></a>
      </h1>
      <div class="utility">
        <ul>
          <li><a href="#">採用情報</a></li>
          <li><a href="#">サイトマップ</a></li>
          <li><a href="#">お問い合わせ</a></li>
        </ul>
        <div id="search" role="search">
          <form role="search" method="get" id="searchform" class="searchform" action="#">
            <div>
              <input type="text" value="" name="s" id="s" />
              <input type="submit" id="searchsubmit" value="検索" />
            </div>
          </form>          
        </div><!-- #search end -->
      </div><!-- .utility end -->
    </div><!-- .inner end -->
    <div id="global_nav">
      <ul>
        <li class="current-menu-item menu-item-slug-top"><a href="#">トップページ</a></li>
        <li class="menu-item-slug-about"><a href="#">会社概要</a></li>
        <li class="menu-item-slug-csr"><a href="#">社会貢献活動（CSR）</a></li>
        <li class="menu-item-slug-tour-info"><a href="#">ツアー情報</a></li>
        <li class="menu-item-slug-office"><a href="#">営業所</a></li>
      </ul>
    </div>
  </div><!-- #header end -->