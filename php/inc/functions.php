<?php

// convert computer date in human date with option on format length
function toHumanDate(string $computerDate, bool $shortFormat = false):string {
    // set script in french - bash:locale -a
    setlocale(LC_TIME, 'fr_FR.utf8');

    // date converted in timestamp
    $timestamp = strtotime($computerDate);

    if ($shortFormat) {
    // short date
    return strftime('le %e %B', $timestamp);
   // long date
    } else {
        return strftime('le %e %B %Y', $timestamp);
    }
}

// retrieve article id based
function getArticle(int $id):array {

    require "data/articles.php";

    return $articles[$id];
}