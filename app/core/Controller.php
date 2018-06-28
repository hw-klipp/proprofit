<?php

namespace app\core;

abstract class Controller
{
    protected $uri;

    public function action()
    {
        if ($this->access()) {
            $this->uri = trim($_SERVER['REQUEST_URI'], '/');
            $params = explode('/', $this->uri);
            $actionName = $params[0] . 'Action';

            if(method_exists($this, $actionName)) {
                if(count($params) > 1) {
                    return $this->$actionName($params[1]);
                } else {
                    return $this->$actionName();
                }
            }
        }

        return die('access denied');
    }

    public function access()
    {
        if(isset($_SESSION['status']) && $_SESSION['status'] == 'active') {
            return true;
        }

        return true;
    }
}