<?php
require_once __DIR__ . '/app/config/init.php';

$articlePage = new \app\core\View();
$articlePage->article = \app\models\Article::findByID($_GET['id']);
$articlePage->display(VIEW . 'article.php');