<?php

class NewsController extends AbstractController{
    
    public function indexAction(){
        $dbNews = new Wsm_Db_News();
        $list = $dbNews->getList();
        $this->addToView('newsList', $list);
    }
    
    public function editAction(){
        $newsDb = new Wsm_Db_News();
        $this->addToView('news', $newsDb->get($this->get('id')));
    }
    
    public function saveAction(){
        $news = new Wsm_News();
        if($this->has('id')){
            $news->setId($this->get('id'));
        }
        $news->setTitle($this->get('title'));
        $news->setContent($this->get('content'));
        $news->setSignature($this->get('signature'));
        $news->setDate($this->get('date'));

        $newsDb = new Wsm_Db_News();
        try{
            $newsDb->save($news);
            $this->redirect('news/index?msg=saved');
        }catch(Exception $e){
            $this->redirect('news/index?msg=save_error'); 
        }      
    }
    
    public function addAction(){
        $news = new Wsm_News();
        $news->setDate(date("Y-m-d H:i:s"));
        $news->setSignature('ZARZĄD WSM "OCHOTA"');
        $this->addToView('news', $news);
    }
    
}