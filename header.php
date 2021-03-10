<!doctype html>
<html lang="pt-BR" itemscope itemtype="https://schema.org/WebSite">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- SCHEMA.ORG -->
    <meta itemprop="name" content="<?= SITE["name"]; ?>">
    <meta itemprop="desc" content="<?= SITE["desc"]; ?>">
    <meta itemprop="image" content="<?= get_template_directory_uri(); ?>/assets/images/post.jpg">
    <meta itemprop="url" content="<?= (is_home() ? get_site_url() : get_page_link()); ?>">

    <!-- OPEN GRAPH -->
    <meta property="og:locale" content="pt_BR" />
    <meta property="og:url" content="<?= (is_home() ? get_site_url() : get_page_link()); ?>">
    <meta property="og:title" content="<?= SITE["name"] ?>">
    <meta property="og:site_name" content="<?= SITE["name"] ?>">
    <meta property="og:desc" content="<?= SITE["desc"]; ?>">
    <meta property="og:image" content="<?= (is_home() ? get_site_url() : get_page_link()); ?>">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="600">
    <meta property="og:type" content="website">

    <!--CANONICAL-->
    <link rel="canonical" href="<?= (is_home() ? get_site_url() : get_page_link()); ?>" />
    <link rel="home" href="<?= (is_home() ? get_site_url() : get_page_link()); ?>" />

    <!-- desc -->
    <meta name="desc" content="<?= SITE["desc"]; ?>">

    <!-- ROBOTS -->
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">

    <!-- AUTHOR -->
    <meta name="author" content="<?= SITE["name"]; ?> - <?= SITE["domain"]; ?>">

    <!-- FACEBOOK -->
    <meta property="og:url" content="<?= (is_home() ? get_site_url() : get_page_link()); ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?= SITE["name"] ?>" />
    <meta property="og:desc" content="<?= SITE["desc"]; ?>" />
    <meta property="og:image" content="<?= get_template_directory_uri(); ?>/assets/images/post.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:locale" content="pt_BR" />
    <meta property="article:author" content="https://www.facebook.com/<?= SOCIAL["facebook_author"]; ?>/" />
    <meta property="article:publisher" content="https://www.facebook.com/<?= SOCIAL["facebook_page"]; ?>/" />

    <!-- TWITTER -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:domain" content="<?= (is_home() ? get_site_url() : get_page_link()); ?>" />
    <meta name="twitter:title" content="<?= SITE["name"] ?>" />
    <meta name="twitter:desc" content="<?= SITE["desc"]; ?>" />
    <meta name="twitter:image" content="<?= get_template_directory_uri(); ?>/assets/images/post.jpg" />
    <meta name="twitter:url" content="<?= (is_home() ? get_site_url() : get_page_link()); ?>" />

    <!-- REGION -->
    <meta name="geo.region" content="BR-SP" />
    <meta name="geo.placename" content="S&atilde;o Paulo" />
    <meta name="geo.position" content="-23.553541;-46.652957" />
    <meta name="ICBM" content="-23.553541, -46.652957" />

    <!-- FAVICON -->
    <link rel="shortcut icon" href="assets/images/favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="57x57"
        href="<?= get_template_directory_uri(); ?>/assets/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60"
        href="<?= get_template_directory_uri(); ?>/assets/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72"
        href="<?= get_template_directory_uri(); ?>/assets/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76"
        href="<?= get_template_directory_uri(); ?>/assets/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114"
        href="<?= get_template_directory_uri(); ?>/assets/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120"
        href="<?= get_template_directory_uri(); ?>/assets/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144"
        href="<?= get_template_directory_uri(); ?>/assets/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152"
        href="<?= get_template_directory_uri(); ?>/assets/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180"
        href="<?= get_template_directory_uri(); ?>/assets/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"
        href="<?= get_template_directory_uri(); ?>/assets/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32"
        href="<?= get_template_directory_uri(); ?>/assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96"
        href="<?= get_template_directory_uri(); ?>/assets/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="<?= get_template_directory_uri(); ?>/assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?= get_template_directory_uri(); ?>/assets/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage"
        content="<?= get_template_directory_uri(); ?>/assets/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!--TITLE-->
    <title><?= SITE["name"]; ?></title>

    <?php wp_head(); ?>
</head>

