<?php

class LoginController extends AbstractController{
    
    private $LOGIN = 'admin';
    private $PASSWORD = 'aghqwe89';
    
    public function indexAction(){
        if($this->has('login') && $this->has('password')){
            $login = $this->get('login');
            $password = $this->get('password');
            if($login == $this->LOGIN && $password == $this->PASSWORD){
                $session = new Session();
                $session->set('logged', true);
                $this->redirect('');
            }
        }
    }
    
    public function logoutAction(){
        $session = new Session();
        $session->destroy();
        $this->redirect('');
    }
    
}