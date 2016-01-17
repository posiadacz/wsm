<?php 
require_once 'library/autoloader.php';

date_default_timezone_set('Europe/Warsaw'); 

$surl = $_SERVER['REQUEST_URI'];
$urlControllerActionParts = explode('?', $surl);
$urlControllerAction = $urlControllerActionParts[0];
$urlParts = explode('/', $urlControllerAction);
$url = !empty($urlParts[1]) ? $urlParts[1] : 'index.html';

$template = 'default.html';
try{
//news
if($url == 'index.html'){
    $controller = new Front_NewsController();
    $controller->indexAction();
    $template = 'news/index.html';
}else{
    $controller = new Front_PagesController();
    $controller->indexAction($url);
}
}catch(Exception $e){
    $controller = new Front_ErrorController();
    $controller->indexAction();
}
$viewData = $controller->getViewData();

include('template/header.html');
//content
include('template/' . $controller->getTemplate());

include('template/footer.html');