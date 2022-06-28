<div id="whatsapp" class="whatsapp__button">

    <i class="stdarquitetura-whatsapp"></i>

    <!-- container -->
    <div class="whatsapp__button__container">
        <!-- client -->
        <div class="whatsapp__button__container__group clients">
            <?= whatsapp(
                formatPhone(CONTACT['whatsapp']),
                CONTACT['whatsappMessage'],
                '<span>Clientes</span>
                <span><i class="stdarquitetura-whatsapp"></i></span>',
                null
            ); ?>
        </div>
        <!-- end of client -->

        <!-- provider -->
        <div class="whatsapp__button__container__group">
            <?= whatsapp(
                formatPhone(CONTACT['whatsapp']),
                'Olá STD Arquitetura, sou um fornecedor e gostaria de apresentar meu produto e/ou serviço',
                '<span>Fornecedores</span>
                <span><i class="stdarquitetura-whatsapp"></i></span>',
                null
            ); ?>
        </div>
        <!-- end of provider -->
    </div>
    <!-- end of container -->
</div>
