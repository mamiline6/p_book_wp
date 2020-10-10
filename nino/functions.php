<?php

/**
 * カスタム投稿、カスタム分類タイプを追加
 */
function add_custom () {
	register_post_type ( 'post_menu', // 投稿タイプ名 
	array (
		'label'         => 'メニュー', // カスタム投稿タイプのラベル名（管理画面上）
		'menu_position' => 5,         // 管理画面の表示位置
		'public'        => true,      // 管理画面に表示しサイト上にも表示する
		'has_archive'   => false,     // アーカイブページは持たない（カスタム分類のアーカイブで表示する）
		'show_in_rest'  => true,      // Gutenberg（REST API）を有効化
		'rewrite'       => array (    // シングルページの URL を /menu/ スラッグとする
			'slug' => 'menu',
			'with_front' => false
		),
		'supports'      => array (    // タイトル、内容、アイキャチ画像、カスタムフィールドを使う
			'title', 'editor', 'thumbnail', 'custom-field'
		)
	));

	register_taxonomy ( 
		'cat_menu',                    // カスタムタクソノミー名
		'post_menu',                   // このタクソノミーが使われるカスタム投稿タイプ（ post_menu に属する）
	array (
		'label'        => 'メニューカテゴリー',  // カスタムタクソノミーのラベル名（管理画面上）
		'show_ui'      => true,               // 管理画面に表示する
		'hierarchical' => true,               // 分類に親子関係を持たせる
		'rewrite'      => array (             // アーカイブページの URL を /menu/category/ スラッグとする
			'slug' => 'menu/category',
			'with_front' => false
		)
	));
}
add_action ( 'init', 'add_custom' );   // init アクションフックで登録

?>