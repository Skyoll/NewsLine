<?php
require __DIR__ . '/functions/news.php';

$news = getNews();

//echo '<pre>';
//print_r($news);
//echo '<pre>';

require __DIR__ . '/view/news.php';

require __DIR__ . '/view/form.php';

require __DIR__ . '/detail/addNewsDb.php';

