<?php

/**
 * CSS
 */
$minCss = new MatthiasMullie\Minify\CSS();
$minCss->add(dirname(__DIR__, 1) . "/assets/css/style.css");
$minCss->minify(dirname(__DIR__, 1) . "/assets/css/style.min.css");

/**
 * js
 */
$minJs = new MatthiasMullie\Minify\JS();
$minJs->add(dirname(__DIR__, 1) . "/assets/js/jquery.js");
$minJs->add(dirname(__DIR__, 1) . "/assets/js/theme/menu.js");
$minJs->add(dirname(__DIR__, 1) . "/assets/js/theme/scroll.js");
$minJs->add(dirname(__DIR__, 1) . "/assets/js/theme/home/animation.js");
$minJs->add(dirname(__DIR__, 1) . "/assets/js/theme/home/sweetalert2.all.js");
$minJs->add(dirname(__DIR__, 1) . "/assets/js/theme/home/request.js");
$minJs->minify(dirname(__DIR__, 1) . "/assets/js/script-home.min.js");