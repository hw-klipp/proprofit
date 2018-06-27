<?php
require_once __DIR__ . '/app/config/init.php';

$news = \app\models\Article::latestNews();

include VIEW . 'news.php';