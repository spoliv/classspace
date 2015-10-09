<?php

require 'vendor/autoload.php';

/*function __autoload ($class)*/

spl_autoload_register('MyBoot');

function MyBoot($class)
{
    $namespace = explode('\\', $class);
    /*var_dump($namespace);*/
    array_shift($namespace);
    require __DIR__ . '/' . implode('/', $namespace) . '.php';
}



/*require_once __DIR__ . '/models/news.php';*/

