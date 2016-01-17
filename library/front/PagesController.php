<?php

class Front_PagesController extends Front_AbstractController{
    
    
    public function indexAction($url){
        $dbPage = new Wsm_Db_Page();
        $page = $dbPage->getByUrl($url);
        if($page == null){
            throw new Exception('404 Not Found');
        }
        $this->setTitle($page->getTitle());
        $this->setContent($page->getContent());
    }
    
    public function getTemplate(){
        return 'default.html';
    }
    
    
}