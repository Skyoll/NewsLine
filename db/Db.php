<?php


class Db{

    private $mysqli;


    /*Функция подключающаяся к БД и выбирающая нужную таблицу */
    public function __construct() {
        $dbParam = include __DIR__ . '/../cofig/db.php';
        $mysqli = new mysqli($dbParam['host'], $dbParam['name'], $dbParam['pass'], $dbParam['dbname']);

        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }
       $this->mysqli = $mysqli;
    }

    /*Функция принимающая sql запрос на вход, подключается к базе, выполняет запрос, возвращает результат*/
    public function dbQuery($sql) {
        $res = $this->mysqli->query($sql);
        if (!$res) {
            return false;
        }

        $mass = [];
        while ($row = $res->fetch_row()) {
            $mass[] = $row;
        }
        return $mass;
    }

    /* Функция выполняющая произвольный запрос*/
    public function dbExec($sql){
        $res = $this->mysqli->query($sql);
        if (!$res) {
            return false;
        }
        return true;
    }

}