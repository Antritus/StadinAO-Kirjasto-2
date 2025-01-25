function useProperLogo(theme) {
    $("logo").each(function () {
        let img = $(this).children("img");
        if (theme===true) {
            img.attr("src", "../assets/logo-white.png");
        } else {
            img.attr("src", "../assets/logo-black.png");
        }
    })
}

function useProperAccount(theme) {
    $("account-logo").each(function () {
        let userProfilePicture = $(this).attr("profile-picture");
        if (userProfilePicture !== undefined) {
            return;
        }
        let img = $(this).children("img");
        if (theme===true) {
            img.attr("src", "../assets/user-white.png");
        } else {
            img.attr("src", "../assets/user-black.png");
        }
    })
}

function switchTheme(darkMode) {
    if (darkMode===true) {
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

    // Save the theme preference to a cookie
    Cookies.set("kirjis-darkMode", darkMode, {expires: 10, sameSite: 'strict'});

    /* Ignore this code for now as implementing cookie based theme
        Later "download" the theme from the server under the users account
        possibly. Also possible to ignore this code completely and use the browsers theme
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
     */
}

// Handle the dark theme from the start of the page
$(document).ready(function () {
    let darkMode = Cookies.get("kirjis-darkMode");
    if (darkMode === undefined || darkMode === null) {
        darkMode = true;
    }
    if (darkMode === true || darkMode === "true") {
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
