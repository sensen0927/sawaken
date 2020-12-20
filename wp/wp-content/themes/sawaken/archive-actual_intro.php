<?php get_header(); //header.phpを取得 
?>

<div class="top-banner">
    <div class="title_top_banner">
        <span>実績紹介</span>
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
                    <span class="page-title-span">実績紹介</span>
                </div>
                <div class="page-content">
                    <div class="search_form">
                        <ul>
                            <li class="company_name">
                                <select class="">
                                    <option>会社名</option>
                                    <option>サンプル株式会社</option>
                                    <option>サンプル株式会社</option>
                                </select>
                            </li>
                            <li class="construction_type">
                                <select class="">
                                    <option>工事種別</option>
                                    <option>サンプルサンプル</option>
                                    <option>サンプルサンプル</option>
                                </select>
                            </li>
                            <li class="design_office">
                                <select class="">
                                    <option>設計事務所</option>
                                    <option>サンプル事務所</option>
                                    <option>サンプル事務所</option>
                                </select>
                            </li>
                        </ul>
                    </div>
                    <div class="search_btn">
                        <ul>
                            <li>
                                <button type="button">検索</button>
                            </li>
                        </ul>
                    </div>
                    <table class="search_result">
                        <thead>
                            <tr>
                                <th>会社名</th>
                                <th>工事種別</th>
                                <th>設計事務所</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            $my_query = new WP_Query(
                                array('paged' => $paged, 'posts_per_page' => 9, 'post_type' => 'actual_intro')
                            );
                            ?>
                            <?php if ($my_query->have_posts()) :
                                while ($my_query->have_posts()) : $my_query->the_post(); ?>
                            <tr>
                                <td><?php echo get_post_meta(get_the_ID(), 'company-name', true); ?></td>
                                <td><?php echo get_post_meta(get_the_ID(), 'construction-type', true); ?></td>
                                <td><?php echo get_post_meta(get_the_ID(), 'design-office', true); ?></td>
                            </tr>
                            <?php endwhile; // 繰り返し終了 
                                ?>
                            <?php endif; //条件分岐終了 
                            ?>
                        </tbody>
                    </table>
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