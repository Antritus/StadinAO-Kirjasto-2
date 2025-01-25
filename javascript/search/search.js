function displayCheckboxTags(parent) {
    const nearestAbsolute = $(parent).closest(".absolute-tags");
    const visible = nearestAbsolute.find(".displayed-tags");
    let input = nearestAbsolute.find(".searching-tags").val() || "";
    input = input.trim().replace(/\s+/g, '-').toLowerCase();
    visible.children().each((index, element) => {
        const id = element.getAttribute("id") || "";
        if (input === "" || id.toLowerCase().includes(input)) {
            $(element).show();
        } else {
            $(element).hide();
        }
    });

    nearestAbsolute.show();
}


function showAllSearchStuff() {
    $(".absolute-tags").each((index, element) => {
        $(element).show();
    });
}

function hideSearchStuff() {
    $(".absolute-tags").each((index, element) => {
        $(element).hide();
        $(element).closest(".tags-selector").each((newIndex, newElement)=> {
            $(newElement).removeClass(".tags-selector-visible").addClass(".tags-selector-hidden");
        })
    });
}
$(document).ready(function () {
    $(".selectable-switch").on("click", function () {
        $(this).parent().parent().children().each((index, element)=>{
            $(element).removeClass("custom-focus")
        })
        const tagsSelector = $(this).closest(".tags-selector");
        if ($(tagsSelector).hasClass(".visible")) {
            $(tagsSelector).removeClass(".tags-selector-visible").addClass(".tags-selector-hidden");
        } else {
            $(tagsSelector).removeClass(".tags-selector-hidden").addClass(".tags-selector-visible");
        }
        $(".absolute-tags").hide();
        const closest = $(this).closest(".tags-selector").find(".absolute-tags");
        const hidden = !closest.hasClass("tags-visible");
        if (hidden) {
            closest.show();
            closest.addClass("tags-visible");
            $(tagsSelector).addClass("custom-focus");
        } else {
            closest.hide();
            closest.removeClass("tags-visible");
        }
        displayCheckboxTags(this);
    });

    $("#values-search")
        .on("input", function () {
            displayCheckboxTags(this);
        });

    hideSearchStuff();

    $("#product-search-submit").on("click", function () {
        // TODO - Handle proper PHP functions with this
    })
});
