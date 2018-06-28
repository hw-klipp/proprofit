<?php
require_once __DIR__ . '/../config/init.php';

$user = \app\models\User::findByID(3);

var_dump($user);