<?php
require __DIR__ . '/classes/Articles.php';
require __DIR__ . '/db/Db.php';

$adbArticle = new Articles(new Db());
$news = $adbArticle->getArticles();

require __DIR__ . '/view/news.php';
require __DIR__ . '/view/form.php';