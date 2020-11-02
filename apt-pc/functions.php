<?php

// タイトルタグのテキストを出力します
function apt_simple_title() {
	if( !is_front_page() ) {
		echo trim( wp_title( '', false) ). "｜";
	}
	bloginfo( 'name' );
}

// サイトID（ロゴタイプやマーク、社名）のマークアップをトップページとそれ以外で切り替えます
function apt_site_id() {
	if( is_front_page() ) {
		echo "h1";
	} else {
		echo "div";
	}
}

// wp_list_pages のクラス属性を変更する
function apt_add_current( $output ){
	global $post;
	$oid = "page-item-{ $post->ID }";
	$cid = "$oid current_page_item";
	$output = preg_replace( "/Soid/", $cid, $output );
	return $output;
}

// カスタム投稿タイプ・カスタム分類
add_action( 'init', 'register_post_type_and_taxonomy' );
function register_post_type_and_taxonomy(){
	register_post_type(
		'branch',
		array(
			'labels' => array(
				'name'         => '営業所情報',
				'add_new_item' => '営業所を追加',
				'edit_item'    => '営業所の編集'
			),
		'public'       => true,
		'hierarchical' => true,
		'show_in_rest' => true,
		'supports'     => array(
			'title',
			'editor',
			'excerpt',
			'custom-fields',
			'thumbnail',
			'page-attributes'
			),
		)
	);

	register_post_type(
		'tour',
		array(
			'labels' => array(
				'name'         => 'ツアー情報',
				'add_new_item' => '新規ツアーを追加',
				'edit_item'    => 'ツアーの編集'
			),
			'public' => true,
			'show_in_rest' => true,
			'supports' => array(
				'title',
				'editor',
				'excerpt',
				'custom-fields',
				'thumbnail'
			),
		)
	);
	register_taxonomy(
		'area',
		'tour',
		array(
			'labels' => array(
				'name'         => '地域',
				'add_new_item' => '地域を追加',
				'edit_item'    => '地域の編集'
			),
			'hierarchical' => true,
			'show_admin_column' => true,
		)
	);
}

// アイキャッチ画像を利用できるようにする
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 208, 138 ,true );

// メディアのサイズを追加する
add_image_size( 'main_image', 370 );
add_image_size( 'tour-archive', 280 );
add_image_size( 'sub_image', 150 );

// ツアー情報のパンくずナビを修正する
function apt_bread_crumb( $arr ){
	if( is_tax( 'area' ) && count( $arr ) ==2 ){
		$arr[2] = $arr[1];
		$arr[1] = array( 'title' => 'ツアー情報', 'link' => get_permalink( get_page_by_path( 'tour-info' ) ) );
	}
	return $arr;
}

// 円貨幣のフォーマットで表示させる
function apt_convert_yen( $yen ){
	$yen = mb_convert_kana( $yen, 'n', 'UTF-8' );
	$yen = preg_replace( '/[^0-9]/', '', $yen );
	if( is_single() ){
		$yen = number_format( $yen ).'円';
		return $yen;
	}
}


// カテゴリ情報を取得する
function apt_category_info( $tax='category' ){
	global $post;
	$cat = get_the_terms( $post->ID, $tax );
	$obj = new stdClass;
	if( $cat ){
		$cat = array_shift( $cat );
		$obj->name = $cat->name;
		$obj->slug = $cat->slug;
	}else {
		$obj->name = '';
		$obj->slug = '';
	}
	return $obj;
}

// カテゴリIDを取得する
function apt_category_id() {
	global $post;
	$cat_id = 0;
	if( is_single() ){
		$cat_info = get_the_terms( $post->ID, $tax );
		if( $cat_info ){
			$cat_id = array_shift($cat_info)->term_id;
		}
	}
	return $cat_id;
}


// 最上位の固定ページ情報を取得する
function apt_page_ancestor() {
	global $post;
	$anc = array_pop( get_post_ancestors( $post ) );
	$obj = new stdClass;
	if( $anc ){
		$obj->ID = $anc;
		$obj->post_title = get_post( $anc )->post_title;
	}else {
		$obj->ID = $post->ID;
		$obj->post_title = $post->post_title;
	}
	return $obj;
}


// カスタムメニュー
register_nav_menus (
	array (
		'place_pc_global'  => 'PC グローバル',
		'place_sp_global'  => 'SP グローバル',
		'place_pc_utility' => 'PC ユーティリティ',
		'place_sp_utility' => 'SP ユーティリティ'
	)
);


// wp_nav_menu に slug のクラス属性を追加する
function apt_slug_nav( $css, $item ) {
	if( $item->object == 'page' ) {
		$page = get_post( $item->object_id );
		$css[] = 'menu-item-slug-' . esc_attr( $page->post_name );
	}
	return $css;
}

?>