jQuery(document).ready(function ($) {

    /* Ajax functions */
    $(document).on('click', '.load-more:not(.load-more--active)', function () {

        var that = $(this);
        var page = that.data('page');
        var newPage = page + 1;
        var ajaxUrl = that.data('url');

        that.addClass('load-more--active').find('.text').slideUp(300);
        that.find('.icon-sync').addClass('spin');

        $.ajax({
            url: ajaxUrl,
            type: 'POST',
            data: {
                page: page,
                action: 'load_more_residential'
            },
            error: function (response) {
                console.log(response);
            },
            success: function (response) {

                setTimeout(function () {
                    that.data('page', newPage);
                    $('.projects__content__layout').append(response);

                    that.removeClass('load-more--active').find('.text').slideDown(300);
                    that.find('.icon-sync').removeClass('spin');
                }, 1000);

            }
        });
    });

});