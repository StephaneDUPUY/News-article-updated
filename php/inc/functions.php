<?php

// convert computer date in human date
function toHumanDate(string $computerDate):string {
    // set script in french - bash:locale -a
    setlocale(LC_TIME, 'fr_FR.utf8');

    // date converted in timestamp
    $timestamp = strtotime($computerDate);

    // display date
    return strftime('le %e %B %Y', $timestamp);
}

// retrieve article id based
function getArticle(int $id):array {

    require "data/articles.php";

    return $articles[$id];
}