<!DOCTYPE html>
<html lang="ja">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        <?php bloginfo('name'); ?>
    </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="skype_toolbar" content="skype_toolbar_parser_compatible">
    <meta name="viewport" content="width=device-width">
    <meta name="apple-mobile-web-app-title" content="沢建商株式会社">
    <meta name="keywords" content="<?php bloginfo('keywords'); ?>">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta property="fb:app_id" content="">
    <meta property="og:locale" content="ja_JP">
    <meta property="og:type" content="website">
    <meta property="og:title" content="沢建商株式会社">
    <meta property="og:description" content="沢建商株式会社">
    <meta property="og:url" content="http://">
    <meta property="og:site_name" content="沢建商株式会社">
    <meta property="og:image" content="http://">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta name="twitter:card" content="">
    <meta name="twitter:description" content="沢建商株式会社">
    <meta name="twitter:title" content="沢建商株式会社">
    <meta name="twitter:image" content="http://">
    <link rel="canonical" href="http://">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-touch-icon.png">
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <!--External CSS Resources-->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto+Condensed:400,700">
    <!--Include CSS Resources-->
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" as="style">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="pagetop" class="l-page">
        <header class="l-header">
            <h1 class="l-header-logo">
                <a href="<?php echo home_url(); ?>" class="l-header-logo__link">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.png" alt="沢建商株式会社">
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
                                <span class="l-sp__navwrap--item-tit-ja sub-list-menu">企業情報</span>
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