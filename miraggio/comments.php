<!--/* ### comments.php 開始 ### */-->
<section id="comments"> 
<!--/* ▲ #comments 開始 */-->
<?php if( post_password_required() ): ?>
	<p>このページはパスワード認証が必要です。パスワードを入力してご覧ください。</p>
	<?php return;
endif; ?>
<?php if( have_comments() ): ?>
	<h1 id="comments-title">"<em><?php the_title(); ?></em>" に<?php echo number_format_i18n( get_comments_number() ); ?>件のコメント</h1>

	<?php if( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ): ?>
	<nav class="navigation">
		<ul>
			<li class="nav-previous"><?php previous_comments_link( '古いコメント' ); ?></li>
			<li class="nav-next"><?php next_comments_link( '新しいコメント' ); ?></li>
		</ul>
	</nav><!-- .navigation -->
	<?php endif; ?>


	<ol class="commentlist">
		<?php wp_list_comments( array(
			'callback' => 'miraggio_comment'
		) ); ?>
	</ol>
	<?php endif; ?>
	<?php comment_form(); ?>
<!--/* ▼ #comments 終了 */--> 
</section><!--/* ### comments.php 終了 ### */-->