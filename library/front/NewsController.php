<?php

class Front_NewsController extends Front_AbstractController{
    
    private $template;
    
    public function indexAction(){
        $this->setTitle('Aktualności');
        $this->setUrl('index.html');
        
        $newsService = new Wsm_Db_News();
        $list = $newsService->getList(15);
        $this->addToView('newsList', $list);
        $this->setTemplate('news/index.html');
    }
    
    private function setTemplate($template){
        $this->template = $template;
    }
    
    public function getTemplate(){
        return $this->template;
    }
    
    public function archiwumAction(){
        $newsService = new Wsm_Db_News();
        $this->addToView('years', $newsService->getYears());
        $this->setTitle('Archiwum aktualności');
        $this->setUrl('archiwum.html');
        $this->setTemplate('news/archive.html');
    }
    
    public function archiveYearAction($year){
        $this->setTitle('Archiwum ' . $year . 'r.');
        $this->setUrl('archiwum' . $year . '.html');
        $this->setTemplate('news/index.html');
        $newsService = new Wsm_Db_News();
        $list = $newsService->getListByYear($year);
        $this->addToView('newsList', $list);
    }
    
    
}