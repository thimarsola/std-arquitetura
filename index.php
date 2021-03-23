<?php get_header(); ?>

<!-- main -->
<main>
    <!-- hero -->
    <section class="hero">
        <div class="container">

            <!-- container -->
            <div class="hero__container">
                <!-- header -->
                <header class="hero__container__header">
                    <h2>Arquitetura <span>&</span> <span>Design de Interiores</span></h2>
                </header>
                <!-- end of header -->

                <!-- content -->
                <div class="hero__container__content">
                    <p>Criar e ser capaz de traduzir personalidade e essência em uma arte!</p>
                </div>
                <!-- end of content -->
            </div>
            <!-- end of container -->

            <!-- scroll -->
            <div class="hero__scroll">
                <a rel="nofollow" title="Conheça nosso site" href="#a-arquitetura-esta-no-dna"></a>
            </div>
            <!-- end of scroll -->
        </div>
    </section>
    <!-- end of hero -->

    <!-- whatsapp -->
    <div id="whatsapp" class="whatsapp__button">
        <a rel="nofollow"
            href="https://api.whatsapp.com/send?phone=55<?= formatPhone(CONTACT["whatsapp"]); ?>&text=<?= urlencode(CONTACT["whatsappMessage"]); ?>"
            target="_blank" title="Fale com a STD Arquitetura pelo WhatsApp">
            <i class="stdarquitetura-whatsapp"></i>
        </a>
    </div>
    <!-- end of whatsapp -->

    <!-- about us -->
    <section id="a-arquitetura-esta-no-dna" class="aboutUs">

        <!-- container -->
        <div class="aboutUs__container">

            <!-- header -->
            <header class="aboutUs__container__header">
                <h2>“A arquitetura <br>está no DNA”</h2>
            </header>
            <!-- end of header -->

            <!-- content -->
            <div class="aboutUs__container__content">
                <p>Olá, estamos desde 1998 no mercado de arquitetura e design, prezamos por atendimentos
                    individualizados, podemos dizer que temos um estilo personalizado, cada projeto é único, e
                    totalmente planejado para ter a sua identidade e essência. </p>
                <br>
                <p>Pensando em agregar tecnologia e inovação aos nossos clientes, estamos sempre participando das feiras
                    e mostras internacionais de arquitetura e design. </p>
                <br>
                <p>Nosso escritório é voltado para os atendimentos de projetos e construções residenciais, comerciais e
                    corporativas.</p>
                <br>
                <p>Desenvolvemos projetos sofisticados e personalizados para os mais exigentes padrões. Além da
                    qualidade funcional e distribuição perfeita dos ambientes, lapidamos as formas puras dos volumes e a
                    seleção de revestimentos e texturas para atingir os melhores resultados visuais e sensoriais
                    proporcionados pela arquitetura.</p>
            </div>
            <!-- end of content -->

        </div>
        <!-- end of container -->

        <!-- image -->
        <div class="aboutUs__image">
            <picture>
                <source srcset="<?= get_template_directory_uri(); ?>/assets/images/dna-std-arquitetura.webp"
                    type="image/webp">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/dna-std-arquitetura.jpg"
                    alt="A arquitetura está no DNA do escritório STD Arquitetura" loading="lazy">
            </picture>
        </div>
        <!-- end of image -->

    </section>
    <!-- end of about us -->

    <!-- dna -->
    <section class="dna">

        <!-- image -->
        <div class="dna__image">
            <picture>
                <source srcset="<?= get_template_directory_uri(); ?>/assets/images/dna-mae-e-filha.webp"
                    type="image/webp">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/dna-mae-e-filha.jpg"
                    alt="DNA Silvia Dias e Thamires Dias" loading="lazy">
            </picture>
        </div>
        <!-- end of image -->

        <!-- container -->
        <div class="dna__container">

            <!-- header -->
            <header class="dna__container__header">
                <h2>Nosso DNA</h2>
            </header>
            <!-- end of header -->

            <!-- text -->
            <div class="dna__container__text">
                <p>A STD Arquitetura gerenciada por Silvia Dias e Thamires Dias, mãe e filha, ambas formadas em
                    Arquitetura
                    e Design de Interiores, compartilham personalidades e experiências únicas.</p>
                <p>Com uma vivência internacional, criou-se a essência e a identidade do escritório, baseado em ideias
                    inovadoras, com um estilo moderno, contemporâneo e com um toque clássico, que resulta em uma
                    arquitetura
                    única.</p>
            </div>
            <!-- end of text -->
        </div>
        <!-- end of container -->

    </section>
    <!-- end of dna -->

    <!-- project steps -->
    <section id="etapas-do-projeto" class="projectSteps">
        <div class="container">

            <!-- header -->
            <header class="projectSteps__header">
                <h2>Entenda as etapas do seu Projeto</h2>
            </header>
            <!-- end of header -->

            <!-- content -->
            <div class="projectSteps__content">

                <?php
                $jsonProjectSteps = file_get_contents(__DIR__ . "/includes/project-steps.json");
                $projectStepsList = json_decode($jsonProjectSteps, true);

                foreach ($projectStepsList['steps'] as $projectStep) :
                    ?>

                <!-- step -->
                <article class="projectSteps__content__step">
                    <!-- image -->
                    <div class="projectSteps__content__step__image"
                        style="--background: url('<?= get_template_directory_uri(); ?>/assets/images/<?= $projectStep["image"]; ?>.jpg');">
                        <picture>
                            <source
                                srcset="<?= get_template_directory_uri(); ?>/assets/images/<?= $projectStep["image"]; ?>.webp"
                                type="image/webp">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/<?= $projectStep["image"]; ?>.jpg"
                                alt="Etapa do Projeto - <?= $projectStep["title"] ?>" loading="lazy">
                        </picture>
                    </div>
                    <!-- end of image -->

                    <!-- body -->
                    <div class="projectSteps__content__step__body">

                        <!-- header -->
                        <header class="projectSteps__content__step__body__header">
                            <h3><?= $projectStep["title"]; ?></h3>
                            <hr>
                        </header>
                        <!-- end of header -->

                        <div class="projectSteps__content__step__body__container">
                            <?php
                            foreach ($projectStep["text"] as $textInline) :
                                ?>

                            <p><?= $textInline; ?></p>

                            <?php endforeach; ?>
                        </div>

                    </div>
                    <!-- end of body -->

                </article>
                <!-- end of step -->

                <?php endforeach; ?>

            </div>
            <!-- end of content -->

        </div>
    </section>
    <!-- end of project steps -->

    <!-- projects -->
    <section id="nossos-trabalhos" class="projects">

        <!-- header -->
        <header class="projects__header">
            <h2>Conheça os Nossos Projetos</h2>
        </header>
        <!-- end of header -->

        <!-- content -->
        <div class="projects__content">
            <div class="container">

                <!--layout-->
                <div class="projects__content__layout">
                    <?php
                        $paged = ( get_query_var('paged') ) ? absint(get_query_var('paged')) : 1;

                        $argProjects = [
                            'posts_per_page' => 6,
                            'post_type' => 'projetos',
                            'paged' => $paged,
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

                    <p style="grid-column: 1/4;">
                        <?php
                            _e('Desculpe! Não existem projetos cadastrados no momento.');
                        ?>
                    </p>
                    <?php endif; ?>
                </div>
                <!--end of layout-->

                <!-- buttons -->
                <div class="projects__content__buttons">
                    <a href="#" class="btn btn--outline-theme-dark" target="_blank"
                        title="Conheça os nossos Projetos Residênciais">Projetos Residenciais</a>
                    <a href="#" class="btn btn--outline-theme-dark" target="_blank"
                        title="Conheça os nossos Projetos Comerciais">Projetos Comerciais</a>
                </div>
                <!-- end of buttons -->

            </div>
        </div>
        <!-- end of content -->

    </section>
    <!-- end of projects -->

    <!-- testimonial -->
    <section class="testimonial">
        <div class="container">
            <!-- header -->
            <header class="testimonial__header">
                <h2>O que os nossos clientes dizem sobre nós</h2>
            </header>
            <!-- end of header -->

            <!-- content -->
            <div class="testimonial__content">

                <?php
                    $jsonTestimonial = file_get_contents(__DIR__ . "/includes/testimonial.json");
                    $testimonialList = json_decode($jsonTestimonial, true);

                foreach ($testimonialList['testimonial'] as $testimony) :
                    ?>

                <!-- card -->
                <div class="testimonial__content__card">

                    <!-- body -->
                    <div class="testimonial__content__card__body">
                        <span>“</span>
                        <?php
                    foreach ($testimony["text"] as $paragraphTestimony) :
                        ?>
                        <p><?= $paragraphTestimony; ?></p>
                        <?php endforeach; ?>
                    </div>
                    <!-- end of body -->

                    <!-- header -->
                    <div class="testimonial__content__card__header">
                        <div class="testimonial__content__card__header__image">
                            <picture>
                                <source
                                    srcset="<?= get_template_directory_uri(); ?>/assets/images/<?= $testimony["image"]; ?>.webp"
                                    type="image/webp">
                                <img src="<?= get_template_directory_uri(); ?>/assets/images/<?= $testimony["image"]; ?>.jpg"
                                    alt="Depoimento <?= $testimony["name"]; ?>" loading="lazy">
                            </picture>
                        </div>
                        <p><?= $testimony["name"]; ?></p>
                    </div>
                    <!-- end of header -->

                </div>
                <!-- end of card -->

                <?php endforeach; ?>
            </div>
            <!-- end of content -->
        </div>
    </section>
    <!-- end of testimonial -->

    <!-- awards -->
    <section id="nossos-premios" class="awards">
        <!-- container -->
        <div class="awards__container">
            <div class="container">

                <!-- header -->
                <header class="awards__container__header">
                    <h2>Prêmios que <span>Já Ganhamos</span></h2>
                </header>
                <!-- end of header -->

                <!-- content -->
                <div class="awards__container__content">

                    <!-- award -->
                    <div class="awards__container__content__award">

                        <?php
                        $jsonAwards = file_get_contents(__DIR__ . "/includes/awards.json");
                        $awardsList = json_decode($jsonAwards, true);

                        foreach ($awardsList["awards"] as $award) :
                            ?>

                        <article class="awards__container__content__award__card">

                            <!-- header -->
                            <header class="awards__container__content__award__card__header">
                                <h3><?= $award["name"]; ?></h3>
                                <p><?= $award["category"]; ?></p>
                            </header>
                            <!-- end of header -->

                            <!-- body -->
                            <div class="awards__container__content__award__card__body">
                                <p><?= $award["description"]; ?></p>
                            </div>
                            <!-- end of body -->

                        </article>

                        <?php endforeach; ?>

                    </div>
                    <!-- end of award -->

                    <!-- image -->
                    <div class="awards__container__content__image">
                        <picture>
                            <source
                                srcset="<?= get_template_directory_uri(); ?>/assets/images/premios-std-arquitetura-destaque.webp"
                                type="image/webp">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/premios-std-arquitetura-destaque.jpg"
                                alt="Prêmios que o escritório STD Arquitetura já ganhou" loading="lazy">
                        </picture>
                        <p>Não paramos por aqui! O Escritório <b>STD Arquitetura</b> é premiado desde o ano de 2007,
                            pelas principais revistas e associações de Arquitetura e Design de Interiores, entre eles
                            workshop internacional, reconhecimento profissional, destaque do ano em arquitetura e design
                            entre
                            outros.</p>
                    </div>
                    <!-- end of image -->

                </div>
                <!-- end of content -->

            </div>
        </div>
        <!-- end of container -->
    </section>
    <!-- end of awards -->

    <!-- contact -->
    <section id="contato" class="contact">

        <!-- image -->
        <div class="contact__image"></div>
        <!-- end of image -->

        <!-- form -->
        <div class="contact__form">

            <!-- header -->
            <header class="contact__form__header">
                <h2>Fale Conosco</h2>
            </header>
            <!-- end of header -->

            <!-- content -->
            <div class="contact__form__content">
                <p>Agora solicite o seu orçamento sem compromisso. Preencha os campos abaixo e o mais rápido possível
                    nosso departamento comercial entrará em contato com você!</p>

                <form id="form" action="" method="POST" enctype="multipart/form-data">
                    <input type="text" name="name" placeholder="Nome" required>
                    <input type="email" name="mail" placeholder="E-mail" required>
                    <input type="tel" name="phone" placeholder="Telefone" required>
                    <textarea name="message" cols="50" rows="4"
                        placeholder="Mensagem (Para orçamento informe o tipo de imóvel, metragem e localização)"></textarea>
                    <!-- button -->
                    <div class="form__button">
                        <button id="button" type="submit" name="submit" value="submit"
                            class="btn btn--theme-primary">Enviar</button>
                    </div>
                    <!-- end of button -->
                </form>

                <!-- status -->
                <div class="contact__form__content__status">
                    <div class="d-none contact__form__content__status--loading">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/spinner.svg" alt="Carregando"
                            loading="lazy">
                    </div>
                </div>
                <!-- end of status -->

            </div>
            <!-- end of content -->

        </div>
        <!-- end of form -->

    </section>
    <!-- end of contact -->

    <!-- office -->
    <section class="office">

        <!-- information -->
        <div class="office__information">

            <!-- header -->
            <header class="office__information__header">
                <h2>STD Arquitetura</h2>
            </header>
            <!-- end of header -->

            <!-- content -->
            <div class="office__information__content">

                <!-- hours -->
                <article class="office__information__content__card">

                    <!-- header -->
                    <header class="office__information__content__card__header">
                        <h3>Horário de Funcionamento</h3>
                    </header>
                    <!-- end of header -->
                    <p>Segunda à Sexta: 09:00h às 18:00h</p>

                </article>
                <!-- end of hours -->

                <!-- phones -->
                <article class="office__information__content__card">

                    <!-- header -->
                    <header class="office__information__content__card__header">
                        <h3>Horário de Funcionamento</h3>
                    </header>
                    <!-- end of header -->

                    <p>Matriz: <a href="tel:<?= formatPhone(CONTACT["matrix"]); ?>"
                            title="Telefone da Matriz STD Arquitetura"><?= CONTACT["matrix"]; ?></a></p>
                    <br>
                    <p>Escritório: <a href="tel:<?= formatPhone(CONTACT["office"]); ?>"
                            title="Telefone do Escritório STD Arquitetura"><?= CONTACT["office"]; ?></a></p>
                    <br>
                    <p>Arquiteta Thamires Dias: <a href="tel:<?= formatPhone(CONTACT["telThamires"]); ?>"
                            title="Telefone da Arquiteta Thamires Dias"><?= CONTACT["telThamires"]; ?></a></p>
                    <br>
                    <p>Arquiteta Silvia Dias: <a href="tel:<?= formatPhone(CONTACT["telSilvia"]); ?>"
                            title="Telefone da Arquiteta Silvia Dias"><?= CONTACT["telSilvia"]; ?></a></p>
                </article>
                <!-- end of phones -->

                <!-- mail -->
                <article class="office__information__content__card">

                    <!-- header -->
                    <header class="office__information__content__card__header">
                        <h3>E-mail</h3>
                    </header>
                    <!-- end of header -->
                    <p><a href="mailto:<?= CONTACT["mail"]; ?>"
                            title="Encaminhe um E-mail para STD Arquitetura"><?= CONTACT["mail"]; ?></a></p>

                </article>
                <!-- end of mail -->

                <!-- address -->
                <article class="office__information__content__card">

                    <!-- header -->
                    <header class="office__information__content__card__header">
                        <h3>Endereço</h3>
                    </header>
                    <!-- end of header -->
                    <address>Matriz: <a href="<?= CONTACT["addressMatrix"] ?>" target="_blank"
                            title="Venha fazer uma visita a matriz STD Arquitetura">Rua José Versolato, 111B/ Sala
                            3419 - Domo Business - Centro - São Bernardo do Campo - SP</a></address>
                    <br>
                    <address>Escritório: <a href="<?= CONTACT["addressMatrix"] ?>" target="_blank"
                            title="Venha fazer uma visita a matriz STD Arquitetura">Rua José Versolato, 111B/ Sala
                            3419 - Domo Business - Centro - São Bernardo do Campo - SP</a></address>

                </article>
                <!-- end of address -->

            </div>
            <!-- end of content -->

        </div>
        <!-- end of information -->

        <!-- image -->
        <div class="office__image"></div>
        <!-- end of image -->

    </section>
    <!-- end of office -->

    <!-- map -->
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3653.5733669292827!2d-46.5530975850198!3d-23.691210384618618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce4235f23fc7d5%3A0xf73b6e352b6b83e8!2sR.%20Jos%C3%A9%20Versolato%2C%20111%20-%20Centro%2C%20S%C3%A3o%20Bernardo%20do%20Campo%20-%20SP%2C%2009751-020!5e0!3m2!1spt-BR!2sbr!4v1615288098466!5m2!1spt-BR!2sbr"
            allowfullscreen="" loading="lazy"></iframe>
    </div>
    <!-- end of map -->

</main>
<!-- end of main -->

<?php get_footer(); ?>