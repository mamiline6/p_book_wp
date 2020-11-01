<div class="branch_info clearfix">
	<h2><?php the_title(); ?></h2>
	<table>
		<tr>
			<th>住所</th>
			<td>〒<?php echo esc_html( $post->cf_zip ); ?><?php echo esc_html( $post->cf_address ); ?><br>
			<a href="https://maps.google.co.jp/maps?q=<?php echo esc_attr( $post->cf_lat ); ?>, <?php echo esc_attr( $post->cf_lng ); ?>+(<?php echo urlencode( esc_attr( $post->post_title ) ); ?>)&amp;iwloc=A&amp;z=<?php echo esc_attr( $post->cf_zoom ); ?>" target="_blank" id="display-gmap">Google マップで表示する</a>
			</td>
		</tr>
		<tr>
			<th>電話番号</th>
			<td><?php echo esc_html( $post->cf_tel ); ?></td>
		</tr>
	</table>
	<div class="detail_more">
		<p><a href="<?php the_permalink(); ?>">詳細を見る</a></p>
	</div>
</div><!-- /.branch_info -->
