<?php 
require_once 'library/autoloader.php';

//$_REQUEST['REQUEST_URI']
$url = 'spoldzielnia.html';

$dbPage = new Wsm_Db_Page();
$page = $dbPage->getByUrl($url);

$title = $page->getTitle();
$content = $page->getContent();
$url = $url;


include('template/header.html');
//content
echo $content;

include('template/footer.html');