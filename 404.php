<?php get_header(); ?>

<main>
    <!-- image -->
    <div class="image">
        <img src="<?= get_template_directory_uri(); ?>/assets/images/logo-rodape.svg" alt="Logo rodapé STD Arquitetura">
    </div>
    <!-- end of image -->


    <!-- error -->
    <div class="error">
        <div class="container">
            <!-- header -->
            <header class="error__header">
                <h2>Oops!</h2>
            </header>
            <!-- end of header -->

            <!-- content -->
            <div class="error__content">
                <p>Parece que não conseguimos encontrar a página que você está procurando.</p>
            </div>
            <!-- end of content -->

            <!-- button -->
            <div class="error__button">
                <a class="btn btn--primary" href="<?= get_home_url(); ?>">Voltar</a>
            </div>
            <!-- end of button -->
        </div>
    </div>
    <!-- end of error -->

</main>

<?php get_footer(); ?>