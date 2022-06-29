<div id="whatsapp" class="whatsapp__button">

    <i class="stdarquitetura-whatsapp"></i>

    <!-- container -->
    <div class="whatsapp__button__container">
        <!-- client -->
        <?= whatsapp(
            formatPhone(CONTACT['whatsapp']),
            CONTACT['whatsappMessage'],
            '<p>Clientes</p>
            <span><i class="stdarquitetura-whatsapp"></i></span>',
            'clients'
        ); ?>
        <!-- end of client -->

        <!-- provider -->
        <?= whatsapp(
            formatPhone(CONTACT['whatsapp']),
            'Olá STD Arquitetura, sou um fornecedor e gostaria de apresentar meu produto e/ou serviço',
            '<p>Fornecedores</p>
            <span><i class="stdarquitetura-whatsapp"></i></span>',
            null
        ); ?>
        <!-- end of provider -->
    </div>
    <!-- end of container -->
</div>