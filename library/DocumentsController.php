<?php

class DocumentsController extends AbstractController{
    
    public function __construct(){
        $this->setTitle('Dokumenty');
    }
    
    public function indexAction(){
        $db = new Wsm_Db_Documents();
        $list = $db->getList();
        $this->addToView('list', $list);
    }
    
    public function editAction(){
        $db = new Wsm_Db_Documents();
        $this->addToView('document', $db->get($this->get('id')));
    }
    
    public function addAction(){
        $this->addToView('document', new Wsm_Document());
    }
    
    public function saveAction(){
        $news = new Wsm_Document();
        if($this->has('id')){
            $news->setId($this->get('id'));
        }
        $news->setTitle($this->get('title'));
        $news->setImportance($this->get('importance'));

        $file = $_FILES['file'];
        if(!empty($file)){
            $filename = $file['name'];
            $uploadDir = getcwd() . '/../../documents/';
            if(!move_uploaded_file($file['tmp_name'], $uploadDir  .  $filename)){
                $this->redirect('documents/index?msg=save_error'); 
            }
            $news->setFilename($filename);        
        }

        $newsDb = new Wsm_Db_Documents();
        try{
            $newsDb->save($news);
            $this->redirect('documents/index?msg=saved');
        }catch(Exception $e){
            $this->redirect('documents/index?msg=save_error'); 
        }      
    }
}