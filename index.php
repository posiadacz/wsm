<?php 
require_once 'library/autoloader.php';

date_default_timezone_set('Europe/Warsaw'); 

$surl = $_SERVER['REQUEST_URI'];
$urlControllerActionParts = explode('?', $surl);
$urlControllerAction = $urlControllerActionParts[0];
$urlParts = explode('/', $urlControllerAction);
$url = !empty($urlParts[1]) ? $urlParts[1] : 'index.html';

try{
    $dbPage = new Wsm_Db_Page();
    $page = $dbPage->getByUrl($url);
    if($page != null){
        $title = $page->getTitle();
        $content = $page->getContent();
        $url = $url;
    }
}catch(Exception $e){

}

if($page == null){
    $title = '404';
    $content = 'Strona nie istnieje.';
    $url = '404.html';
}

include('template/header.html');
//content
echo $content;

include('template/footer.html');