<?php
require_once __DIR__ . '/config/init.php';

$frontController = new \app\controllers\IndexController();
$frontController();