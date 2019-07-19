<?php

abstract class AbstractArticle {

    abstract function getArticles();
    abstract function getOneArticleById($articleId);
    abstract function addArticle($title, $foto, $test);

    public function uploadImage($file){
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
}