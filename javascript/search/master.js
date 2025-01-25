$(document).ready(function () {
    $("#search").hide();
    $("#search-hide").hide()
    $("#search-show").show()

    $("#search-show").on("click", function () {
        $("#search").slideDown(500);
        $("#search-hide").show();
        $("#search-show").hide();
        hideSearchStuff()
    })

    $("#search-hide").on("click", function () {
        $("#search").slideUp(300);
        $("#search-hide").hide();
        $("#search-show").show();
        hideSearchStuff()
    })

    /*
    $(".tags-checkbox").each((v)=>{
        v.hide();
    })

     */
})