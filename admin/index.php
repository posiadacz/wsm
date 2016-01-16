<?php
require_once 'library/autoloader.php';


$url = $_SERVER['REQUEST_URI'];
$urlParts = explode('/', $url);

$controller = !empty($urlParts[2]) ? $urlParts[2] : 'index';
$action = !empty($urlParts[3]) ? $urlParts[3] : 'index';

$controllerName = ucfirst($controller) . 'Controller';
$actionName = ucfirst($action) . 'Action';

$controllerObj = new $controllerName();
$controllerObj->$actionName();
