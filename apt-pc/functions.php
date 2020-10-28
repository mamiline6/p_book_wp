<?php

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