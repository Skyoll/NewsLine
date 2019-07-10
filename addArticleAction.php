<?php
require __DIR__ . '/functions/news.php';

$NewsName = strip_tags($_POST['title']);
$TextNews = strip_tags($_POST['text']);
$file = $_FILES['image'];

$imagePath = '/images/' . $file['name'];

$imageUploadResult = uploadImage($file);

if (!empty($TextNews) && !empty($NewsName) && $imageUploadResult) {

    $res = addArticle($NewsName, $imagePath, $TextNews);

    if (!$res) {
        echo 'ошибка <a href="/">вернуться на главную</a>';
    }else{
        echo 'Новость успешно добавлена <a href="/">вернуться на главную</a>';

    }
}



