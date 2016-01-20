<?php

class Front_DocumentsController extends Front_AbstractController{
    
    private $type;
    
    public function __construct(){
        $type = $this->get('type');
        if(empty($type)){
            $type = '1';
        }
        $this->type = $type;
    }
    
    private function getType(){
        return $this->type;
    }
    
    public function indexAction(){
        $title = $this->getType() == '2' ? 'Materiały dla członków spółdzielni' : 'Dokumenty do pobrania'; 
        $this->setTitle($title);
        $this->setUrl('dokumenty.html');
        
        $dbService = new Wsm_Db_Documents();
        $this->addToView('list', $dbService->getList($this->getType()));
    }
    

    public function getTemplate(){
        return 'documents.html';
    }
    
}