<?php

//REGISTER JS
function loadJS()
{
    if(is_home()){
        wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/scripts.js', [], '1.0.0', true);
    }
}

add_action('wp_enqueue_scripts', 'loadJS');
