$(function () {
    var container = $(".whatsapp__button__container");
    var active = "whatsapp__button__container--active";

    $("#whatsapp").click(function (e) {
        e.stopPropagation();
        container.toggleClass(active);

        if (container.hasClass(active)) {
            $(document).click(function () {
                container.removeClass(active);
            });
        }
    });
});
