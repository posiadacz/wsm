<?php

class AbstractController{
    
    private $viewData = array();
    
    public function __construct() {

    }
    
    
    protected function addToView($key, $value){
        $this->viewData[$key] = $value;
    }
    
    public function getViewData(){
        return $this->viewData;
    }
    
    protected function get($key){
        return $_GET[$key];
    }
}

