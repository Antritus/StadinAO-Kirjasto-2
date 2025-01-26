<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
} else if ($_SERVER["REQUEST_METHOD"] == "GET") {
} else {
    header("location: index.php");
}

include_once "../includes/functions.product.php";
include_once "../includes/functions.header.php";

addHeaderContent("<link type='text/css' rel='stylesheet' href='css/master.css'>");
addHeaderContent("<link type='text/css' rel='stylesheet' href='css/menu-left.css'>");
addHeaderContent("<link type='text/css' rel='stylesheet' href='../css/search/elements.css'>");

include 'header.php'
?>
    <window-max-width class="main">
        <?php
        include_once "menu-left.html"
        ?>
        <div class="main-content">
            <?php
                include_once "../includes/functions.product.php";
                echo createProductElement("Title", "Book Overview", "Matikka Lole", "Otava", "Pegi", "Tags");
            ?>
        </div>
    </window-max-width>

<?php
include_once "footer.php";