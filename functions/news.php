<?php

require __DIR__ . '/../db/db.php';

function getNews() {
    $sql = 'SELECT * FROM NewsLine';
    return dbQuery($sql);
}

function getOneArticleById($articleId) {
    $sql = "SELECT * FROM NewsLine WHERE id=" . $articleId;
    return dbQuery($sql);
}

function addArticle($title, $foto, $test) {
    $sql =  "INSERT INTO NewsLine (name, link, news) VALUES ('$title','$foto','$test')";
    return dbExec($sql);
}

function uploadImage($file) {

    if (empty($file['name'])) {
        return false;
    }

    if ($file['error']!== 0) {
        return false;
    }

    $newFileName = $file['name'];
    $newFilePath = __DIR__ . '/../images/'.$newFileName;
    move_uploaded_file($file['tmp_name'], $newFilePath);

    return true;
}