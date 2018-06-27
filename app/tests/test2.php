<?php
require_once __DIR__ . '/../config/init.php';

$user = \models\User::findByID(3);

var_dump($user);