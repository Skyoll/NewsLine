<?php
require __DIR__ . '/functions/news.php';

$NewsName = strip_tags($_POST ['title']);
$TextNews = strip_tags($_POST ['text']);

if (!empty($TextNews) && !empty($NewsName)) {

    $res = addArticle($NewsName, $TextNews);

    if (!$res) {
        echo 'ошибка <a href="/">вернуться на главную</a>';
    }else{
        echo 'Новость успешно добавлена <a href="/">вернуться на главную</a>';
    }
}



