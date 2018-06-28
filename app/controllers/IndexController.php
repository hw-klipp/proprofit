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

    public function dashboardAction() {
        $action = new DashboardController();
        $action->index();
    }

    public function addAction()
    {
        $action = new DashboardController();
        $action->add();
    }

    public function editAction($id)
    {
        $action = new DashboardController();
        $action->edit($id);
    }

    public function updateAction() {
        $action = new DashboardController();
        $action->update();
    }

    public function deleteAction($id) {
        $action = new DashboardController();
        $action->delete($id);
    }
}