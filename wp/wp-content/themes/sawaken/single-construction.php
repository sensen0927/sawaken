<?php get_header(); //header.phpを取得
?>
<?php if (have_posts()) : //条件分岐：投稿があるなら
?>
<?php while (have_posts()) : the_post(); //繰り返し処理開始
    ?>
<!--
<div class="top-banner">
    <div class="title_top_banner">
        <span>施工事例</span>
    </div>
</div>
-->
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
                <?php
                        $genecon = get_field('genecon');
                        $material_product = get_field('material_product');
                        $design = get_field('design');
                        $img01 = get_field('img01');
                        $img02 = get_field('img02');
                        $img03 = get_field('img03');
                        $cat_use_name = '';
                        if ($terms = get_the_terms($post->ID, 'cat_use')) {
                            foreach ($terms as $term) {
                                $cat_use_name = esc_html($term->name);
                            }
                        };
                        $cat_product_name = '';
                        if ($terms = get_the_terms($post->ID, 'cat_product')) {
                            foreach ($terms as $term) {
                                $cat_product_name = esc_html($term->name);
                            }
                        };
                        ?>
                <div class="l-container pt-md-5">
                    <div class="row">
                        <div class="col-12 col-md-6 pl-md-5">
                            <?php if ($cat_use_name) { ?>
                            <h3 class="checklist-text pb-4">建物用途</h3>
                            <p class="checklist-text-cont pb-4"><?php echo $cat_use_name; ?></p>
                            <?php } ?>
                            <?php if ($genecon) { ?>
                            <h3 class="checklist-text pb-4">ゼネコン名</h3>
                            <p class="checklist-text-cont pb-4"><?php echo $genecon; ?></p>
                            <?php } ?>
                            <?php if ($material_product) { ?>
                            <h3 class="checklist-text pb-4">製品</h3>
                            <p class="checklist-text-cont pb-4"><?php echo $material_product; ?></p>
                            <?php } ?>
                            <?php if ($design) { ?>
                            <h3 class="checklist-text pb-4">設計事務所</h3>
                            <p class="checklist-text-cont pb-4"><?php echo $design; ?></p>
                            <?php } ?>
                            <?php if ($cat_product_name) { ?>
                            <h3 class="checklist-text pb-4">材料</h3>
                            <p class="checklist-text-cont pb-4"><?php echo $cat_product_name; ?></p>
                            <?php } ?>
                        </div>
                        <div class="col-12 col-md-6">
                            <?php if ($img01) { ?>
                            <div class="box-item">
                                <img src="<?php echo $img01['sizes']['medium_large'] ?>" alt=""
                                    style="width: 100%; height:auto; object-fit: cover;">
                            </div>
                            <?php } ?>
                            <?php if ($img02) { ?>
                            <div class="box-item mt-3">
                                <img src="<?php echo $img02['sizes']['medium_large'] ?>" alt=""
                                    style="width: 100%; height:auto; object-fit: cover;">
                            </div>
                            <?php } ?>
                            <?php if ($img03) { ?>
                            <div class="box-item mt-3">
                                <img src="<?php echo $img03['sizes']['medium_large'] ?>" alt=""
                                    style="width: 100%; height:auto; object-fit: cover;">
                            </div>
                            <?php } ?>
                        </div>
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
                            <span class="page-title-span">建築用途から探す</span>
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
                            <span class="page-title-span">製品から探す</span>
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