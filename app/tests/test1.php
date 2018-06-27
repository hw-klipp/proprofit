<?php
require_once __DIR__ . '/../config/init.php';

$dbh = new \core\Db();
$dbh->execute(
    'INSERT INTO users (email, name) VALUES (?,?)',
    ['user1@mail.by', 'user1']
);

$users = \models\User::findAll();
dd($users);