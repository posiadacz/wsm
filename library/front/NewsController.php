<?php

class Front_NewsController extends Front_AbstractController{
    
    
    public function indexAction(){
        $this->setTitle('Aktualności');
        $this->setUrl('index.html');
        
        $newsService = new Wsm_Db_News();
        $list = $newsService->getList();
        $this->addToView('newsList', $list);
    }
    
    public function getTemplate(){
        return 'news/index.html';
    }
    
    
}