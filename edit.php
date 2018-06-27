<?php
require_once __DIR__ . '/app/config/init.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $article = \app\models\Article::findByID($_POST['id']);
    $article->title = $_POST['title'];
    $article->content = $_POST['content'];
    $article->author = $_POST['author'];
    $article->save();

    header('Location: /admin.php');
}

$editPage = new \app\core\View();
$editPage->article = \app\models\Article::findByID($_GET['id']);
$editPage->display(VIEW . 'edit.php');