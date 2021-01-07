<footer class="l-footer">
    <!--//上部フッターナビ-->
    <div class="l-container">
        <div class="l-footer__navwrap">

            <div class="l-footer__navwrap--item">
                <div class="l-footer__navwrap--item-child">
                    <div class="l-footer__navwrap--item-tit">
                        <a class="l-footer__navwrap--item-tit-ja"
                            href="<?php echo home_url(); ?>/company_info/">企業情報</a>
                    </div>
                </div>
                <div class="l-footer__navwrap--item-child">
                    <div class="l-footer__navwrap--item-tit">
                        <a class="l-footer__navwrap--item-tit-ja"
                            href="<?php echo home_url(); ?>/company_info/development/">>
                            事業内容</a>
                    </div>
                </div>
                <div class="l-footer__navwrap--item-child">
                    <div class="l-footer__navwrap--item-tit">
                        <a class="l-footer__navwrap--item-tit-ja"
                            href="<?php echo home_url(); ?>/company_info/chose_reason/">>
                            選ばれる理由</a>
                    </div>
                </div>
            </div>

            <div class="l-footer__navwrap--item">
                <div class="l-footer__navwrap--item-child">
                    <div class="l-footer__navwrap--item-tit">
                        <a class="l-footer__navwrap--item-tit-ja"
                            href="<?php echo home_url(); ?>/construction/">施工事例</a>
                    </div>
                </div>
                <div class="l-footer__navwrap--item-child">
                    <div class="l-footer__navwrap--item-tit">
                        <a class="l-footer__navwrap--item-tit-ja"
                            href="<?php echo home_url(); ?>/actual_intro/">実績一覧</a>
                    </div>
                </div>
            </div>

            <div class="l-footer__navwrap--item">
                <div class="l-footer__navwrap--item-child">
                    <div class="l-footer__navwrap--item-tit">
                        <a class="l-footer__navwrap--item-tit-ja" href="<?php echo home_url(); ?>/alpolic/">アルポリック</a>
                    </div>
                </div>
            </div>

            <div class="l-footer__navwrap--item">
                <div class="l-footer__navwrap--item-child">
                    <div class="l-footer__navwrap--item-tit">
                        <a class="l-footer__navwrap--item-tit-ja"
                            href="<?php echo home_url(); ?>/employment_info/">採用情報</a>
                    </div>
                </div>
                <div class="l-footer__navwrap--item-child">
                    <div class="l-footer__navwrap--item-tit">
                        <a class="l-footer__navwrap--item-tit-ja" href="<?php echo home_url(); ?>/notice/">お知らせ</a>
                    </div>
                </div>
            </div>

            <div class="l-footer__navwrap--item">
                <div class="l-footer__navwrap--item-child">
                    <div class="l-footer__navwrap--item-tit">
                        <a class="l-footer__navwrap--item-tit-ja"
                            href="<?php echo home_url(); ?>/contact_us/">お問い合わせ</a>
                    </div>
                </div>
                <div class="l-footer__navwrap--item-child">
                    <div class="l-footer__navwrap--item-tit">
                        <a class="l-footer__navwrap--item-tit-ja"
                            href="<?php echo home_url(); ?>/privacy_policy/">個人情報保護方針</a>
                    </div>
                </div>
                <div class="l-footer__navwrap--item-child">
                    <div class="l-footer__navwrap--item-tit">
                        <a class="l-footer__navwrap--item-tit-ja" href="<?php echo home_url(); ?>/site_map/">サイトマップ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/l-container-->

    <!--//下部フッターナビ-->
    <div class="l-footer__under">
        <div class="l-container">

            <div class="l-footer__under-wrap">
                <div class="l-footer__copyright">
                    <p>Copyright ©️ 2020 All Rights Reserved.</p>
                </div>
            </div>

        </div>
        <!--/l-container-->
    </div>
</footer>
</div>
<!--/ l-page（共通）-->

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/lib.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/swiper-bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/common.js"></script>
<script>
var swiper = new Swiper('.banner-slider .swiper-container', {
    loop: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});
</script>
<?php wp_footer(); ?>
</body>

</html>