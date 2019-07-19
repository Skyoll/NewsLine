<?php
require __DIR__ . '/classes/Articles.php';
require __DIR__ . '/db/Db.php';

$adbArticle = new Articles(new Db());

$NewsName = strip_tags($_POST['title']);
$TextNews = strip_tags($_POST['text']);
$file = $_FILES['image'];

$imagePath = '/images/' . $file['name'];

$imageUploadResult = $adbArticle->uploadImage($file);

if (!empty($TextNews) && !empty($NewsName) && $imageUploadResult) {

    $res = $adbArticle->addArticle($NewsName, $imagePath, $TextNews);

    if (!$res) {
        echo 'ошибка <a href="/">вернуться на главную</a>';
    }else{
        echo 'Новость успешно добавлена <a href="/">вернуться на главную</a>';

    }
}



