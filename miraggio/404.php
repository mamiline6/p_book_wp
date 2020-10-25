<?php get_header(); ?>

<section id="contents-body">
<!--/* ▲ #contents-body 開始 */-->

<section id="contents">
<!--/* ▲ #contents 開始 */-->

<article class="hentry">
	<header class="page-header">
		<h1 class="page-title">ご指定のページが見つかりません。</h1>
	</header>

	<div class="entry-content">
		<p>大変申し訳ございませんがご指定頂いたページが見つかりません。</p>
		<p>
		アドレスをご確認の上もう一度お試し頂くか、<br />
		上部のメニュー、もしくは<a href="<?php echo home_url('/'); ?>">Home</a>へ戻って該当のページをお探しください。
		</p>
		<p><a class="more-link" href="<?php echo home_url('/'); ?>">Homeへ戻る</a></p>
	</div>

</article>

<!--/* ▼ #contents 終了 */-->
</section>

<!--/* ▼ #contents-body 終了 */-->
</section>

<?php get_footer(); ?>