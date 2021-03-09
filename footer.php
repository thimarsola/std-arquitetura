<!-- footer -->
<footer class="footer">

    <!-- office -->
    <div class="footer__office">
        <p><small>2021 - &COPY; STD Arquitetura - Todos os direitos reservados - Arquiteta Resp - Silvia Regina Dias -
                CAU A79707-3</small></p>
    </div>
    <!-- end of office -->

    <!-- developer -->
    <div class="footer__developer">
        <div class="container">
            <p><small>Desenvolvido por <b><a href="<?= DEV["url"]; ?>" target="_blank"
                            title="Agência Especializada em Marketing Digital"><?= DEV["name"]; ?></a></b></small></p>

            <?php
            $protocols = array('http://', 'http://www.', 'www.');

            if (is_home()) {
                $urlBase = str_replace($protocols, '', get_bloginfo('wpurl'));
            } else {
                $urlBase = str_replace($protocols, '', get_bloginfo('wpurl')) . '/' . (get_page_uri());
            }
            ?>

            <!--validator-->
            <div class="footer__developer__validator">
                <a href="https://validator.w3.org/nu/?showsource=yes&showoutline=yes&showimagereport=yes&doc=https%3A%2F%2F<?= $urlBase ?>%2F"
                    target="_blank" title="Tecnologia W3C"><img
                        src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-html.svg"
                        alt="Vetor W3C Validator">W3C Validator</a>
            </div>
            <!--end of validator;-->

        </div>
    </div>
    <!-- end of developer -->

</footer>
<!-- end of footer -->

<?php wp_footer(); ?>
</body>

</html>