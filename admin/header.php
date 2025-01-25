<?php
require_once "../includes/config.php";
require_once "../includes/functions.theme.php";

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>

        <script src="https://code.jquery.com/jquery-3.7.1.min.js"
                integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/ui/1.14.1/jquery-ui.js"></script>

        <?php
        require_once "../includes/functions.header.php";
            applyHeaderContent();
        ?>

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- Default Font -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
              integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
              crossorigin="anonymous" referrerpolicy="no-referrer"/>

        <!-- COOKIE MANIPULATION !-->
        <script src=" https://cdn.jsdelivr.net/npm/js-cookie@3.0.5/dist/js.cookie.min.js "></script>


        <!-- Internals -->
        <script src='../javascript/theme.js'></script>
        <script src="../javascript/tooltip.js"></script>
        <link rel='stylesheet' href='../css/gradient.css'>
        <script src='../javascript/gradient.js'></script>
        <script src='../javascript/main.js'></script>
        <link rel='stylesheet' href='../css/main.css'>

        <!-- Top Navigation Bar -->
        <script src="../javascript/menu-top.js"></script>
        <link rel='stylesheet' href='../css/menu-top.css'>

        <!-- Login/Signup -->
        <script src='../javascript/account-credentials.js'></script>
        <link rel='stylesheet' href='../css/account-credentials.css'>


    </head>
<body
        class="<?php
        if (getWebsiteTheme() !== null) {
            if (getWebsiteTheme() === "true") {
                echo "dark-mode";
            } else {
                echo "light-mode";
            }
        } else {
            echo $_SESSION["dark_mode"] = false;
        }
        ?>"
>

<?php

include_once "menu-top.php";