$(document).ready(function () {
    const path = $(location).attr("origin");
    const file = 'wp-content/themes/stdarquitetura/source/Support/Sender.php';

    $('#form').submit(function (e) {
        e.preventDefault();

        $(".contact__form__content__status").removeClass("d-none");

        $.ajax({
            url: path.concat('/').concat(file),
            type: 'POST',
            cache: false,
            data: $('#form').serialize(),
            success: function (data) {
                $('.contact__form__content__status').append(data);

                setTimeout(function (){
                    $(".contact__form__content__status").addClass("d-none");
                }, 3000);
            },
            error: function(){
                $('.contact__form__content__status').append('Erro');
            }
        });
        return false;
    });
});