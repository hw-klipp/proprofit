<?php

namespace app\controllers;

use app\core\View;
use app\models\Article;

class NewsController
{
    public function index()
    {
        $view = new View();
        $view->news = Article::findAll();
        $view->display(VIEW . 'news.php');
    }

    public function show($id) {
        $view = new View();
        $view->article = Article::findByID($id);
        $view->display(VIEW . 'article.php');
    }
}