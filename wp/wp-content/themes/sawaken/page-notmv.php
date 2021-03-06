<?php
/*
Template Name:MVなし
*/
?>
<?php get_header() //header.phpを取得 
?>

<?php
$parent_id = $post->ancestors[count($post->ancestors) - 1];
$parent_slug = get_post($parent_id)->post_name;
?>

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
                <?php while (have_posts()) : the_post(); ?>

                <?php remove_filter('the_content', 'wpautop'); ?>
                <?php the_content(); ?>
                <?php endwhile; ?>
            </div>
        </div>
    </main>
</div>
<?php get_footer();