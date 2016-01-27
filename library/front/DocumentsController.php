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
            $this->login();
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
        $this->addToView('type', $this->getType());
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