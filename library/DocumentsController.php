<?php

class DocumentsController extends AbstractController{
    
    public function __construct(){
        $this->setTitle('Dokumenty');
    }
    
    public function indexAction(){
        $db = new Wsm_Db_Documents();
        $list = $db->getList();
        $this->addToView('list', $list);
    }
    
    public function editAction(){
        $db = new Wsm_Db_Documents();
        $this->addToView('document', $db->get($this->get('id')));
    }
}