<?php

$headerContent = [];

function addHeaderContent($content){
    global $headerContent;
    $headerContent[sizeof($headerContent)] = $content;
}

function applyHeaderContent(){
    global $headerContent;
    foreach ($headerContent as $obj){
        echo $obj;
    }
}