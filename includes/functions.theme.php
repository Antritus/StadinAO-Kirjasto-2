<?php

function getWebsiteTheme() {
    if (!isset($_COOKIE["darkMode"])) {
        return false;
    }
    $theme = $_COOKIE["darkMode"];

    return htmlentities($theme, 3, 'UTF-8');
}
