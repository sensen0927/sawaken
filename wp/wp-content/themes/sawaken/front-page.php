<?php
/*
Template Name: トップページ
*/
?>
<?php get_header() //header.phpを取得 
?>
<!--
<div class="top-global">
    <div class="l-container">
        <ol class="top-breadcrumb">
            <li>
                <a href="<?php echo home_url(); ?>/company_info/development/">
                    <span>事業内容</span>
                </a>
            </li>

            <li>
                <a href="<?php echo home_url(); ?>/chose_reason/">
                    <span>選ばれる理由</span>
                </a>
            </li>
        </ol>
    </div>
</div>
-->

<div class="l-content l-content-index">
    <main class="l-main">
        <div class="banner-slider">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide top-hero l-block top-slide-1">
                        <!-- #MV -->
                        <div class="top-hero__mvarea">
                            <div class="top-hero__mvarea--item">
                                <!-- #キャッチコピー -->
                                <div class="l-container">
                                    <div class="row">
                                        <div class="top-hero__txtarea col-12">
                                            <div class="top-page__main-visual inview">
                                                <div class="txt txt02"><span>技術と誠意で飛躍する</span></div>
                                                <div class="txt txt03"><span>沢建商株式会社</span></div>
                                            </div>
                                        </div>
                                        <div class="top-hero__txtarea col-12 button_extra_div_sp">
                                            <a class="top-hero__txtarea--link c-btn c-btn__border bg-blank button_extra"
                                                href="<?php echo home_url(); ?>/company_info/"><span>企業情報</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide top-hero l-block top-slide-2">
                        <!-- #MV -->
                        <div class="top-hero__mvarea">
                            <div class="top-hero__mvarea--item">
                                <!-- #キャッチコピー -->
                                <div class="l-container">
                                    <div class="row">
                                        <div class="top-hero__txtarea col-md-8 col-sm-12">
                                            <div class="top-page__main-visual inview">
                                                <div class="txt txt02"><span>技術と誠意で飛躍する</span></div>
                                                <div class="txt txt03"><span>沢建商株式会社</span></div>
                                            </div>
                                        </div>
                                        <div class="top-hero__txtarea col-md-4 col-sm-12 button_extra_div_sp">
                                            <a class="top-hero__txtarea--link c-btn c-btn__border bg-blank button_extra"
                                                href="construction_example.html"><span>施工事例</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide top-hero l-block top-slide-3">
                        <!-- #MV -->
                        <div class="top-hero__mvarea">
                            <div class="top-hero__mvarea--item">
                                <!-- #キャッチコピー -->
                                <div class="l-container">
                                    <div class="row">
                                        <div class="top-hero__txtarea col-md-8 col-sm-12">
                                            <div class="top-page__main-visual inview">
                                                <div class="txt txt02"><span>技術と誠意で飛躍する</span></div>
                                                <div class="txt txt03"><span>沢建商株式会社</span></div>
                                            </div>
                                        </div>
                                        <div class="top-hero__txtarea col-md-4 col-sm-12 button_extra_div_sp">
                                            <a class="top-hero__txtarea--link c-btn c-btn__border bg-blank button_extra"
                                                href="<?php echo home_url(); ?>/actual_intro/"><span>実績紹介</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <!-- #MV -->
        <div class="top-chose">
            <div class="row">
                <div class="col-md-5 top-chose_content_box_left">
                    <h5 class="top-chose_title_jp">沢建商が選ばれる理由</h5>
                    <p>
                        <span class="top-chose_content_jp">3</span>
                        <span class="top-chose_content_mid_jp">つの</span>
                        <span class="top-chose_content_jp">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/title-00.png"
                                class="top-strong_img_3">
                        </span>
                    <p>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/icon-01.png"
                            class="top-chose_img">
                    </p>
                    <p>
                        <a class="top-hero__txtarea--link c-btn c-btn__border bg-blank c-btn__chose"
                            href="<?php echo home_url(); ?>/chose_reason/">
                            <span>詳細を見る</span>
                        </a>
                    </p>
                </div>
                <div class="col-md-7 top-chose_content_box_right">
                    <ul class="top-strong-list">
                        <li class="top-strong-items">
                            <a href="<?php echo home_url(); ?>/chose_reason/" class="top-strong-items-link">
                                <div class="row top-strong-items-link-box">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/title-01.png"
                                        class="top-strong_img">
                                    <p class="col-md-12 top-strong-items-link-content">かゆいところに手が届く提案</p>
                                </div>
                            </a>
                        </li>
                        <li class="top-strong-items">
                            <a href="<?php echo home_url(); ?>/chose_reason/" class="top-strong-items-link">
                                <div class="row top-strong-items-link-box">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/title-02.png"
                                        class="top-strong_img">
                                    <p class="col-md-12 top-strong-items-link-content">設計から施工まで迅速かつ適切に対応</p>
                                </div>
                            </a>
                        </li>
                        <li class="top-strong-items">
                            <a href="<?php echo home_url(); ?>/chose_reason/" class="top-strong-items-link">
                                <div class="row top-strong-items-link-box">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/title-03.png"
                                        class="top-strong_img">
                                    <p class="col-md-12 top-strong-items-link-content">誠意と技術で最後までお付き合い</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- #MV -->
        <div class="top-alpolic">
            <div class="l-container">
                <div class="row">
                    <div class="col-md-4 offset-md-4 top-alpolic_content_box">
                        <h3 class="top-alpolic_title_jp">ALPOLIC<span class="r">&reg;</span></h3>
                        <h5 class="top-alpolic_title_en">アルポリック</h5>
                        <p class="top-alpolic_content">自社専門工場で加工</p>
                        <div class="top-alpolic-view-detail">
                            <a class="c-btn c-btn__detail" href="<?php echo home_url(); ?>/alpolic/">
                                <span>詳細を見る</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="top-product top-product-1">
            <div class="l-container">
                <section>
                    <div class="sec-titarea top-product--titarea">
                        <h2 class="sec-titarea__ja sec-tit">建物・用途から探す</h2>
                    </div>
                    <ul class="top-product--productlist">
                        <li class="top-product--productitem h225-w300">
                            <a href="<?php echo home_url(); ?>/cat_use/office/" class="hover-gradation">
                                <div class="top-product--productitem__titarea">
                                    <h3 class="top-product--productitem__tit top-product__tit_after">オフィス</h3>
                                </div>
                                <div class="top-product--productitem__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/image-03.jpg"
                                        class="" data-rjs="2" alt="オフィス">
                                </div>
                            </a>
                        </li>
                        <li class="top-product--productitem h225-w300">
                            <a href="<?php echo home_url(); ?>/cat_use/housing-complex/" class="hover-gradation">
                                <div class="top-product--productitem__titarea">
                                    <h3 class="top-product--productitem__tit top-product__tit_after">集合住宅</h3>
                                </div>
                                <div class="top-product--productitem__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/image-04.jpg"
                                        class="" data-rjs="2" alt="集合住宅">
                                </div>
                            </a>
                        </li>
                        <li class="top-product--productitem h225-w300">
                            <a href="<?php echo home_url(); ?>/cat_use/medical-institution/" class="hover-gradation">
                                <div class="top-product--productitem__titarea">
                                    <h3 class="top-product--productitem__tit top-product__tit_after">医療機関</h3>
                                </div>
                                <div class="top-product--productitem__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/image-05.jpg"
                                        class="" data-rjs="2" alt="医療機関">
                                </div>
                            </a>
                        </li>
                        <li class="top-product--productitem h225-w300">
                            <a href="<?php echo home_url(); ?>/cat_use/station/" class="hover-gradation">
                                <div class="top-product--productitem__titarea">
                                    <h3 class="top-product--productitem__tit top-product__tit_after">駅・空港</h3>
                                </div>
                                <div class="top-product--productitem__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/image-14.jpg"
                                        class="" data-rjs="2" alt="駅・空港">
                                </div>
                            </a>
                        </li>
                        <li class="top-product--productitem h225-w300">
                            <a href="<?php echo home_url(); ?>/cat_use/eresearch/" class="hover-gradation">
                                <div class="top-product--productitem__titarea">
                                    <h3 class="top-product--productitem__tit top-product__tit_after">教育・研究施設</h3>
                                </div>
                                <div class="top-product--productitem__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/image-06.jpg"
                                        class="" data-rjs="2" alt="教育・研究施設">
                                </div>
                            </a>
                        </li>
                        <li class="top-product--productitem h225-w300">
                            <a href="<?php echo home_url(); ?>/cat_use/public/" class="hover-gradation">
                                <div class="top-product--productitem__titarea">
                                    <h3 class="top-product--productitem__tit top-product__tit_after">公共施設</h3>
                                </div>
                                <div class="top-product--productitem__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/image-15.jpg"
                                        class="" data-rjs="2" alt="公共施設">
                                </div>
                            </a>
                        </li>
                        <li class="top-product--productitem h225-w300">
                            <a href="<?php echo home_url(); ?>/cat_use/hotel/" class="hover-gradation">
                                <div class="top-product--productitem__titarea">
                                    <h3 class="top-product--productitem__tit top-product__tit_after">宿泊施設</h3>
                                </div>
                                <div class="top-product--productitem__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/image-08.jpg"
                                        class="" data-rjs="2" alt="宿泊施設">
                                </div>
                            </a>
                        </li>
                        <li class="top-product--productitem h225-w300">
                            <a href="<?php echo home_url(); ?>/cat_use/commercial/" class="hover-gradation">
                                <div class="top-product--productitem__titarea">
                                    <h3 class="top-product--productitem__tit top-product__tit_after">商業施設・テナント</h3>
                                </div>
                                <div class="top-product--productitem__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/image-07.jpg"
                                        class="" data-rjs="2" alt="商業施設">
                                </div>
                            </a>
                        </li>
                    </ul>
                </section>
            </div>
        </div>

        <div class="top-product top-product-2">
            <div class="l-container">
                <section>
                    <div class="sec-titarea top-product--titarea">
                        <h2 class="sec-titarea__ja sec-tit  sec-tit-white">製品から探す</h2>
                    </div>
                    <ul class="top-product--productlist">
                        <li class="top-product--productitem h200-w250">
                            <a href="<?php echo home_url(); ?>/cat_product/aluminum/" class="hover-gradation">
                                <div class="top-product--productitem__titarea productitem-bottom titarea05">
                                    <h3 class="top-product--productitem__tit">アルミ</h3>
                                </div>
                                <div class="top-product--productitem__image">
                                    <span>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/image-10.jpg"
                                            class="" data-rjs="2" alt="オフィス">
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li class="top-product--productitem h200-w250">
                            <a href="<?php echo home_url(); ?>/cat_product/stainless/" class="hover-gradation">
                                <div class="top-product--productitem__titarea productitem-bottom titarea05">
                                    <h3 class="top-product--productitem__tit">ステンレス</h3>
                                </div>
                                <div class="top-product--productitem__image">
                                    <span>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/image-11.jpg"
                                            class="" data-rjs="2" alt="オフィス">
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li class="top-product--productitem h200-w250">
                            <a href="<?php echo home_url(); ?>/cat_product/steel/" class="hover-gradation">
                                <div class="top-product--productitem__titarea productitem-bottom titarea05">
                                    <h3 class="top-product--productitem__tit">スチール</h3>
                                </div>
                                <div class="top-product--productitem__image">
                                    <span>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/image-12.jpg"
                                            class="" data-rjs="2" alt="オフィス">
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li class="top-product--productitem h200-w250">
                            <a href="<?php echo home_url(); ?>/cat_product/alpolic/" class="hover-gradation">
                                <div class="top-product--productitem__titarea productitem-bottom titarea05">
                                    <h3 class="top-product--productitem__tit">アルポリック</h3>
                                </div>
                                <div class="top-product--productitem__image">
                                    <span>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/image-02.jpg"
                                            class="" data-rjs="2" alt="オフィス">
                                    </span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </section>
            </div>
        </div>

        <div class="top-notice">
            <div class="l-container">
                <section>
                    <div class="sec-titarea">
                        <h2 class="sec-tit">お知らせ</h2>
                    </div>
                    <ul class="top-notice-list">
                        <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $my_query = new WP_Query(
                            array('paged' => $paged, 'posts_per_page' => 5, 'post_type' => 'notice')
                        );
                        ?>
                        <?php if ($my_query->have_posts()) :
                            while ($my_query->have_posts()) : $my_query->the_post(); ?>
                        <li class="top-notice-items">
                            <a class="top-notice-items-link" href="<?php the_permalink(); ?>">
                                <div class="row top-notice-items-link-box">
                                    <h5 class="col-md-2 top-notice-items-link-title"><?php the_time('Y.m.d'); ?></h5>
                                    <p class="col-md-10 top-notice-items-link-content"><?php the_title(); ?></p>
                                </div>
                            </a>
                        </li>
                        <?php endwhile;
                        endif;
                        wp_reset_postdata();
                        ?>
                    </ul>
                    <div class="top-notice-view-more">
                        <a class="c-btn c-btn__more" href="<?php echo home_url(); ?>/notice/"><span>一覧を見る</span></a>
                    </div>
                </section>
            </div>
        </div>

        <a class="l-footer__pagetop" href="#pagetop">
            <img class="button-to-top"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/common/button_to_top.png">
        </a>
    </main>
</div>

<?php get_footer();