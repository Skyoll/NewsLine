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