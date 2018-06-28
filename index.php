<?php
require_once __DIR__ . '/app/config/init.php';

/*$newsPage = new \app\core\View();
$newsPage->news = \app\models\Article::latestNews();
$newsPage->display(VIEW . 'news.php');*/

$newsPage = new \app\controllers\IndexController();
$newsPage();