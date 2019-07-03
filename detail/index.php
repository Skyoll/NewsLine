<?php
require __DIR__ . '/../functions/news.php';

$articleId = (int) strip_tags($_GET['id']);
if ($articleId) {
    $article = array_pop(getOneArticleById($articleId));
}else{
    $article = 'хуйня';
}

require __DIR__ . '/../view/article.php';