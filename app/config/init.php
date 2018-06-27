<?php

spl_autoload_register(function ($class) {
    $path = realpath(__DIR__ . '/../../' . str_replace('\\', '/', $class) . '.php');

    require $path;
});

define('CONF', __DIR__ . '/');
define('VIEW', dirname(__DIR__) . '/views/');

function dd($arr)
{
    echo '<pre>'. print_r($arr, true) .'</pre>';
    die;
}