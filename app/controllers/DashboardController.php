<?php

namespace app\controllers;

use app\core\View;
use app\models\Article;

class DashboardController
{
    public function index()
    {
        $view = new View();
        $view->news = Article::findAll();
        $view->display(VIEW . 'dashboard.php');
    }

    public function add()
    {
        $article = new Article();
        $article->title = $_POST['title'];
        $article->content = $_POST['content'];
        $article->author = $_POST['author'];
        $article->save();
        header('Location: /dashboard');
    }

    public function edit($id)
    {
        $editPage = new View();
        $editPage->article = Article::findByID($id);
        $editPage->display(VIEW . 'edit.php');
    }

    public function update()
    {
        $article = Article::findByID($_POST['id']);
        $article->title = $_POST['title'];
        $article->content = $_POST['content'];
        $article->author = $_POST['author'];
        $article->save();
        header('Location: /dashboard');
    }

    public function delete($id)
    {
        $news = Article::findByID($id);
        $news->delete();
        header('Location: /dashboard');
    }
}