<?php
require __DIR__ . '/AbstractArticle.php';

class Articles extends AbstractArticle {

    private $db;

    public function __construct(Db $db) {
        $this->db = $db;
    }

    public function getArticles() {
        $sql = 'SELECT * FROM NewsLine';
        return $this->db->dbQuery($sql);
    }

    public function getOneArticleById($articleId) {
        $sql = "SELECT * FROM NewsLine WHERE id=" . $articleId;
        return $this->db->dbQuery($sql);
    }

    public function addArticle($title, $foto, $test) {
        $sql =  "INSERT INTO NewsLine (name, link, news) VALUES ('$title','$foto','$test')";
        return $this->db->dbExec($sql);
    }
}