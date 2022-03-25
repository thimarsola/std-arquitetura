<!-- hero -->
<?php
    $categoryList = get_the_terms($post, 'categorias');
    $categoryString = join(', ', wp_list_pluck($categoryList, 'name'));
?>

<section
    class="hero <?php echo (($categoryString === 'Projeto Residencial') ? "hero__residential" : "hero__commercial") ?>">
    <div class="container">

        <!-- header -->
        <header class="hero__header">
            <?php
                if($categoryString === 'Projeto Residencial'){
                    echo "<h2>Projeto Residencial</h2>";
                }else{
                    echo "<h2>Projeto Comercial</h2>";
                }
            ?>
        </header>
        <!-- end of header -->

        <!-- content -->
        <div class="hero__content">
            <p>Conheça um pouco mais sobre esse projeto</p>
        </div>
        <!-- end of content -->

        <!-- scroll -->
        <div class="hero__scroll">
            <a rel="nofollow" title="Conheça o nosso projeto" href="<?= get_the_permalink(); ?>#sobre-o-projeto"></a>
        </div>
        <!-- end of scroll -->
    </div>
</section>
<!-- end of hero -->

<!-- project -->
<section id="sobre-o-projeto" class="project">
    <div class="container">

        <!-- header -->
        <header class="project__header">
            <h2><?= get_the_title(); ?></h2>
        </header>
        <!-- end of header -->

        <!-- content -->
        <div class="project__content">

            <?php the_field('descricao_do_projeto'); ?>

            <!-- data -->
            <div class="project__content__data">

                <!-- card -->
                <article class="project__content__data__card">
                    <!-- image -->
                    <i class="stdarquitetura-icon"></i>
                    <!-- end of image -->

                    <!-- group -->
                    <div class="project__content__data__card__group">

                        <!-- header -->
                        <header class="project__content__data__card__group__header">
                            <h3>Arquiteto</h3>
                        </header>
                        <!-- end of header -->

                        <p><?= the_field('arquiteto'); ?></p>

                    </div>
                    <!-- end of group -->

                </article>
                <!-- end of card -->

                <!-- card -->
                <article class="project__content__data__card">
                    <!-- image -->
                    <i class="stdarquitetura-place"><span class="path1"></span><span class="path2"></span><span
                            class="path3"></span></i>
                    <!-- end of image -->

                    <!-- group -->
                    <div class="project__content__data__card__group">

                        <!-- header -->
                        <header class="project__content__data__card__group__header">
                            <h3>Local</h3>
                        </header>
                        <!-- end of header -->

                        <p><?= the_field('local'); ?></p>

                    </div>
                    <!-- end of group -->

                </article>
                <!-- end of card -->

                <!-- card -->
                <article class="project__content__data__card">
                    <!-- image -->
                    <i class="stdarquitetura-size"></i>
                    <!-- end of image -->

                    <!-- group -->
                    <div class="project__content__data__card__group">

                        <!-- header -->
                        <header class="project__content__data__card__group__header">
                            <h3>Tamanho</h3>
                        </header>
                        <!-- end of header -->

                        <p><?= the_field('metragem'); ?> m<sup>2</sup></p>

                    </div>
                    <!-- end of group -->

                </article>
                <!-- end of card -->

                <!-- card -->
                <article class="project__content__data__card">
                    <!-- image -->
                    <i class="stdarquitetura-type"></i>
                    <!-- end of image -->

                    <!-- group -->
                    <div class="project__content__data__card__group">

                        <!-- header -->
                        <header class="project__content__data__card__group__header">
                            <h3>Tipo</h3>
                        </header>
                        <!-- end of header -->

                        <p><?= $categoryString; ?></p>

                    </div>
                    <!-- end of group -->

                </article>
                <!-- end of card -->

            </div>
            <!-- end of data -->

        </div>
        <!-- end of content -->

    </div>

    <!-- photos -->
    <div class="project__photos">
        <div class="container">

            <!-- header -->
            <header class="project__photos__header">
                <h3>Fotos do projeto</h3>
            </header>
            <!-- end of header -->

            <!-- content -->
            <div class="project__photos__content">
                <?php
                    $photos = get_field('fotos_do_projeto');

                    if ($photos):
                ?>

                <!-- grid -->
                <div class="project__photos__content__grid">

                    <?php foreach ($photos as $photo): ?>

                    <div class="project__photos__content__grid__layout">
                        <a href="<?= $photo; ?>" data-lightbox="photo">
                            <img src="<?= $photo; ?>" alt="Conheça as fotos deste incrível projeto!" />
                        </a>
                    </div>

                    <?php endforeach; ?>
                </div>
                <!-- end of grid -->

                <?php endif; ?>
            </div>
            <!-- end of content -->

        </div>
    </div>
    <!-- end of photos -->
</section>
<!-- end of project -->