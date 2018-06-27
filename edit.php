<?php
require_once __DIR__ . '/app/config/init.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $article = \app\models\Article::findByID($_POST['id']);
    $article->title = $_POST['title'];
    $article->content = $_POST['content'];
    $article->save();

    header('Location: /admin.php');
}

$article = \app\models\Article::findByID($_GET['id']);

include VIEW . 'edit.php';