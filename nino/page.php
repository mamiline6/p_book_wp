<?php get_header(); ?>

        <main id="main">
        <h1 class="pageTItle"><img src="<?php bloginfo( 'template_url' ); ?>/images/title/<?php echo esc_attr( $post -> post_name )?>.jpg " width="630" height="152" alt="<?php echo esc_attr( single_post_title( '', false ) ); ?>"></h1>
        <p style="padding:10px 20px; color: #f00; border: 1px solid; margin: 10px 0 30px; background-color: #fe0;">pageテンプレートを返して表示しています。</p>
            <?php if( is_month() ): ?>
                <h2 class="pageTitle">アーカイブ：<?php echo single_month_title_jp(); ?></h2>
            <?php elseif( is_category() ): ?>
                <h2 class="pageTitle">カテゴリー：<?php echo single_cat_title(); ?></h2>
            <?php endif; ?>
            
            <div id="content">
                <?php if( have_posts() ): ?>
                    <?php while( have_posts() ) : the_post(); ?>
                    <div class="entry">
                        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                        <p class="date"><?php the_time( 'Y.m.d' ); ?></p>
                        <?php the_content( 'more' ); ?>
                        <div class="utility">カテゴリー<?php the_category(','); ?>｜<a href="<?php comments_link(); ?>">コメント（<?php comments_number( '0', '1', '%' ); ?>）</a><?php edit_post_link( '編集する' ); ?></div>
                    </div><!-- /.entry -->
                    <?php endwhile; ?>
                    <?php wp_pagenavi(); // ページナビゲーション出力 ?>
                <?php else: ?>
                    <p>現在表示する記事はありません</p>
                <?php endif; ?>
            </div><!-- /#content -->

        </main>

<?php get_sidebar( 'blog' ); ?>
<?php get_footer(); ?>
