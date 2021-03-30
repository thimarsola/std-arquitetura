<?php

/**
 * Residential
 */
add_action('wp_ajax_nopriv_load_more_residential', 'load_more_residential');
add_action('wp_ajax_load_more_residential', 'load_more_residential');

function load_more_residential(){
    
    $paged = $_POST["page"] + 1;

    $query = new WP_Query([
        'post_type' => 'projetos',
        'tax_query' => [
            [
                'taxonomy' => 'categorias',
                'field' => 'slug',
                'terms' => 'projeto-residencial'
            ]
        ],
        'paged' => $paged
    ]);

        if( $query->have_posts()):

            while($query->have_posts()) : $query->the_post();

               get_template_part('template-parts/content', 'projects');

            endwhile;
        endif;

        wp_reset_postdata();

    die();

} 

/**
 * Comercial
 */
add_action('wp_ajax_nopriv_load_more_commercial', 'load_more_commercial');
add_action('wp_ajax_load_more_commercial', 'load_more_commercial');

function load_more_commercial(){
    
    $paged = $_POST["page"] + 1;

    $query = new WP_Query([
        'post_type' => 'projetos',
        'tax_query' => [
            [
                'taxonomy' => 'categorias',
                'field' => 'slug',
                'terms' => 'projeto-comercial'
            ]
        ],
        'paged' => $paged
    ]);

        if( $query->have_posts()):

            while($query->have_posts()) : $query->the_post();

               get_template_part('template-parts/content', 'projects');

            endwhile;
        endif;

        wp_reset_postdata();

    die();

} 