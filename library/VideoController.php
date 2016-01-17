<?php

class VideoController extends AbstractController{
    
    public function __construct(){
        $this->setTitle('Wideo');
    }
    
    public function indexAction(){
        $videoService = new Wsm_Db_Video();
        $this->addToView('videoList', $videoService->getList());
    }
    
    public function editAction(){
        $videoService = new Wsm_Db_Video();
        $this->addToView('video', $videoService->get($this->get('id')));
    }
    
    public function addAction(){
        $this->addToView('video', new Wsm_Video());
    }
    
    public function saveAction(){
        $video = new Wsm_Video();
        if($this->has('id')){
            $video->setId($this->get('id'));
        }
        $video->setYoutube($this->get('youtube'));

        $videoService = new Wsm_Db_Video();
        try{
            $videoService->save($video);
            $this->redirect('video/index?msg=saved');
        }catch(Exception $e){
            $this->redirect('video/index?msg=save_error'); 
        } 
    }
}
