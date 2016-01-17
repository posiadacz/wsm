<?php

class Front_NewsController extends Front_AbstractController{
    
    
    public function indexAction(){
        $this->setTitle('Aktualności');
        $this->setUrl('index.html');
        
        
    }
    
    public function getTemplate(){
        return 'news/index.html';
    }
    
    
}