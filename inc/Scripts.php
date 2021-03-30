<?php

//REGISTER JS
function loadJS()
{
    if(is_home()){
        wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/script-home.min.js', [], '1.0.0', true);
    }else if(is_page('Projetos Residenciais')){
        wp_enqueue_script('scriptsPages', get_template_directory_uri() . '/assets/js/script-residential.min.js', [], '1.0.0', true);
    }else if(is_page('Projetos Comerciais')){
        wp_enqueue_script('scriptsPages', get_template_directory_uri() . '/assets/js/script-commercial.min.js', [], '1.0.0', true);
    }else if(is_single()){
        wp_enqueue_script('scriptsSingle', get_template_directory_uri() . '/assets/js/script-single.min.js', [], '1.0.0', true);
    }
}

add_action('wp_enqueue_scripts', 'loadJS');