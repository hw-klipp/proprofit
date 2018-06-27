<?php
require_once __DIR__ . '/app/config/init.php';

$newsPage = new \app\core\View();
$newsPage->news = \app\models\Article::latestNews();
$newsPage->asd = 'asd';

foreach ($newsPage as $k => $v) {
    var_dump($k);
}

die;
$newsPage->display(VIEW . 'news.php');