$(window).scroll(function () {
    if ($(window).scrollTop()) {
        $('.header').addClass('header--active');
    } else {
        $('.header').removeClass('header--active');
    }
});