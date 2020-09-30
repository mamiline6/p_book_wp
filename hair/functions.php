<?php
/**
 * 月別アーカイブタイトルを日本語表記で返す
 * @return 月別アーカイブ時のタイトル文字列
 */

function single_month_title_jp() {
	return get_query_var( 'year' )."年".get_query_var( 'monthnum' )."月";
}

?>