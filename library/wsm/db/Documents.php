<?php

class Wsm_Db_Documents{
    
    public function getList(){
        $q = 'select * from documents order by importance desc, title asc';
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
    
    private function update($news){
        $q = 'update documents set ';
        $q .= 'title=\'' . Wsm_Db::escape($news->getTitle()) . '\', ';
        $q .= 'filename=\'' . Wsm_Db::escape($news->getFilename()) . '\', ';
        $q .= 'importance=\'' . $news->getImportance() . '\' ';
        $q .= 'where id=\'' . $news->getId() . '\' limit 1';
        Wsm_Db::getInstance()->update($q);
    }
    
    private function insert($news){
        $title = $news->getTitle();
        $filename = $news->getFilename();
        $importance = $news->getImportance();

        
        $q = 'insert into documents(title, filename, importance) ';
        $q .= 'values(\'' . Wsm_Db::escape($title) . '\', \'' . Wsm_Db::escape($filename) . '\', \'' . $importance . '\'';
        $q .= ')';
        Wsm_Db::getInstance()->update($q);
    }
    
    
}