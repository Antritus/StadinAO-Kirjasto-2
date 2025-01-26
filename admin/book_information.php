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
addHeaderContent("<link type='text/css' rel='stylesheet' href='css/book_information.css'>");

$title = "Book-Title";
$isbn = "1111-1111-1111";
$author = "Matti Pekka";
$publisher = "WSOY";
$released = "01-01-2000";
$pegi = "18";
$genre = "Fantasy, Sci-Fi";
$description = "Randomi kkuvaus";

include 'header.php'
?>
    <window-max-width class="main">
        <?php
        include_once "menu-left.html"
        ?>
        <div class="main-content">
            <form class="editor">
                <div class="joined-elements">
                    <div class="editable-element">
                        <label class="title" for="name">Kirjan nimi</label>
                        <input class="value" type="text" name="name" id="name" placeholder="Kirjan nimi..."
                               value="<?php echo $title; ?>">
                    </div>
                    <div class="editable-element">
                        <label class="title" for="isbn">ISBN</label>
                        <input class="value" type="text" name="isbn" id="isbn" placeholder="1111-1111-1111..."
                               value="<?php echo $isbn; ?>">
                    </div>
                </div>
                <div class="joined-elements">
                    <div class="editable-element">
                        <label class="title" for="author">Kirjoittaja</label>
                        <input class="value" type="text" name="author" id="author" placeholder="Kirjailija..."
                               value="<?php echo $author; ?>">
                    </div>
                    <div class="editable-element">
                        <label class="title" for="publisher">Julkaisija</label>
                        <input class="value" type="text" name="publisher" id="publisher" placeholder="Julkaisija..."
                               value="<?php echo $publisher; ?>">
                    </div>
                    <div class="editable-element">
                        <label class="title" for="released">Julkaistu</label>
                        <input class="value" type="text" name="released" id="released" placeholder="Julkaistu..."
                               value="<?php echo $released; ?>">
                    </div>
                </div>
                <div class="editable-element">
                    <label class="title" for="pegi">Ikä rajoitukset</label>
                    <input class="value" type="text" name="pegi" id="pegi" placeholder="Rajoitukset..."
                           value="<?php echo $pegi; ?>">
                </div>
                <div class="editable-element">
                    <label class="title" for="genre">Genre</label>
                    <input class="value" type="text" name="genre" id="genre" placeholder="Genre..."
                           value="<?php echo $genre; ?>">
                </div>
                <div class="editable-element">
                    <label class="title" for="description">Kuvaus</label>
                    <textarea class="value" name="description" id="description" placeholder="Kuvaus..."><?php echo $description; ?></textarea>
                </div>
            </form>
        </div>
    </window-max-width>

<?php
include_once "footer.php";