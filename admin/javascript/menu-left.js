$(document).ready(function () {
    const url = window.location.pathname.substring(window.location.pathname.lastIndexOf("/") + 1);
    $(".automated-format").each(function () {
        let elementUrl = this.href.substring(this.href.lastIndexOf("/") + 1);
        if (url.toLowerCase() === elementUrl.toLowerCase()) {
            $(this).addClass("active-page");
        }
    });
});