<?php
require __DIR__ . '/../classes/Articles.php';
require __DIR__ . '/../db/Db.php';

$articleId = (int) strip_tags($_GET['id']);
if ($articleId) {
    $adbArticle = new Articles(new Db());
    $article = array_pop($adbArticle->getOneArticleById($articleId));
}else{
    $article = 'хуйня';
}

require __DIR__ . '/../view/article.php';