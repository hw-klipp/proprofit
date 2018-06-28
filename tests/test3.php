<?php
require_once __DIR__ . '/../config/init.php';

$article = new \app\models\Article();
$article->title = 'Smth Article';
$article->content = 'smth';
$article->insert();