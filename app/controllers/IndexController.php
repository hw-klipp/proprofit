<?php

namespace app\controllers;

use app\core\Controller;
use app\core\View;
use app\models\Article;

class IndexController extends Controller
{
    public function __invoke()
    {
        $this->action();
    }

    public function newsAction()
    {
        $action = new NewsController();
        $action->index();
    }

    public function articleAction($id)
    {
        $action = new NewsController();
        $action->show($id);
    }
}