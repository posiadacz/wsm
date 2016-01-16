<?php

class PagesController extends AbstractController{
    
    public function indexAction(){
        $pageDb = new Wsm_Db_Page();
        $this->addToView('pageList', $pageDb->getList());
    }
    
}