<?php

class PagesController extends AbstractController{
    
    public function __construct(){
        $this->setTitle('Strony statyczne');
    }
    
    public function indexAction(){
        $pageDb = new Wsm_Db_Page();
        $this->addToView('pageList', $pageDb->getList());
    }
    
    public function editAction(){
        $pageDb = new Wsm_Db_Page();
        $this->addToView('page', $pageDb->get($this->get('id')));
    }
    
    public function saveAction(){
        if($this->has('id')){
            $page = new Wsm_Page();
            $page->setId($this->get('id'));
            $page->setTitle($this->get('title'));
            $page->setContent($this->get('content'));
 
            $pageDb = new Wsm_Db_Page();
            try{
                $pageDb->save($page);
                $this->redirect('pages/index?msg=saved');
            }catch(Exception $e){

            }
        }
        $this->redirect('pages/index?msg=save_error');
    }
    
}