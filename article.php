<?php
require_once __DIR__ . '/app/config/init.php';

$article = \app\models\Article::findByID($_GET['id']);

include VIEW . 'article.php';