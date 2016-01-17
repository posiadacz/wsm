<?php

class AbstractController{
    
    private $viewData = array();
    
    protected function addToView($key, $value){
        $this->viewData[$key] = $value;
    }
    
    public function getViewData(){
        return $this->viewData;
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
    
    protected function redirect($url){
        header('Location: /admin/' . $url);
        die;
    }
}

