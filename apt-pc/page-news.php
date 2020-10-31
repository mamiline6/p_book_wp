<?php get_header(); ?>
	<div id="container">
		<div id="main" role="main">
			<div id="content">
				<h1 class="page_ttl"><?php single_post_title(); ?></h1>
				<?php
					$args = array(
						'post_type' => 'post',
						'paged'     => get_query_var( 'paged' )
					);
					$the_query = new WP_Query( $args );

					if( $the_query->have_posts() ):
						while( $the_query->have_posts() ):
							$the_query->the_post();
							get_template_part( 'content-archive' );
						endwhile;
					endif;

					if( class_exists( 'WP_SiteManager_page_navi' ) ):
						WP_SiteManager_page_navi::page_navi();
					endif;
					//リセット
					wp_reset_postdata();
				?>
				<?php get_template_part( 'page_to_link' );?>
			</div><!-- end #content -->
		</div><!-- end #main -->

	<?php get_sidebar( 'page' ); ?>

	</div><!-- end #container -->
<?php get_footer(); ?>