<?php
include_once "../includes/functions.product.php";
include_once "../includes/functions.header.php";

addHeaderContent("<link type='text/css' rel='stylesheet' href='css/master.css'>");
addHeaderContent("<link type='text/css' rel='stylesheet' href='css/menu-left.css'>");
addHeaderContent("<link type='text/css' rel='stylesheet' href='css/book_overview.css'>");

include 'header.php'
?>
    <window-max-width class="main">
        <?php
        include_once "menu-left.php"
        ?>
        <div class="main-content">
            <div class="main-content-top">
                <div class="top-left-align">
                    <div>
                        <h1>%nimi%</h1>
                        <p>Tägit</p>
                    </div>
                    <div class="description">
                        <h3>Kuvaus</h3>
                        <p>%kuvaus%</p>
                    </div>
                </div>
                <div class="top-right-align">
                    <div>
                        <img src="../assets/logo.png" alt=""
                    </div>
                </div>
            </div>
            <div>

            </div>
        </div>
    </window-max-width>

<?php
include_once "footer.php";