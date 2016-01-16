<?php

class Session{
    
    private $session;
    
    public function __construct() {
        $this->load();
    }
    
    private function load(){
        $this->session = $_SESSION;
    }
    
    public function get($key){
        return $this->session[$key];
    }
    
    public function has($key){
        return array_key_exists($key, $this->session);
    }
    
    public function set($key, $value){
        $_SESSION[$key] = $value;
        $this->load();
    }
    
    public function destroy(){
        session_destroy();
    }
    
    
}

