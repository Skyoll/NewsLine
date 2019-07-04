<?php
require __DIR__ . '/../db/db.php';
function addNews(){
    $NewsName = $_POST ['NameNews'];
    $TextNews = $_POST ['TextNews'];
    $db = "NewsLine";
    if (isset($TextNews) && isset ($NewsName)){
       dbQuery ("INSERT INTO ".$db." (name, news) VALUES ('$NewsName', '$TextNews')");
    }
    else{echo 'error';}
}