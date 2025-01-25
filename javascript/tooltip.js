
$(document).ready(function () {
    $("tooltip").each(function() {
        let content = $(this).children("tooltip-content").first();

        content.hide();
        $(this).on("mouseenter", function() {
            content.fadeIn(200);
        }).on("mouseleave", function() {
            content.fadeOut(200);
        });
    })
})