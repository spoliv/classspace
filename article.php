<?php

require_once 'boot.php';
$controllerClassName = '\\App\Controllers\NewsController';
$controller = new $controllerClassName;
$controller->action('one');

