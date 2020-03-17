<?php

// function to manage dates
require "inc/functions.php";

$idPassedByURL = $_GET['id'];

require "data/articles.php";

$article = $articles[$idPassedByURL];

require "inc/header.tpl.php";
require "inc/article.tpl.php";
require "inc/footer.tpl.php"; ?>