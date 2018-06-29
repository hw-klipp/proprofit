<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

define('CONF', __DIR__ . '/');
define('VIEW', dirname(__DIR__) . '/views/');

function dd($arr)
{
    echo '<pre>'. print_r($arr, true) .'</pre>';
    die;
}