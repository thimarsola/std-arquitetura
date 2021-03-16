<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">

    <title><?= SITE["name"]; ?></title>
    <base href="<?= get_site_url(); ?>">
    <meta name="description" content="<?= SITE["desc"]; ?>">
    <meta name="keywords" content="STD Arquitetura, Escritório STD Arquitetura, Arquitetura, Reforma">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="geo.region" content="BR-SP" />
    <meta name="geo.placename" content="S&atilde;o Paulo" />
    <meta name="geo.position" content="-23.553541;-46.652957" />
    <meta name="ICBM" content="-23.553541, -46.652957" />
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="rating" content="General">
    <meta name="revisit-after" content="7 days">
    <link rel="canonical" href="<?= (is_home() ? get_site_url() : get_page_link()); ?>" />
    <meta name="author" content="<?= SITE["name"]; ?> - <?= SITE["domain"]; ?>">
    <link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/assets/images/favicon.png">
    <meta property="og:region" content="Brasil">
    <meta property="og:title" content="<?= SITE["name"] ?>">
    <meta property="og:type" content="article">
    <meta property="og:url" content="<?= (is_home() ? get_site_url() : get_page_link()); ?>">
    <meta property="og:description" content="<?= SITE["desc"]; ?>">
    <meta property="og:site_name" content="<?= SITE["name"] ?>">

    <?php wp_head(); ?>
</head>

<body id="home" <?php body_class(); ?>>
    <?php
    if (function_exists('custom_wp_body_open')) {
        wp_body_open();
    }
    ?>

    <h1 class="d-none">STD Arquitetura</h1>

    <!--header-->
    <header class="header">

        <!--navbar-->
        <div class="header__navbar">

            <!-- brand -->
            <a href="<?= get_home_url(); ?>" title="STD Arquitetura">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/logo-topo.svg"
                    alt="Logo topo STD Arquitetura">
            </a>

            <div class="header__navbar__section">
                <!-- toggle -->
                <div class="header__navbar__section__toggle">
                    <div class="header__navbar__section__toggle__bar"></div>
                    <div class="header__navbar__section__toggle__bar"></div>
                    <div class="header__navbar__section__toggle__bar"></div>
                </div>
                <!-- end of toogle -->

                <!-- container -->
                <div class="header__navbar__section__container">
                    <!-- nav -->
                    <nav class="header__navbar__section__container__nav">
                        <?php wp_nav_menu(array('theme_location' => 'header-home', 'container_class' => '')); ?>
                    </nav>
                    <!-- end of nav -->

                    <!-- social media -->
                    <nav class="header__navbar__section__container__socialMedia">
                        <ul>
                            <li><a rel="nofollow" href="https://www.facebook.com/Arqdesignerthamiresdias"
                                    target="_blank" title="Facebook STD Arquitetura"><i
                                        class="stdarquitetura-facebook"></i></a></li>
                            <li><a rel="nofollow" href="https://www.instagram.com/stdarquitetura/" target="_blank"
                                    title="Instagram STD Arquitetura"><i class="stdarquitetura-instagram"></i></a></li>
                        </ul>
                    </nav>
                    <!-- end of social media -->
                </div>
                <!-- end of container -->
            </div>
        </div>
        <!--end of navbar-->
    </header>
    <!--end of header-->