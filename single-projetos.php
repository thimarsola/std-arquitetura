<?php get_header(); ?>

<!-- main -->
<main>
    <!-- whatsapp -->
    <div id="whatsapp" class="whatsapp__button">
        <a rel="nofollow"
            href="https://api.whatsapp.com/send?phone=55<?= formatPhone(CONTACT["whatsapp"]); ?>&text=<?= urlencode(CONTACT["whatsappMessage"]); ?>"
            target="_blank" title="Fale com a STD Arquitetura pelo WhatsApp">
            <i class="stdarquitetura-whatsapp"></i>
        </a>
    </div>
    <!-- end of whatsapp -->

    <?php
if(have_posts()):
    while(have_posts()) : the_post();

    get_template_part('template-parts/content', 'single');

    endwhile;
    else: 
    _e('Desculpe! Não existem projetos cadastrados no momento.');

    endif; 
    wp_reset_postdata();
?>

    <!-- other projects -->
    <section class="other">
        <div class="container">
            <!-- header -->
            <header class="other__header">
                <h2>Conheça os nossos outros projetos!</h2>
            </header>
            <!-- end of header -->
        </div>

        <!-- content -->
        <div class="other__content">
            <!--layout-->
            <div class="other__content__layout">
                <?php
                        $categoryList = get_the_terms($post, 'categorias');
                        $categoryString = join(', ', wp_list_pluck($categoryList, 'name'));

                        $paged = ( get_query_var('paged') ) ? absint(get_query_var('paged')) : 1;

                        if($categoryString === 'Projeto Residencial'){
                            $argOtherProjects = [
                                'posts_per_page' => 4,
                                'post_type' => 'projetos',
                                'tax_query' => [
                                    [
                                        'taxonomy' => 'categorias',
                                        'field' => 'slug',
                                        'terms' => 'projeto-residencial'
                                    ]
                                ],
                                'orderby' => 'rand',
                                'paged' => $paged,
                            ];
                        }else{
                            $argOtherProjects = [
                                'posts_per_page' => 4,
                                'post_type' => 'projetos',
                                'tax_query' => [
                                    [
                                        'taxonomy' => 'categorias',
                                        'field' => 'slug',
                                        'terms' => 'projeto-comercial'
                                    ]
                                ],
                                'orderby' => 'rand',
                                'paged' => $paged,
                            ];                            
                        }
                        
                        // the query
                        $the_query = new WP_Query($argOtherProjects);
                    
                    if ($the_query->have_posts()) :
                        while ($the_query->have_posts()) : $the_query->the_post();
                            get_template_part('template-parts/content', 'other-projects');
                        endwhile;
                        
                        wp_reset_postdata();
                        else : 
                ?>

                <p style="grid-column: 1/4;">
                    <?php _e('Desculpe! Não existem projetos cadastrados no momento.'); ?>
                </p>

                <?php endif; ?>
            </div>
            <!--end of layout-->
        </div>
        <!-- end of content -->

    </section>
    <!-- end of other projects -->

</main>
<!-- end of main -->

<?php get_footer(); ?>