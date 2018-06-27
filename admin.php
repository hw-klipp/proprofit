<?php
require_once __DIR__ . '/app/config/init.php';

if(!empty($_GET['action']) && !empty($_GET['id']) && $_GET['action'] == 'delete') {
    $news = \app\models\Article::findByID($_GET['id']);
    $news->delete();
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $article = new \app\models\Article();
    $article->title = $_POST['title'];
    $article->content = $_POST['content'];
    $article->author = $_POST['author'];
    $article->save();
    header('Location: /admin.php');
}

$adminPage = new \app\core\View();
$adminPage->news = \app\models\Article::findAll();
$adminPage->display(VIEW . 'dashboard.php');