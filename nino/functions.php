<?php
/**
 * カスタム投稿、カスタム分類タイプを追加
 */
function add_custom() {
	register_taxonomy( 'cat_menu',           // カスタムタクソノミー名
	'post_menu',                              // このタクソノミーが使われるカスタム投稿タイプ（ post_menu に属する）
	array(
		'label'        => 'メニューカテゴリー',  // カスタムタクソノミーのラベル名（管理画面上）
		'show_ui'      => true,               // 管理画面に表示する
		'show_in_rest' => true,               // Gutenberg（REST API）を有効化
		'hierarchical' => true,               // 分類に親子関係を持たせる
		'rewrite'      => array(             // アーカイブページの URL を /menu/category/ スラッグとする
			'slug' => 'menu/category',
			'with_front' => false
		)
	));

	register_post_type( 'post_menu',        // カスタム投稿タイプ名 
	array(
		'label'         => 'メニュー',        // カスタム投稿タイプのラベル名（管理画面上）
		'menu_position' => 5,                // 管理画面の表示位置
		'public'        => true,             // 管理画面に表示しサイト上にも表示する
		'has_archive'   => false,            // アーカイブページは持たない（カスタム分類のアーカイブで表示する）
		'show_in_rest'  => true,             // Gutenberg（REST API）を有効化
		'rewrite'       => array(           // シングルページの URL を /menu/ スラッグとする
			'slug' => 'menu',
			'with_front' => false
		),
		'supports'      => array(    // タイトル、内容、アイキャッチ画像、カスタムフィールドを使う
			'title', 'editor', 'thumbnail', 'custom-field'
		),
		'exclude_from_search' => false
	));
}
add_action( 'init', 'add_custom' );   // init アクションフックで登録

/**
 * アイキャッチ画像を設定追加する
 */
add_theme_support( 'post-thumbnails', array( 'post_menu' ) );
set_post_thumbnail_size( 450, 450, false );         // カスタム投稿「メニュー」シングルページ用
add_image_size( 'menu_thumbnail', 300, 225, true ); // 「メニューカテゴリ」タクソノミーページ用
add_image_size( 'top_thumbnail', 150, 150, true );  // フロントページ用
// add_image_sise( 'size_thumbnail', 100, 100, true ); // サイドバー用

/**
 * カスタムメニューを表示
 */
add_theme_support( 'menus' );

/**
 * タクソノミーページ「メニューカテゴリ」の表示順を投稿の昇順に変更する
 */
function reverce_tax_menu( $wp_query ) {
	if( is_main_query () && is_tax( 'cat_menu' ) ) {
		$wp_query -> set( 'order', 'ASC' );
	}
}
add_action( 'pre_get_posts', 'reverce_tax_menu' );

/**
 * カテゴリー名からソートのために付与した文字列を削除する
 */
function replace_category_name( $cat_name ) {
	global $post;
	// 管理画面では実行しない
	if( is_admin() ) return $cat_menu;
		// メニュー以外の投稿タイプでは実行しない
		if( get_post_type( $post -> ID ) != 'post_menu' ) return $cat_name;
			// 1:カテゴリ名形式の1:の部分を削除する
			$split = preg_split( "/:/", $cat_name );
			if( $split[1] != '' ) {
				return $split[1];
			}
			return $cat_name;
}
add_filter( 'list_cats', 'replace_category_name' );

/**
 * 親記事で最初に添付された画像1枚を取得
 */
function the_image( $post_id ) {
	$images = get_children( array(
		'post_parent' => $post_id,
		'post_type' => 'attachment',
		'post_mime_type' => 'image',
		'order' => 'ASC'));
	if( !empty( $images ) ) {
		echo wp_get_attachment_image( array_pop( array_keys( $images ) ), 'thumbnail' );
	} else {
		echo '<img src=" '. get_bloginfo( 'template_url' ) . '/images/noimage.jpg" width="100" height="100">';
	}
}

?>