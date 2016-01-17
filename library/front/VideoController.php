<?php

class Front_VideoController extends Front_AbstractController{
    
    public function indexAction(){
        $this->setTitle('Wideo');
        $this->setUrl('wideo.html');
        
        $videoService = new Wsm_Db_Video();
        $this->addToView('videoList', $videoService->getList());
    }
    

    public function getTemplate(){
        return 'video.html';
    }
    
}