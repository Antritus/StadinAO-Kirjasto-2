<?php
require_once "includes/config.php";
include_once "includes/header.inc.php";

// Main style
addHeaderContent("<link rel='stylesheet' href='css/main.css'>");
// Light - Dark theme settings
addHeaderContent("<script src='javascript/theme.js'></script>");
// JS enabled
addHeaderContent("<script src='javascript/main.js'></script>");
// Gradient
addHeaderContent("<link rel='stylesheet' href='css/gradient.css'>");

// Login/Signup
addHeaderContent("<link rel='stylesheet' href='css/account-credentials.css'>");
addHeaderContent("<script src='javascript/account-credentials.js'></script>");

// Header bar (menu)
//addHeaderContent("<script src='javascript/header-bar.js'></script>");
//addHeaderContent("<link rel='stylesheet' href='css/header-bar.css'>");
//addHeaderContent("<script src='javascript/menu-top.js'>");
addHeaderContent("<link rel='stylesheet' href='css/menu-top.css'");


// body Header
include_once "header.php";

// Login/Singup
include_once "account-login.overlay.php";

// Header bar (menu)
include_once "menu-top.php"
?>

<?php

$darkmode = $_SESSION['dark_mode'] ? "true" : "false";
echo "<script>switchTheme($darkmode)</script>";

include_once "footer.php";
