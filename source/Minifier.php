<?php

/**
 * CSS
 */
$minCss = new MatthiasMullie\Minify\CSS();
$minCss->add(dirname(__DIR__, 1) . "/assets/css/style.css");
$minCss->minify(dirname(__DIR__, 1) . "/assets/css/style.min.css");

/**
 * Pages
 */
$minPagesCss = new MatthiasMullie\Minify\CSS();
$minPagesCss->add(dirname(__DIR__, 1) . "/assets/css/style-pages.css");
$minPagesCss->minify(dirname(__DIR__, 1) . "/assets/css/style-pages.min.css");

/**
 * Single
 */
$minSingleCss = new MatthiasMullie\Minify\CSS();
$minSingleCss->add(dirname(__DIR__, 1) . "/assets/css/style-single.css");
$minSingleCss->minify(dirname(__DIR__, 1) . "/assets/css/style-single.min.css");

/**
 * js
 */
$minJs = new MatthiasMullie\Minify\JS();
$minJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.js");
$minJs->add(dirname(__DIR__, 1) . "/assets/js/theme/menu.js");
$minJs->add(dirname(__DIR__, 1) . "/assets/js/theme/scroll.js");
$minJs->add(dirname(__DIR__, 1) . "/assets/js/theme/home/animation.js");
$minJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/sweetalert2.all.js");
$minJs->add(dirname(__DIR__, 1) . "/assets/js/theme/home/request.js");
$minJs->minify(dirname(__DIR__, 1) . "/assets/js/script-home.min.js");

/**
 * Residential
 */
$minResidentialJs = new MatthiasMullie\Minify\JS();
$minResidentialJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.js");
$minResidentialJs->add(dirname(__DIR__, 1) . "/assets/js/theme/menu.js");
$minResidentialJs->add(dirname(__DIR__, 1) . "/assets/js/theme/projects/animation.js");
$minResidentialJs->add(dirname(__DIR__, 1) . "/assets/js/theme/projects/ajax-residential.js");
$minResidentialJs->minify(dirname(__DIR__, 1) . "/assets/js/script-residential.min.js");

/**
 * Commercial
 */
$minCommercialJs = new MatthiasMullie\Minify\JS();
$minCommercialJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.js");
$minCommercialJs->add(dirname(__DIR__, 1) . "/assets/js/theme/menu.js");
$minCommercialJs->add(dirname(__DIR__, 1) . "/assets/js/theme/projects/animation.js");
$minCommercialJs->add(dirname(__DIR__, 1) . "/assets/js/theme/projects/ajax-commercial.js");
$minCommercialJs->minify(dirname(__DIR__, 1) . "/assets/js/script-commercial.min.js");

/**
 * Single
 */
$minSingleJs = new MatthiasMullie\Minify\JS();
$minSingleJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.js");
$minSingleJs->add(dirname(__DIR__, 1) . "/assets/js/theme/menu.js");
// $minSingleJs->add(dirname(__DIR__, 1) . "/assets/js/theme/projects/animation.js");
$minSingleJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/lightbox.js");
$minSingleJs->add(dirname(__DIR__, 1) . "/assets/js/theme/single/lightbox.js");
$minSingleJs->minify(dirname(__DIR__, 1) . "/assets/js/script-single.min.js");