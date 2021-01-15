<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="skype_toolbar" content="skype_toolbar_parser_compatible">
    <meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-touch-icon.png">
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <!--External CSS Resources-->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto+Condensed:400,700">
    <!--Include CSS Resources-->
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css?20210115" as="style">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WWKLN2C');</script>
<!-- End Google Tag Manager -->
<!-- BowNow -->
<script id="_bownow_ts">
var _bownow_ts = document.createElement('script');
_bownow_ts.charset = 'utf-8';
_bownow_ts.src = 'https://contents.bownow.jp/js/UTC_c1e7c1b5d70547f5668b/trace.js';
document.getElementsByTagName('head')[0].appendChild(_bownow_ts);
</script>
<!-- End BowNow -->

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WWKLN2C" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <div id="pagetop" class="l-page">
        <header class="l-header">
            <h1 class="l-header-logo">
                <a href="<?php echo home_url(); ?>" class="l-header-logo__link">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.png" alt="沢建商株式会社"
                        class="logo_pc">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo-sp.png"
                        alt="沢建商株式会社" class="logo_sp">
                    <span class="l-header-logo__name"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo_2.png"
                            alt="沢建商株式会社"></span>
                </a>
            </h1>
            <button type="button" class="l-nav__btn js-nav__btn"><span>メニュー</span></button>
            <nav class="l-nav l-nav__lg js-nav">
                <div class="l-nav__inner">
                    <ul class="l-nav__list">
                        <li class="l-nav__item"><a href="<?php echo home_url(); ?>" class="l-nav__link">HOME</a></li>
                        <li class="l-nav__item"><a href="<?php echo home_url(); ?>/company_info/"
                                class="l-nav__link">企業情報</a>
                            <div class="sub-nav">
                                <ul class="sub-list">
                                    <li>
                                        <a href="<?php echo home_url(); ?>/company_info/development/">
                                            <span>事業内容</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo home_url(); ?>/company_info/chose_reason/">
                                            <span>選ばれる理由</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="l-nav__item"><a href="<?php echo home_url(); ?>/construction/"
                                class="l-nav__link">施工事例</a></li>
                        <li class="l-nav__item"><a href="<?php echo home_url(); ?>/actual_intro/"
                                class="l-nav__link">実績一覧</a></li>
                        <li class="l-nav__item"><a href="<?php echo home_url(); ?>/alpolic/"
                                class="l-nav__link">アルポリック加工</a></li>
                        <li class="l-nav__item"><a href="<?php echo home_url(); ?>/employment_info/"
                                class="l-nav__link">採用情報</a></li>
                        <li class="l-nav__item"><a href="<?php echo home_url(); ?>/notice/" class="l-nav__link">お知らせ</a>
                        </li>
                        <li class="l-nav__item"><a href="<?php echo home_url(); ?>/contact_us/"
                                class="l-nav__inquiry"><span>お問い合わせ</span></a></li>
                    </ul>
                </div>
                <div class="l-sp__nav">
                    <div class="l-sp__navwrap">
                        <div class="l-sp__navwrap--item js-accordion">
                            <div class="l-sp__navwrap--item-tit js-accordion-btn">
                                <a class="l-sp__navwrap--item-tit-ja" href="<?php echo home_url(); ?>">HOME</a>
                            </div>
                        </div>
                        <div class="l-sp__navwrap--item js-accordion">
                            <div class="l-sp__navwrap--item-tit js-accordion-btn">
                                <a class="l-sp__navwrap--item-tit-ja"
                                    href="<?php echo home_url(); ?>/company_info/">企業情報</a>
                            </div>
                        </div>
                        <div class="l-sp__navwrap--item js-accordion">
                            <div class="l-sp__navwrap--item-tit js-accordion-btn">
                                <a class="l-sp__navwrap--item-tit-ja"
                                    href="<?php echo home_url(); ?>/company_info/development/"> - 事業内容</a>
                            </div>
                        </div>
                        <div class="l-sp__navwrap--item js-accordion">
                            <div class="l-sp__navwrap--item-tit js-accordion-btn">
                                <a class="l-sp__navwrap--item-tit-ja"
                                    href="<?php echo home_url(); ?>/company_info/chose_reason/"> - 選ばれる理由</a>
                            </div>
                        </div>
                        <div class="l-sp__navwrap--item js-accordion">
                            <div class="l-sp__navwrap--item-tit js-accordion-btn">
                                <a class="l-sp__navwrap--item-tit-ja"
                                    href="<?php echo home_url(); ?>/construction/">施工事例</a>
                            </div>
                        </div>
                        <div class="l-sp__navwrap--item js-accordion">
                            <div class="l-sp__navwrap--item-tit js-accordion-btn">
                                <a class="l-sp__navwrap--item-tit-ja"
                                    href="<?php echo home_url(); ?>/actual_intro/">実績一覧</a>
                            </div>
                        </div>
                        <div class="l-sp__navwrap--item js-accordion">
                            <div class="l-sp__navwrap--item-tit js-accordion-btn">
                                <a class="l-sp__navwrap--item-tit-ja"
                                    href="<?php echo home_url(); ?>/alpolic/">アルポリック加工</a>
                            </div>
                        </div>
                        <div class="l-sp__navwrap--item js-accordion">
                            <div class="l-sp__navwrap--item-tit js-accordion-btn">
                                <a class="l-sp__navwrap--item-tit-ja"
                                    href="<?php echo home_url(); ?>/employment_info/">採用情報</a>
                            </div>
                        </div>
                        <div class="l-sp__navwrap--item js-accordion">
                            <div class="l-sp__navwrap--item-tit js-accordion-btn">
                                <a class="l-sp__navwrap--item-tit-ja" href="<?php echo home_url(); ?>/notice/">お知らせ</a>
                            </div>
                        </div>
                        <div class="l-container">
                            <a class="l-sp__navwrap--inquiry" href="<?php echo home_url(); ?>/contact_us/">
                                <span>お問い合わせ</span>
                            </a>
                        </div>
                        <div class="l-sp__navwrap--close js-nav__closebtn">
                            <span>閉じる</span>
                        </div>
                    </div>
                </div>
            </nav>
        </header>