<?php

class Front_DocumentsController extends Front_AbstractController{
    
    private $type;
    private $isArchive;
    
    private $template = 'documents/index.html';
    
    public function __construct(){
        $type = $this->get('type');
        if(empty($type)){
            $type = '1';
        }
        if($type == '2'){
            $this->login();
        }
        $this->type = $type;
        $isArchive = $this->get('is_archive');
        $this->isArchive = $this->has('is_archive') && !empty($isArchive);
        $this->addToView('showArchiveLink', false);
        $this->addToView('showListLink', $this->isArchive);
    }
    
    private function getType(){
        return $this->type;
    }
    
    public function indexAction(){
        $title = $this->getType() == '2' ? 'Materiały dla członków spółdzielni' : 'Dokumenty do pobrania'; 
        if($this->isArchive){
            $title .= ' - Archiwum';
        }
        $this->setTitle($title);
        $this->setUrl('dokumenty.html');
        
        $dbService = new Wsm_Db_Documents();
        $this->addToView('list', $dbService->getList($this->getType(), null, $this->isArchive));
        $this->addToView('type', $this->getType());
        
        $hasArchive = $dbService->hasArchive($this->getType());
        $this->addToView('showArchiveLink', !$this->isArchive && $hasArchive);
    }
    

    public function getTemplate(){
        return $this->template;
    }
    
    public function loginAction(){
        $this->setTitle('Materiały dla członków spółdzielni');
        $this->setUrl('dokumenty-login.html');
        
        $session = new Session();
        
        if($this->has('logout')){
            $session->destroy();
        }
        
        if($this->has('login') && $this->has('password')){
            $login = $this->get('login');
            $password = $this->get('password');
            $db = new Wsm_Db_Users();
            if($db->check($login, $password)){
                $session->set('documentsUser', true);
                $this->redirect('dokumenty.html?type=2', true);
            }
        }
        $this->template = 'documents/form.html';
    }
    
    private function login(){
        $session = new Session();
        if(!$session->has('documentsUser')){
            $this->redirect('dokumenty-login.html', true);
        }
    }
    
}