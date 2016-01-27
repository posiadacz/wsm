<?php

class Wsm_Db_Documents{
    
    public function getList($type){
        $q = 'select * from documents where `deleted`=false and type=\'' . $type . '\' order by if(category = \'\',1,0) asc, category asc, importance desc, title asc';
        $rows = Wsm_Db::getInstance()->query($q);
        return $this->getListFromRows($rows);
    }
    
    public function get($id){
        $q = 'select * from documents where id="' . $id . '" limit 1';
        $rows = Wsm_Db::getInstance()->query($q);
        return $this->getFirstFromRows($rows);
    }
    
    private function getFirstFromRows($rows){
        return $this->parseRow($rows[0]); 
    }
    
    private function getListFromRows($rows){
        $list = array();
        foreach($rows as $row){
            array_push($list, $this->parseRow($row));
        }
        return $list;
    }    
    
    private function parseRow($row){
        if($row == null){
            return null;
        }
        $news = new Wsm_Document();
        $news->setId($row['id']);
        $news->setTitle($row['title']);
        $news->setFilename($row['filename']);
        $news->setImportance($row['importance']);
        $news->setType($row['type']);
        $news->setCategory($row['category']);
        return $news;
    }
    
    public function save($news){
        $id = $news->getId();
        if(!empty($id)){
            $this->update($news);
        }else{
            $this->insert($news);
        }
    }
    
    public  function delete($doc){
        $id = $doc->getId();
        if(!empty($id)){
            $q = 'update documents set ';
            $q .= 'deleted=true ';
            $q .= 'where id=\'' . $id . '\' limit 1';
            Wsm_Db::getInstance()->update($q);
            return true;
        }
        return false;
    }
    
    private function update($news){
        $q = 'update documents set ';
        $q .= 'title=\'' . Wsm_Db::escape($news->getTitle()) . '\', ';
        $q .= 'filename=\'' . Wsm_Db::escape($news->getFilename()) . '\', ';
        $q .= 'importance=\'' . $news->getImportance() . '\', ';
        $q .= 'type=\'' . $news->getType() . '\', ';
        $q .= 'category=\'' . $news->getCategory() . '\' ';
        $q .= 'where id=\'' . $news->getId() . '\' limit 1';
        Wsm_Db::getInstance()->update($q);
    }
    
    private function insert($news){
        $title = $news->getTitle();
        $filename = $news->getFilename();
        $importance = $news->getImportance();
        $category = $news->getCategory();
        
        $q = 'insert into documents(title, filename, importance, type, category) ';
        $q .= 'values(\'' . Wsm_Db::escape($title) . '\', \'' . Wsm_Db::escape($filename) . '\', \'' . $importance . '\', \'' . $news->getType() . '\', \'' . Wsm_Db::escape($category) . '\'';
        $q .= ')';
        Wsm_Db::getInstance()->update($q);
    }
    
    
}