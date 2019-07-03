<?php

require __DIR__ . '/../db/db.php';

function getNews() {
    $sql = 'SELECT * FROM lesson7';
    return dbQuery($sql);
}

function getOneArticleById($articleId) {
    $sql = "SELECT * FROM lesson7 WHERE id=" . $articleId;
    return dbQuery($sql);
}