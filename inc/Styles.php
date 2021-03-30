<?php

//REGISTER CSS
function loadCSS()
{
    if(is_home()){
        wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.min.css', [], '1.0.0', 'all');
    }else if(is_page(['Projetos Residenciais', 'Projetos Comerciais'])){
        wp_enqueue_style('style-pages', get_template_directory_uri() . '/assets/css/style-pages.min.css', [], '1.0.0', 'all');
    }else if (is_single()){
        wp_enqueue_style('style-single', get_template_directory_uri() . '/assets/css/style-single.min.css', [], '1.0.0', 'all');
    }
}

add_action('wp_enqueue_scripts', 'loadCSS');