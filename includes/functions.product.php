<?php

function createProductElement($title, $description, $author, $publisher, $pegiInfos, $tags)
{
    $return = "
        <div class='element-container'>
            <div class='element-picture-container'>
                <img src='../assets/logo.png' alt='Book cover'>
            </div>
            <div class='element-info-container'>
                <p class='element-title'>$title
            ";

    if (isset($pegiInfos) || isset($tags)) {
        $return .= "                <div class='age-suggestion'>
                    <ul class='element-tags'>";
        if (isset($pegiInfos)) {
            if (is_array($pegiInfos)) {
                foreach ($pegiInfos as $pegi) {
                    $return .= "<li class='$pegi tag-element'><a href='#'>$pegi</a></li>";
                }
            } else {
                $return .= "<li class='age-rating-$pegiInfos tag-element'><a href='#'>$pegiInfos</a></li>";
            }
        }

        if (isset($tags)) {
            if (is_array($tags)) {
                foreach ($tags as $tag) {
                    $return .= "<li class='$tag tag-element'><a href='#'>$tag</a></li>";
                }
            } else {
                $return .= "<li class='$tags tag-element'><a href='#'>$tags</a></li>";
            }
        }

        $return .= "
                    </ul>
                </div>";
    }

    $return = $return . "</p>
                <p class='element-description'>$description</p>
                <div class='publisher-author'>
                    <p class='element-author'>$author</p>
                    <p class='element-publisher'>$publisher</p>
                </div>";

    $return .= "</div>
        </div>
        ";

    return $return;
}