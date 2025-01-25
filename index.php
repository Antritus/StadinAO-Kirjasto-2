<?php
include_once "includes/functions.product.php";
include "includes/functions.header.php";

addHeaderContent("<script src='javascript/search/search.js'></script>");
addHeaderContent("<script src='javascript/search/master.js'></script>");
addHeaderContent("<link rel='stylesheet' href='css/search/master.css'>");
addHeaderContent("<link rel='stylesheet' href='css/search/elements.css'>");
addHeaderContent("<link rel='stylesheet' href='css/search/search.css'>");

include 'header.php'
?>
    <window-max-width class="main">
        <div class="book-search-alignment">
            <div class="search-bar">
                <form id="search">
                    <div class="search-tags-container">
                    <?php for ($j = 0; $j <= 20; $j++): ?>
                        <div class="tags-selector">
                            <div class="selectable-switch" >Name</div>
                            <div class="absolute-tags">
                                <input type="text" class="searching-tags" id="values-search">
                                <div class="displayed-tags">
                                    <?php for ($i = $j*40; $i <= ($j*40)+40; $i++): ?>
                                        <div class="search-value" id="value-<?php echo $i; ?>">
                                            <input type="checkbox" name="search-value-<?php echo $i; ?>">
                                            <label for="checkbox-<?php echo $i; ?>">Value-<?php echo $i; ?></label>
                                        </div>
                                    <?php endfor; ?>
                                </div>
                            </div>
                        </div>
                    <?php endfor; ?>
                    </div>

                </form>
                <div class="true-search">
                    <input type="text" class="product-search" placeholder="Etsi...">
                    <input type="submit" id="product-search-submit" class="product-search-submit" value="Etsi">
                </div>
                <div class="search-button-container">
                    <div id="search-hide">Piilota suodattimet</div>
                    <div id="search-show" style="display: none;">Näytä suodattimet</div>
                </div>
            </div>
            <div class="main" id="elements-container">
                <?php
                $ratings = array("S", "7", "12", "16", "18");
                $titles = array("Little Doctors", "Big Choice", "Last change", "Changing for the better", "Equals Equals");
                $descriptions = array("Porkkana on kuolemassa ja hänen tuleep päättää kuoleeko vai elääkö", "Maha", "Big boys club 2.0.1", "Elements of the world discovered", "Elements of the universe returned to the world");
                $authors = array("Matti", "John", "Matti Smith", "John Smith", "Peter Panther");
                $publishers = array("WSOY", "Otava");
                $tags = array("Disney", "Rotational", "Nominal", "Ahead");
                for ($i = 0; $i < 40; $i++) {
                    $title = $titles[random_int(0, sizeof($titles) - 1)];
                    $rate = random_int(0, 1) == 1 ? $ratings[random_int(0, sizeof($ratings) - 1)] : null;
                    $description = $descriptions[random_int(0, sizeof($descriptions) - 1)];
                    $author = $authors[random_int(0, sizeof($authors) - 1)];
                    $publisher = $publishers[random_int(0, sizeof($publishers) - 1)];
                    $tag = $tags[random_int(0, sizeof($tags) - 1)];

                    echo createProductElement($title, $description, $author, $publisher, $rate, $tag);
                }
                ?>
            </div>
        </div>
    </window-max-width>

<?php
include_once "footer.php";