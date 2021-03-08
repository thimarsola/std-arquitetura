<!doctype html>
<html lang="pt-BR" itemscope itemtype="https://schema.org/WebSite">

<head>
<meta charset="UTF-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-- SCHEMA.ORG -->
<meta itemprop="name" content="<?= SITE["name"]; ?>">
<meta itemprop="desc" content="<?= SITE["desc"]; ?>">
<meta itemprop="image"
	content="<?= get_template_directory_uri(); ?>/assets/images/post.jpg">
<meta itemprop="url"
	content="<?= (is_home() ? get_site_url() : get_page_link()); ?>">

<!-- OPEN GRAPH -->
<meta property="og:locale" content="pt_BR" />
<meta property="og:url"
	content="<?= (is_home() ? get_site_url() : get_page_link()); ?>">
<meta property="og:title" content="<?= SITE["name"] ?>">
<meta property="og:site_name" content="<?= SITE["name"] ?>">
<meta property="og:desc" content="<?= SITE["desc"]; ?>">
<meta property="og:image"
	content="<?= (is_home() ? get_site_url() : get_page_link()); ?>">
<meta property="og:image:type" content="image/jpeg">
<meta property="og:image:width" content="800">
<meta property="og:image:height" content="600">
<meta property="og:type" content="website">

<!--CANONICAL-->
<link rel="canonical"
	href="<?= (is_home() ? get_site_url() : get_page_link()); ?>" />
<link rel="home"
	href="<?= (is_home() ? get_site_url() : get_page_link()); ?>" />

<!-- desc -->
<meta name="desc" content="<?= SITE["desc"]; ?>">

<!-- ROBOTS -->
<meta name="robots" content="index, follow">
<meta name="googlebot" content="index, follow">

<!-- AUTHOR -->
<meta name="author" content="<?= SITE["name"]; ?> - <?= SITE["domain"]; ?>">

<!-- FACEBOOK -->
<meta property="og:url"
	content="<?= (is_home() ? get_site_url() : get_page_link()); ?>" />
<meta property="og:type" content="article" />
<meta property="og:title" content="<?= SITE["name"] ?>" />
<meta property="og:desc" content="<?= SITE["desc"]; ?>" />
<meta property="og:image"
	content="<?= get_template_directory_uri(); ?>/assets/images/post.jpg" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />
<meta property="og:locale" content="pt_BR" />
<meta property="article:author"
	content="https://www.facebook.com/<?= SOCIAL["facebook_author"]; ?>/" />
<meta property="article:publisher"
	content="https://www.facebook.com/<?= SOCIAL["facebook_page"]; ?>/" />

<!-- TWITTER -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:domain"
	content="<?= (is_home() ? get_site_url() : get_page_link()); ?>" />
<meta name="twitter:title" content="<?= SITE["name"] ?>" />
<meta name="twitter:desc" content="<?= SITE["desc"]; ?>" />
<meta name="twitter:image"
	content="<?= get_template_directory_uri(); ?>/assets/images/post.jpg" />
<meta name="twitter:url"
	content="<?= (is_home() ? get_site_url() : get_page_link()); ?>" />

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
<link rel="manifest"
	href="<?= get_template_directory_uri(); ?>/assets/images/favicon/manifest.json">
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