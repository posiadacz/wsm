<?php
session_start();

require_once 'library/autoloader.php';

date_default_timezone_set('Europe/Warsaw'); 

function d($val){
    var_dump($val);
    echo '<br />';
}

$url = $_SERVER['REQUEST_URI'];
$urlControllerActionParts = explode('?', $url);
$urlControllerAction = $urlControllerActionParts[0];
$urlParts = explode('/', $urlControllerAction);

$controller = !empty($urlParts[2]) ? $urlParts[2] : 'index';
$action = !empty($urlParts[3]) ? $urlParts[3] : 'index';

$session = new Session();
/*if(!$session->has('logged') && $controller != 'login'){
    header('Location: /admin/login');
    die;
}*/

$template = $controller . '/' . $action . '.html';
$templateTitle = $controller . ' - ' . $action;


$controllerName = ucfirst($controller) . 'Controller';
$actionName = ucfirst($action) . 'Action';

$controllerObj = new $controllerName();
$controllerObj->$actionName();
$viewData = $controllerObj->getViewData();


include('template/layout.html');

Wsm_Db::getInstance()->disconnect();