<body id="home" <?php body_class(); ?>>
    <?php
    if (function_exists('custom_wp_body_open')) {
        wp_body_open();
    }
    ?>

    <!--header-->
    <header class="header d-none">

        <!--navbar-->
        <div class="header__navbar">

            <!-- brand -->
            <a href="<?= get_home_url(); ?>">
                <i class="stdarquitetura-logo-header"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span><span class="path21"></span><span class="path22"></span><span class="path23"></span><span class="path24"></span><span class="path25"></span><span class="path26"></span><span class="path27"></span><span class="path28"></span><span class="path29"></span><span class="path30"></span><span class="path31"></span><span class="path32"></span><span class="path33"></span><span class="path34"></span><span class="path35"></span><span class="path36"></span><span class="path37"></span><span class="path38"></span><span class="path39"></span><span class="path40"></span><span class="path41"></span><span class="path42"></span><span class="path43"></span><span class="path44"></span><span class="path45"></span><span class="path46"></span><span class="path47"></span><span class="path48"></span><span class="path49"></span><span class="path50"></span><span class="path51"></span><span class="path52"></span><span class="path53"></span><span class="path54"></span><span class="path55"></span><span class="path56"></span><span class="path57"></span><span class="path58"></span><span class="path59"></span><span class="path60"></span><span class="path61"></span><span class="path62"></span><span class="path63"></span><span class="path64"></span><span class="path65"></span><span class="path66"></span><span class="path67"></span><span class="path68"></span><span class="path69"></span><span class="path70"></span><span class="path71"></span><span class="path72"></span><span class="path73"></span><span class="path74"></span><span class="path75"></span><span class="path76"></span><span class="path77"></span><span class="path78"></span><span class="path79"></span><span class="path80"></span><span class="path81"></span><span class="path82"></span><span class="path83"></span><span class="path84"></span><span class="path85"></span><span class="path86"></span><span class="path87"></span><span class="path88"></span><span class="path89"></span><span class="path90"></span><span class="path91"></span><span class="path92"></span><span class="path93"></span><span class="path94"></span><span class="path95"></span><span class="path96"></span><span class="path97"></span><span class="path98"></span><span class="path99"></span><span class="path100"></span><span class="path101"></span><span class="path102"></span><span class="path103"></span><span class="path104"></span><span class="path105"></span><span class="path106"></span><span class="path107"></span><span class="path108"></span><span class="path109"></span><span class="path110"></span><span class="path111"></span><span class="path112"></span><span class="path113"></span><span class="path114"></span><span class="path115"></span><span class="path116"></span><span class="path117"></span><span class="path118"></span><span class="path119"></span><span class="path120"></span><span class="path121"></span><span class="path122"></span><span class="path123"></span><span class="path124"></span><span class="path125"></span><span class="path126"></span><span class="path127"></span><span class="path128"></span><span class="path129"></span><span class="path130"></span><span class="path131"></span><span class="path132"></span><span class="path133"></span><span class="path134"></span><span class="path135"></span><span class="path136"></span><span class="path137"></span><span class="path138"></span><span class="path139"></span><span class="path140"></span><span class="path141"></span><span class="path142"></span><span class="path143"></span><span class="path144"></span><span class="path145"></span><span class="path146"></span><span class="path147"></span><span class="path148"></span><span class="path149"></span><span class="path150"></span><span class="path151"></span><span class="path152"></span><span class="path153"></span><span class="path154"></span><span class="path155"></span><span class="path156"></span><span class="path157"></span><span class="path158"></span><span class="path159"></span><span class="path160"></span><span class="path161"></span><span class="path162"></span><span class="path163"></span><span class="path164"></span><span class="path165"></span><span class="path166"></span><span class="path167"></span><span class="path168"></span><span class="path169"></span><span class="path170"></span><span class="path171"></span><span class="path172"></span><span class="path173"></span><span class="path174"></span><span class="path175"></span><span class="path176"></span><span class="path177"></span><span class="path178"></span><span class="path179"></span><span class="path180"></span><span class="path181"></span><span class="path182"></span><span class="path183"></span><span class="path184"></span><span class="path185"></span><span class="path186"></span><span class="path187"></span><span class="path188"></span><span class="path189"></span><span class="path190"></span><span class="path191"></span><span class="path192"></span><span class="path193"></span><span class="path194"></span></i>
            </a>

            <!-- toggle -->
            <div class="header__navbar__section">
                <div class="header__navbar__section__toggle">
                    <div class="header__navbar__section__toggle__bar"></div>
                    <div class="header__navbar__section__toggle__bar"></div>
                    <div class="header__navbar__section__toggle__bar"></div>
                </div>
                <!-- nav -->
                <nav class="header__navbar__section__nav">
                    <?php wp_nav_menu(array('theme_location' => 'header-home', 'container_class' => '')); ?>
                </nav>
            </div>
        </div>
        <!--end of navbar-->
    </header>
    <!--end of header-->