<?php

class Front_AbstractController extends AbstractController{
    
    protected function setTitle($title){
        $this->addToView('title', $title);
    }
    
    protected function setContent($content){
        $this->addToView('content', $content);
    }
    
        protected function setUrl($url){
        $this->addToView('url', $url);
    }
    
}

