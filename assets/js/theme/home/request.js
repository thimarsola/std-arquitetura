// var $j = jQuery.noConflict();

$(document).ready(function () {
    $('#form').submit(function () {
        $.ajax({
            url: 'https://localhost/stdarquitetura.com.br/wp-content/themes/stdarquitetura/source/Support/Sender.php',
            type: 'POST',
            data: $('#form').serialize(),
            success: function (data) {
                $('.contact__form__content__status').html(data);
            }
        });
        return false;
    });
});

$(function () {
    $("#button").click(function () {
        $(".contact__form__content__status--loading").removeClass("d-none");
    });
});