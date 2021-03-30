<!-- card -->
<article class="other__content__layout__card">

    <!-- header -->
    <header class="other__content__layout__card__header d-none">
        <h3><?php the_title(); ?></h3>
    </header>
    <!-- end of header -->

    <!-- body -->
    <div class="other__content__layout__card__body">
        <a href="<?= get_permalink(); ?>" title="Conheça o nosso <?php the_title(); ?>" target="_blank">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="Conheça o nosso <?php the_title(); ?>" loading="lazy">
        </a>
    </div>
    <!-- end of body -->

</article>
<!-- end of card -->