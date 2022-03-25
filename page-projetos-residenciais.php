<?php get_header(); ?>

<main>

    <!-- hero -->
    <section class="hero hero__residencial">
        <div class="container">

            <!-- header -->
            <header class="hero__header">
                <h2>Projetos Residenciais</h2>
            </header>
            <!-- end of header -->

            <!-- content -->
            <div class="hero__content">
                <p>Conheça um pouco mais sobre os projetos residenciais desenvolvidos pelo escritório <b>STD
                        Arquitetura</b>
                </p>
            </div>
            <!-- end of content -->
        </div>
    </section>
    <!-- end of hero -->

    <!-- projects -->
    <section class="projects">
        <div class="container">

            <!-- header -->
            <header class="d-none">
                <h2>Conheças os nossos Projetos Residenciais</h2>
            </header>
            <!-- end of header -->

            <!-- content -->
            <div class="projects__content">
                <!--layout-->
                <div class="projects__content__layout">
                    <?php
                        $argProjects = [
                            'post_type' => 'projetos',
                            'tax_query' => [
                                [
                                    'taxonomy' => 'categorias',
                                    'field' => 'slug',
                                    'terms' => 'projeto-residencial'
                                ]
                            ]
                        ];
                        // the query
                        $the_query = new WP_Query($argProjects);
                    ?>

                    <?php if ($the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <?php get_template_part('template-parts/content', 'projects'); ?>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    <?php else : ?>

                    <?php _e('Desculpe! Não existem projetos cadastrados no momento.'); ?>
                    <?php endif; ?>
                </div>
                <!--end of layout-->

                <!-- button -->
                <div class="projects__content__button">
                    <a class="btn load-more" data-page="1" data-url="<?= admin_url(('admin-ajax.php')) ?>">
                        <img class="icon-sync" src="<?= get_template_directory_uri(); ?>/assets/images/sync.svg"
                            alt="Carregando" loading="lazy">
                        <span class="text">Carregar Mais</span>
                    </a>
                </div>
                <!-- end of button -->
            </div>
            <!-- end of content -->

        </div>
    </section>
    <!-- end of projects -->

</main>


<?php get_footer(); ?>