<?php

class Front_PagesController extends Front_AbstractController{
    
    
    public function indexAction($url){
        $dbPage = new Wsm_Db_Page();
        $page = $dbPage->getByUrl($url);
        if($page != null){
            $this->setTitle($page->getTitle());
            $this->setContent($page->getContent());
        }
    }
    
    public function getTemplate(){
        return 'default.html';
    }
    
    
}