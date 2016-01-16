<?php

class Wsm_Db_News{
    
    public function getList(){
        $q = 'select * from news order by title';
        $rows = Wsm_Db::getInstance()->query($q);
        return $this->getListFromRows($rows);
    }
    
    public function get($id){
        $q = 'select * from news where id="' . $id . '" limit 1';
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
        $news = new Wsm_News();
        $news->setId($row['id']);
        $news->setTitle($row['title']);
        $news->setContent($row['content']);
        $news->setDate($row['date']);
        $news->setSignature($row['signature']);
        return $news;
    }
    
    public function save($news){
        $content = $news->getContent();
        $title = $news->getTitle();
        $signature = $news->getSignature();
        $date = $news->getDate();
        
        $q = 'update news set ';
        $q .= 'title=\'' . Wsm_Db::escape($title) . '\', ';
        $q .= 'content=\'' . Wsm_Db::escape($content) . '\', ';
        $q .= 'date=\'' . $date . '\', ';
        $q .= 'signature=\'' . Wsm_Db::escape($signature) . '\' ';
        $q .= 'where id=\'' . $news->getId() . '\' limit 1';
        Wsm_Db::getInstance()->update($q);
    }
    
}