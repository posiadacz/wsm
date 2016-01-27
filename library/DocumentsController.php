<?php

class DocumentsController extends AbstractController{
    
    private $type;
    
    public function __construct(){
        $type = $this->get('type');
        if(empty($type)){
            $type = '1';
        }
        $this->type = $type;
        $title = $type == '1' ? 'Dokumenty do pobrania' : 'Materiały dla członków spółdzielni';
        $this->setTitle($title);
        
        $url = '/admin/documents?type=' . $type;
        $this->setBaseUrl($url);
        $this->addToView('type', $type);
    }
    
    private function getType(){
        return $this->type;
    }
    
    public function indexAction(){
        $db = new Wsm_Db_Documents();
        $list = $db->getList($this->getType());
        $this->addToView('list', $list);
    }
    
    public function editAction(){
        $db = new Wsm_Db_Documents();
        $this->addToView('document', $db->get($this->get('id')));
    }
    
    public function addAction(){
        $this->addToView('document', new Wsm_Document($this->getType()));
    }
    
    public function deleteAction(){
        if($this->has('id')){
            $doc = new Wsm_Document();
            $doc->setId($this->get('id'));
            $dbService = new Wsm_Db_Documents();
            if($dbService->delete($doc)){
                $this->redirect($this->getBaseUrl() . '&msg=deleted', true); 
            }
        }
        $this->redirect($this->getBaseUrl() . '&msg=del_error'); 
    }
        
    
    public function saveAction(){
        $news = new Wsm_Document();
        if($this->has('id')){
            $news->setId($this->get('id'));
        }
        $news->setTitle($this->get('title'));
        $news->setType($this->get('type'));
        $news->setCategory($this->get('category'));
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
                $this->redirect($this->getBaseUrl() . '&msg=save_error', true); 
            }
            $news->setFilename($filename);        
        }else{
            $news->setFilename($this->get('filename'));
        }

        $newsDb = new Wsm_Db_Documents();
        try{
            $newsDb->save($news);
            $this->redirect($this->getBaseUrl() . '&msg=saved', true);
        }catch(Exception $e){
            $this->redirect($this->getBaseUrl() . '&msg=save_error', true); 
        }      
    }
}