<?php

class Front_DocumentsController extends Front_AbstractController{
    
    public function indexAction(){
        $this->setTitle('Dokumenty do pobrania');
        $this->setUrl('dokumenty.html');
        
        $dbService = new Wsm_Db_Documents();
        $this->addToView('list', $dbService->getList());
    }
    

    public function getTemplate(){
        return 'documents.html';
    }
    
}