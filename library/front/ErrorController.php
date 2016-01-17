<?php

class Front_ErrorController extends Front_AbstractController{
    
    
    public function indexAction(){
        $this->setTitle('404');
        $this->setUrl('error.html');
    }
    
    public function getTemplate(){
        return 'error.html';
    }
    
    
}