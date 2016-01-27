<?php

class Front_DocumentsController extends Front_AbstractController{
    
    private $type;
    
    private $template = 'documents/index.html';
    
    public function __construct(){
        $type = $this->get('type');
        if(empty($type)){
            $type = '1';
        }
        if($type == '2'){
            //$this->login();
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
        return $this->template;
    }
    
    public function loginAction(){
        $this->setTitle('Materiały dla członków spółdzielni');
        $this->setUrl('dokumenty-login.html');
        $this->template = 'documents/form.html';
    }
    
    private function login(){
        $session = new Session();
        if(!$session->has('documentsUser')){
            
            $this->redirect('dokumenty-login.html', true);
        }
    }
    
}