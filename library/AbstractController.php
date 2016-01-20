<?php

class AbstractController{
    
    private $viewData = array();
    private $baseUrl;
    
    protected function setBaseUrl($url){
        $this->baseUrl = $url;
        $this->addToView('baseUrl', $url);
    }
    
    protected function getBaseUrl(){
        return $this->baseUrl;
    }
    
    protected function addToView($key, $value){
        $this->viewData[$key] = $value;
    }
    
    public function getViewData(){
        return $this->viewData;
    }
    
    protected function setTitle($title){
        $this->addToView('templateTitle', $title);
    }
    
    protected function has($key){
        return !empty($_POST[$key]) || !empty($_GET[$key]);
    }    
    
    protected function get($key){
        if(!empty($_POST[$key])){
            return $_POST[$key];
        }else if (!empty($_GET[$key])){
            return $_GET[$key];
        }
        return null;
    }
    
    protected function redirect($url, $complete = false){
        if(!$complete){
            $url = '/admin/' . $url;
        }
        header('Location: ' . $url);
        die;
    }
}

