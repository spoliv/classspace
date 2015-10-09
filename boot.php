<?php


function __autoload ($class)
{
    $namespace = explode('\\', $class);
    /*var_dump($namespace);*/
    array_shift($namespace);
    require __DIR__ . '/' . implode('/', $namespace) . '.php';
    require 'vendor/autoload.php';

}

/*require_once __DIR__ . '/models/news.php';*/

