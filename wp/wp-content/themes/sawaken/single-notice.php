<?php get_header(); //header.phpを取得 
?>
<!-- main-content-->
<?php if (have_posts()) : //条件分岐：投稿があるなら 
?>
<?php while (have_posts()) : the_post(); //繰り返し処理開始 
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
                <div class="page-title">
                    <div class="page-content">
                        <span class="notice-title-date"><?php the_time('Y.m.d'); ?></span><br>
                        <span class="notice-title-span"><?php the_title(); ?></span>
                        <hr class="notice-title-span-hr">
                        <div class="row notice_content">
                            <div class="col-12">
                                <div class="content_text">
                                    <?php the_content(); //投稿（固定ページ）の本文を表示 
                                            ?>
                                </div>
                            </div>
                        </div>
                        <div class="row content_pagination">
                            <?php // 現在の投稿に隣接している前後の投稿を取得する
                                    $prev_post = get_previous_post(); // 前の投稿を取得
                                    $next_post = get_next_post(); // 次の投稿を取得
                                    if ($prev_post || $next_post) : // どちらか一方があれば表示
                                    ?>
                            <?php if ($prev_post) : // 前の投稿があれば表示 
                                        ?>
                            <div class="col-4 list_button">
                                <a href="<?php echo get_permalink($prev_post->ID); ?>" class="prev-link">
                                    <span>前の記事</span>
                                    <!-- <br /><?php echo get_the_title($prev_post->ID); ?> -->
                                </a>
                            </div>
                            <?php endif; ?>
                            <div class="col-4 list_button"><a href="<?php echo home_url(); ?>/notice/">一覧へ戻る</a>
                            </div>
                            <?php if ($next_post) : // 次の投稿があれば表示 
                                        ?>
                            <div class="col-4 list_button">
                                <a href="<?php echo get_permalink($next_post->ID); ?>" class="next-link">
                                    <span>次の記事</span>
                                    <!-- <br /><?php echo get_the_title($next_post->ID); ?> -->
                                </a>
                            </div>
                            <?php endif; ?>
                        </div>
                        <?php endif; ?>
                        <?php endwhile; // 繰り返し終了 
                            ?><?php else : //条件分岐：投稿が無い場合は 
                                ?>
                        <h2>投稿がみつかりません。</h2>
                        <p><a href="<?php echo esc_url(home_url('/')); ?>">トップページに戻る</a></p>
                        <?php endif; //条件分岐終了 
                        ?>
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