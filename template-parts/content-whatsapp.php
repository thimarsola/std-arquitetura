<div id="whatsapp" class="whatsapp__button">

        <i class="stdarquitetura-whatsapp"></i>

        <!-- container -->
        <div class="whatsapp__button__container">
            <?= whatsapp(formatPhone(CONTACT['whatsapp']), CONTACT['whatsappMessage'], 'Clientes', 'btn'); ?>
            <?= whatsapp(formatPhone(CONTACT['whatsapp']), 'Olá STD Arquitetura, sou um fornecedor e gostaria de apresentar meu produto e/ou serviço', 'Fornecedores', 'btn'); ?>
        </div>
        <!-- end of container -->
</div>