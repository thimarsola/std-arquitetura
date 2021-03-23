<?php

//REGISTER CSS
function loadCSS()
{
    if(is_home()){
        wp_enqueue_style('styles', get_template_directory_uri() . '/assets/css/styles.min.css', [], '1.0.0', 'all');
    }
}

add_action('wp_enqueue_scripts', 'loadCSS');