<?php

require_once 'boot.php';

$controllerClassName = '\\App\Modelky\NewsController';
$controller = new $controllerClassName;
$controller->action('add');
