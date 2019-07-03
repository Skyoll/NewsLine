<?php
require __DIR__ . '/functions/news.php';

$news = getNews();

//echo '<pre>';
//print_r($news);
//echo '<pre>';

require __DIR__ . '/view/news.php';
