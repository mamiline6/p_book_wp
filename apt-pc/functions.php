<?php

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