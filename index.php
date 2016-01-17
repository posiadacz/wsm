<?php 
require_once 'library/autoloader.php';

date_default_timezone_set('Europe/Warsaw'); 

function d($val){
    var_dump($val);
    echo '<br />';
}

$surl = $_SERVER['REQUEST_URI'];
$urlControllerActionParts = explode('?', $surl);
$urlControllerAction = $urlControllerActionParts[0];
$urlParts = explode('/', $urlControllerAction);
$url = !empty($urlParts[1]) ? $urlParts[1] : 'index.html';

$template = 'default.html';
try{
//news
    if($url == 'index.html' || strpos($url, 'archiwum') !== false){
        $controller = new Front_NewsController();
        if(preg_match("/\\d/", $url) > 0){
            $action = 'archiveYearAction';
            preg_match("/\\d+/", $url, $match);
            $param = $match[0];
        }else{
            $action = str_replace('.html', '', $url) . 'Action';
            $param = null;
        }
        if($param != null){
            $controller->$action($param);
        }else{
            $controller->$action();
        }
    }else if($url == 'wideo.html'){
        $controller = new Front_VideoController();
        $controller->indexAction();
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
include('template/' . $controller->getTemplate());
include('template/footer.html');