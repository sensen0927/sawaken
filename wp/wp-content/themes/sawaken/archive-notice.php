<?php get_header(); //header.phpを取得
?>
<div class="top-banner">
    <div class="title_top_banner">
        <span>お知らせ</span>
    </div>
</div>

<div class="l-content">
    <div class="element"></div>
    <main class="l-main-common">
        <div class="content-main">
            <div class="l-container">
                <div>
                    <?php if (!(is_home() || is_front_page())) : ?>
                    <div class="content-breadcrumb bread">
                        <?php
                            if (function_exists('bcn_display')) {
                                bcn_display();
                            }
                            ?>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="page-title title_top_notice">
                    <span class="page-title-span">お知らせ</span>
                    <div class="page-content">
                        <ul class="top-notice-list">
                            <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            $my_query = new WP_Query(
                                array('paged' => $paged, 'posts_per_page' => 10, 'post_type' => 'notice')
                            );
                            ?>
                            <?php if ($my_query->have_posts()) :
                                while ($my_query->have_posts()) : $my_query->the_post(); ?>
                            <li class="top-notice-items">
                                <a href="<?php the_permalink(); ?>" class="top-notice-items-link">
                                    <div class="row top-notice-items-link-box">
                                        <h5 class="col-md-2 top-notice-items-link-title"><?php the_time('Y.m.d'); ?>
                                        </h5>
                                        <p class="col-md-10 top-notice-items-link-content"><?php the_title(); ?></p>
                                    </div>
                                </a>
                            </li>
                            <?php endwhile; ?>
                        </ul>
                        <?php else : //記事が1つも無い場合
                    ?>
                        <p>現在表示できる記事はありません。</p><br>
                        <div class="btn">
                            <a href="<?php echo esc_url(home_url()); ?>/">TOPへ戻る</a>
                        </div>
                        <?php endif; ?>
                        <div class="pagination justify-content-center notice_pagination">
                            <?php if (function_exists('wp_pagenavi')) { //ページネーションプラグイン
                            wp_pagenavi(array('query' => $my_query));
                        } ?>
                            <?php wp_reset_postdata();
                        wp_reset_query(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="l-footer__pagetop" href="#pagetop">
            <img class="button-to-top"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/common/button_to_top.png">
        </a>
    </main>
</div>
<?php get_footer();