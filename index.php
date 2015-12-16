<?php

require 'boot.php';

// http://classtest/?r=news/all
$route = $_GET['r'];
if ($route == '') {
    $route = 'news/all';
}
$routeParts = explode('/', $route);
$controllerClassName = '\\App\Controllers\\' . ucfirst($routeParts[0]) . 'Controller';
$actionName = $routeParts[1];
/*var_dump($controllerClassName, $actionName);*/
$controller = new $controllerClassName;
$controller->action($actionName);

