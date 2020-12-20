<?php get_header(); //header.phpを取得 
?>
<?php if (have_posts()) : //条件分岐：投稿があるなら 
?>
<?php while (have_posts()) : the_post(); //繰り返し処理開始 
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
                    <span class="page-title-span"><?php the_title(); ?></span>
                </div>

                <div class="l-container pt-md-5">
                    <div class="row">
                        <?php the_content(); ?>
                        <?php the_post_thumbnail('thumbnail'); ?>
                    </div>

                    <?php endwhile; // 繰り返し終了 
                            ?><?php else : //条件分岐：投稿が無い場合は 
                                ?>
                    <h2>投稿がみつかりません。</h2>
                    <p><a href="<?php echo esc_url(home_url('/')); ?>">トップページに戻る</a></p>
                    <?php endif; //条件分岐終了 
                        ?>
                    <section class="pb-100">
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
                    </section>
                </div>
            </div>
            <a class="l-footer__pagetop" href="#pagetop">
                <img class="button-to-top"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/common/button_to_top.png">
            </a>
        </div>
    </main>
</div>
<?php get_footer();