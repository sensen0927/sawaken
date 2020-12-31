<?php get_header(); //header.phpを取得
?>

<div class="top-banner">
    <div class="title_top_banner">
        <span>実績紹介</span>
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
                <?php
                $args = array(
                    'post_type' => 'actual_intro',
                    'post_status' => 'publish',
                    'posts_per_page' => -1,
                );
                ?>
                <?php $wp_query = new WP_Query($args); ?>
                <div class="page-content">
                    <div class="search_form">
                        <ul>
                            <li class="company_name">
                                <select id="company_name_select">
                                    <option value="">会社名を選択</option>
                                    <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                                    <option value="<?php the_title(); ?>"><?php the_title(); ?></option>
                                    <?php endwhile; ?>
                                </select>
                            </li>
                            <li class="construction_type">
                                <select id="material_name_select">
                                    <option value="">材料を選択</option>
                                    <?php
                                    $terms = get_terms('material', 'hide_empty=0');
                                    foreach ($terms as $term) {
                                        echo '<option value="' . esc_html($term->slug) . '">' . esc_html($term->name) . '</option>';
                                    }
                                    ?>
                                </select>
                            </li>
                            <li class="design_office">
                                <select id="product_name_select">
                                    <option value="">製品を選択</option>
                                    <?php
                                    $terms = get_terms('product', 'hide_empty=0');
                                    foreach ($terms as $term) {
                                        echo '<option value="' . esc_html($term->slug) . '">' . esc_html($term->name) . '</option>';
                                    }
                                    ?>
                                </select>
                            </li>
                        </ul>
                        <div class="search-box mt-5">
                            <input type="text" id="free_word_search" placeholder="検索キーワードを入力">
                        </div>
                    </div>
                    <div class="search_btn">
                        <ul>
                            <li>
                                <button type="button" id="actual_intro_submit">検索</button>
                            </li>
                        </ul>
                    </div>
                    <table class="search_result" id="actual_intro_result_table">
                        <thead>
                            <tr>
                                <th>計画名</th>
                                <th>完工年度</th>
                                <th>建物用途</th>
                                <th>ゼネコン名</th>
                                <th>設計事務所</th>
                                <th>材料</th>
                                <th>製品</th>
                                <th>仕様</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                            <?php if (get_field('mp_list')) { ?>
                            <?php while (the_repeater_field('mp_list')) : ?>
                            <?php $list_material = get_sub_field('list_material'); ?>
                            <?php $list_product = get_sub_field('list_product'); ?>
                            <?php $list_name = get_sub_field('list_name'); ?>
                            <?php $list_year = get_sub_field('list_year'); ?>
                            <?php $list_use = get_sub_field('list_use'); ?>
                            <?php $list_office = get_sub_field('list_office'); ?>
                            <?php $list_way = get_sub_field('list_way'); ?>
                            <tr>
                                <td><?php echo $list_name; ?></td>
                                <td><?php echo $list_year; ?></td>
                                <td><?php echo $list_use; ?></td>
                                <td data-company="<?php the_title(); ?>"><?php the_title(); ?></td>
                                <td><?php echo $list_office; ?></td>
                                <td data-material="<?php echo $list_material->slug; ?>"><?php echo $list_material->name; ?></td>
                                <td data-product="<?php echo $list_product->slug; ?>"><?php echo $list_product->name; ?></td>
                                <td><?php echo $list_way; ?></td>
                            </tr>
                            <?php endwhile; ?>
                            <?php }; ?>
                            <?php endwhile; ?>
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