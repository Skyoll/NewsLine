<?php
/* функция, возвращающая парметры для входа в БД  */
function dbParam() {
    return [
        'host' => 'db',
        'name' => 'user',
        'pass' => 'test',
        'dbname' => 'myDb',
    ];
}

/*Функция подключающаяся к БД и выбирающая нужную таблицу */
function dbIn() {
    $dbParam = dbParam();
    $mysqli = new mysqli($dbParam['host'], $dbParam['name'], $dbParam['pass'], $dbParam['dbname']);

    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    return $mysqli;
}

/*Функция принимающая sql запрос на вход, подключается к базе, выполняет запрос, возвращает результат*/
function dbQuery($sql) {
    $mysqli = dbIn();
    $res = $mysqli->query($sql);
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
function dbExec($sql){
    $mysqli = dbIn();
    $res = $mysqli->query($sql);
    if (!$res) {
        return false;
    }
    return true;
}


