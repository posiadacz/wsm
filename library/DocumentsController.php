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
    
    public function deleteAction(){
        if($this->has('id')){
            $doc = new Wsm_Document();
            $doc->setId($this->get('id'));
            $dbService = new Wsm_Db_Documents();
            if($dbService->delete($doc)){
                $this->redirect('documents/index?msg=deleted'); 
            }
        }
        $this->redirect('documents/index?msg=del_error'); 
    }
        
    
    public function saveAction(){
        $news = new Wsm_Document();
        if($this->has('id')){
            $news->setId($this->get('id'));
        }
        $news->setTitle($this->get('title'));
        $news->setImportance($this->get('importance'));

        $file = $_FILES['file'];
        if(!empty($file) && !empty($file['name'])){
            $filename = $file['name'];
            $uploadDir = getcwd() . '/../../documents/';
            $filePath = $uploadDir  .  $filename;
            if(file_exists($filePath)){
                unlink($filePath);
            }
            if(!move_uploaded_file($file['tmp_name'], $filePath)){
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