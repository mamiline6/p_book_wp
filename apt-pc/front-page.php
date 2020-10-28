<?php get_header(); ?>
	<div class="main_image">
		<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/top/main_image.png" width="950" height="329" alt="想像以上の旅をご提供いたします。" /></a>
	</div><!-- .main_image end -->
	<div id="container">
		<div id="main" role="main">
			<div id="content">
				<div id="tour_info" class="clearfix">
					<h2><img src="<?php echo get_template_directory_uri(); ?>/images/top/ttl_tour.png" width="183" height="25" alt="最新ツアー情報"></h2>
					<p class="list_link"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/top/btn_linklist.png" width="80" height="29" alt="一覧を見る"></a></p>
					<div class="inner clearfix">
						<div class="tour_column">
							<h3><a href="#">ハワイラグジュアリーステイ3日間</a></h3>
							<p class="tour_info_top">
								<span class="tour_category hawaii-guam">ハワイ・グアム</span>
								<span class="tour_date">設定期間：2014/6/16&#xFF5E;2014/9/30</span>
							</p>
							<p class="tour_image"><a href="#"><img width="208" height="138" src="<?php echo get_template_directory_uri(); ?>/images/top/t1main-208x138.jpg" alt="ハワイラグジュアリーステイ3日間" /></a></p>
							<dl class="tour_info_foot clearfix">
								<dt>旅行代金</dt>
								<dd>120,000円&#xFF5E;216,000円</dd>
								<dt>訪問都市</dt>
								<dd>ホノルル（オアフ島）</dd>
								<dt>出発地</dt>
								<dd>成田, 名古屋, 札幌</dd>
								<dt>シートクラス</dt>
								<dd>ファーストクラス</dd>
							</dl>
						</div>
					</div><!-- end .inner -->
				</div><!-- end #tourInfo -->
				<div id="top_info" class="clearfix">
					<h2><img src="<?php echo get_template_directory_uri(); ?>/images/top/ttl_news.png" width="183" height="25" alt="お知らせ"></h2>
					<p class="list_link"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/top/btn_linklist.png" width="80" height="29" alt="一覧を見る"></a></p>
					<div class="inner clearfix">
						<ul>
							<li>
								<span class="info_li_inner">
									<span class="news_date">2013年04月23日</span>
									<span class="news_category ir">IR情報</span>
									<a href="#">2014年4月期 第3四半期報告書</a>
								</span>
							</li>
						</ul>
					</div>
				</div><!-- end #topInfo -->
			</div><!-- end #content -->
		</div><!-- end #main -->

	<?php get_sidebar(); ?>

	</div><!-- end #container -->
<?php get_footer(); ?>