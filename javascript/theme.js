function useProperLogo(theme){
    $("logo").each(function () {
        let img = $(this).children("img");
        if (theme) {
            img.attr("src", "../assets/logo-white.png");
        } else {
            img.attr("src", "../assets/logo-black.png");
        }
    })
}
function useProperAccount(theme){
    $("account-logo").each(function () {
        let userProfilePicture = $(this).attr("profile-picture");
        console.log(userProfilePicture + " hi");
        if (userProfilePicture !== undefined) {
            return;
        }
        console.log("Derp");

        let img = $(this).children("img");
        if (theme) {
            img.attr("src", "../assets/user-white.png");
        } else {
            img.attr("src", "../assets/user-black.png");
        }
    })
}
function switchTheme(darkMode) {
    if (darkMode) {
        $(".dark-mode-switch").hide();
        $(".light-mode-switch").show();
        $("body").addClass("dark-mode").removeClass("light-mode");
    } else {
        $(".dark-mode-switch").show();
        $(".light-mode-switch").hide();
        $("body").addClass("light-mode").removeClass("dark-mode");
    }
    useProperLogo(darkMode);
    useProperAccount(darkMode);

    let httpRequest = new XMLHttpRequest();
    httpRequest.open("POST", "../includes/theme.incl.php", true);
    httpRequest.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    httpRequest.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
        } else if (this.readyState === 4) {
            console.error("Failed to update theme on the server.");
        }
    };
    httpRequest.send("mode=" + encodeURIComponent(darkMode));
}
$(document).ready(function () {
    let darkMode = $("body").hasClass("dark-mode");
    if (darkMode) {
        switchTheme(true);
    } else {
        switchTheme(false);
    }

    $(".dark-mode-switch").on("click", function () {
        switchTheme(true);
    });

    $(".light-mode-switch").on("click", function () {
        switchTheme(false);
    });
});
