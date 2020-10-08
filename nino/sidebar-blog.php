<div id="side">
	<div class="sideNav">
		<h2>カテゴリ</h2>
		<ul>
			<?php wp_list_categories( 'title_li=' ); ?>
		</ul>
	</div><!-- .sideNav -->
	<div class="sideNav">
		<h2>アーカイブ</h2>
		<ul>
			<?php wp_get_archives(); ?>
		</ul>
	</div><!-- .sideNav -->
	<div class="sideNav">
		<h2>新着ブログ</h2>
		<?php
			$newposts = array(
			'type' => 'postbypost',
			'limit' => 5
			);
			wp_get_archives($newposts);
			?>
	</div><!-- .sideNav -->
	<div class="sideNav">
		<h2>新着コメント</h2>
	</div><!-- .sideNav -->
</div>