<?php

/**
 * DEVELOPER
 */
define("DEV", [
    "name" => "Goognet Solução Digital",
    "url" => "https://goognet.com.br"
]);

/**
 * SITE CONFIG
 */
define("SITE", [
    "name" => "STD Arquitetura",
    "desc" => "Desenvolvemos projetos sofisticados e personalizados para os mais exigentes padrões, além da qualidade funcional e distribuição perfeita dos ambientes",
    "domain" => "stdarquitetura.com.br",
    "locale" => "pt_BR",
    "lang" => "pt-BR",
]);

/**
 * SITE MINIFY
 */
if ($_SERVER["SERVER_NAME"] == "localhost") {
    require __DIR__ . '/Minifier.php';
}

/**
 * SOCIAL CONFIG
 */
define("SOCIAL", [
    "facebook_page" => "goognetsolucao",
    "facebook_author" => "goognetsolucao",
    "facebook_appId" => "112861974016840",
    "twitter_creator" => "@GoognetSolucao",
    "twitter_site" => "@GoognetSolucao"
]);

/**
 * MAIL CONNECT
 */
define("MAIL", [
    "host" => "mail.goognet.com.br",
    "port" => "587",
    "user" => "sender@goognet.com.br",
    "passwd" => "Contato123*",
    "from_name" => "Website Domain",
    "from_email" => "thiago.marsola@goognet.com.br"
]);

/**
 * REGION
 */
define("REGION", [
    "region" => "BR-SP",
    "placename" => "S&atilde;o Paulo",
    "position" => "-23.550651;-46.633382",
    "icbm" => "-23.550651, -46.633382"
]);

/**
 * CONTACT
 */
define("CONTACT",[
    "whatsapp" => "(11) 4123-5869",
    "whatsappMessage" => "Olá STD Arquitetura, gostaria de maiores informações para o meu projeto",
    "matrix" => "(11) 4123-5869",
    "office" => "(11) 4123-5869",
    "telThamires" => "(11) 94780-1044",
    "telSilvia" => "(11) 97345-2220",
    "mail" => "contato@stdarquitetura.com.br",
    "addressMatrix" => "https://goo.gl/maps/7ooyUnh19YmbRZUf8",
    "addressOffice" => "https://goo.gl/maps/7ooyUnh19YmbRZUf8"
]);