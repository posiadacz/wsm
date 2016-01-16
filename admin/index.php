<?php
session_start();

require_once 'library/autoloader.php';

function d($val){
    var_dump($val);
    echo '<br />';
}

$url = $_SERVER['REQUEST_URI'];
$urlParts = explode('/', $url);

$controller = !empty($urlParts[2]) ? $urlParts[2] : 'index';
$action = !empty($urlParts[3]) ? $urlParts[3] : 'index';

$session = new Session();
if(!$session->has('logged') && $controller != 'login'){
    header('Location: /admin/login');
    die;
}

$template = $controller . '/' . $action . '.html';

$controllerName = ucfirst($controller) . 'Controller';
$actionName = ucfirst($action) . 'Action';

$controllerObj = new $controllerName();
$controllerObj->$actionName();

include('template/layout.html');
