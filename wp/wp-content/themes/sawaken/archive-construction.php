<?php get_header(); //header.phpを取得
?>

<div class="top-banner">
    <div class="title_top_banner">
        <span>施工事例</span>
    </div>

    <div class="l-container element_top_banner">
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
                <div class="page-title">
                    <span class="page-title-span">建築用途</span>
                    <div class="page-title-list page-title-list-wrapper">
                        <?php
                        $terms = get_terms('cat_use', 'hide_empty=0');
                        foreach ($terms as $term) {
                            echo '<div class="page-title-list-text"><span><a href="' . get_term_link($term) . '">' . $term->name . '</a></span></div>';
                        }
                        ?>
                    </div>
                </div>
                <div class="page-title">
                    <span class="page-title-span">製品</span>
                    <div class="page-title-list page-title-list-wrapper">
                        <?php
                        $terms = get_terms('cat_product', 'hide_empty=0');
                        foreach ($terms as $term) {
                            echo '<div class="page-title-list-text"><span><a href="' . get_term_link($term) . '">' . $term->name . '</a></span></div>';
                        }
                        ?>
                    </div>
                </div>

                <div class="page-content">
                    <section>
                        <div class="img-list-wrapper">
                            <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            $my_query = new WP_Query(
                                array('paged' => $paged, 'posts_per_page' => 18, 'post_type' => 'construction')
                            );
                            ?>
                            <?php if ($my_query->have_posts()) :
                                while ($my_query->have_posts()) : $my_query->the_post(); ?>

                            <div class="img-item">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="image-item">
                                        <?php the_post_thumbnail('single-post-thumbnail', array('title' => '' . get_the_title() . '')); ?>
                                        <!-- サムネイルの画像タイトルを投稿タイトルへ変更 -->
                                        <?php
                                            $image = get_post_meta(get_the_ID(), 'img01', true);
                                            $size =  array(200, 200);
                                            if ($image) {
                                                echo wp_get_attachment_image($image, $size);
                                            }
                                        ?>
                                    </div>
                                </a>
                                <div class="image-title">
                                    <h3 class=""><?php the_title(); ?></h3>
                                </div>
                            </div>
                            <?php endwhile; ?>
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
                    </section>
                </div>
                <a class="l-footer__pagetop" href="#pagetop">
                    <img class="button-to-top"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/common/button_to_top.png">
                </a>
            </div>
    </main>
</div>

<?php get_footer();