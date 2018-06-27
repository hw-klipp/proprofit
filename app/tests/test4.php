<?php
require_once __DIR__ . '/../config/init.php';

$article = \app\models\Article::findByID(2);
$article->title = 'asd';
$article->update();
