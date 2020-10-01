<?php
/**
 * フロントページ（front-page.php）で新着情報（投稿）を5件出力するマルチループ
 * 
 */
?>

			<?php $args = array( "post_type" => "post", "posts_per_page" => 5, "paged" => $paged ); ?>
			<?php $the_query = new WP_Query( $args ); ?>
			<?php if( $the_query -> have_posts() ) : ?>

				<ul>
				<?php while( $the_query->have_posts() ) : $the_query -> the_post(); ?>
					<li>
						<span class="date"><?php the_time( 'Y.m.d' ); ?></span>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</li>
				<?php endwhile; ?>
				</ul>

			<?php else: ?>

				<li>現在表示する記事がありません。</li>

			<?php endif; ?>

			<?php //リセット ?>
			<?php wp_reset_postdata(); ?>
