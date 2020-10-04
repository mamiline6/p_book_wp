<?php
/**
 * 月別アーカイブタイトルを日本語表記で返す
 * @return 月別アーカイブ時のタイトル文字列
 */
function single_month_title_jp() {
	return get_query_var( 'year' )."年".get_query_var( 'monthnum' )."月";
}

/**
 * 固定ページに抜粋を表示する
 */
 add_post_type_support( 'page', 'excerpt' );

/**
 * 固定ページにアイキャッチ画像を表示する
 */
add_theme_support( 'post-thumbnails', array( 'page' ) );
set_post_thumbnail_size( 200, 150, true );

/**
 * 管理画面にエディタースタイルシートを適用する
 */
add_editor_style();

/**
 * 対応ページのパンくずリストを出力する
 */
function the_topicpath() {
	global $post;
	// メインページのリンク文字列生成
	$new = '<a href="' . home_url( '/news/' ). '">News</a> &gt; ';
	// タイトル文字列の生成
	$title = wp_title( '', false );
	$links = "";
	// リンク生成
	if( is_page() ) {
		// ページの場合先祖のページを先祖順にパンくずを追加
		$ancestors = array_reverse( get_post_ancestors( $post ) );
		foreach( $ancestors as $ancestors ) {
			$links = '<a href="'. get_permalink( $ancestors ). '">';
			$links .= get_the_title( $ancestors ). '</a> &gt';
		}
	} elseif( is_single() ) {
		// 投稿シングルの場合メインページのリンクをパンくずに追加
		$links = $news;
	} elseif( is_month() ) {
		// 月別アーカイブの場合メインページのリンクをパンくずに追加
		$links = $news;
		// タイトル文字列は日本語表記とする
		$title = single_month_title_jp();
	} elseif( is_home() ) {
		// 投稿トップの場合メインページのリンクをパンくずに追加
		$links = 'News';
		// タイトル文字列は必要ない
		$title = "";
	}
	// パンくずの一番最初にフロントページを追加し、HTML 出力
	echo '<p class="topicpath">';
	echo '<a href="'. home_url('/') .'">Home</a> &gt;';
	echo $links.$title.'</p>';
}

/**
 * 存在しないページを指定された場合に、404 ページを表示する
 */
function redirect_404() {
	// メインページ・シングルページ・アーカイブ（月別）・ページ以外の指定
	// の場合、404 ページを表示する
	if( is_home() || is_single() || is_month() || is_page() ) return;
	include( TEMPLATEPATH.'/404.php' );
	exit;
}
add_action( 'template_redirect', 'redirect_404' );
?>