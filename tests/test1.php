<?php
require_once __DIR__ . '/../config/init.php';

$dbh = Db::getDb();
$dbh->execute(
    'INSERT INTO users (email, name) VALUES (?,?)',
    ['user1@mail.by', 'user1']
);

$users = \app\models\User::findAll();
dd($users);