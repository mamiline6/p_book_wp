<div id="side">
	<div id="navSub">

	<?php
	/**
	 * 親ページのタイトルと子ページリストを出力
	 */
	// 現在表示中ページの ID を取得し、$observer に入れる
	// 親ページが表示中ならば、現在表示中ページの ID をそのまま使用
	$observer = $post->ID;

	// もし表示中のページが子ページ（親ページを持つ）の場合、親ページの ID で $observer を上書き
	if( $post->post_parent ) {
		$observer = $post->post_parent;
	}
	?>

	<h2><a href="<?php echo get_permalink( $observer ); ?>"><?php echo get_the_title( '$observer' ); ?></a></h2>
	<ul>
		<?php wp_list_pages( array ( "child_of" => $observer, "title_li" => '') ); ?>
	</ul>

	</div><!-- #navSub -->
</div><!-- #side -->