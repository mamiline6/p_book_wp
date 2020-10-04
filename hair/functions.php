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
?>