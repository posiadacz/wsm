<?php

class Wsm_Db_Video{
    
    public function getList(){
        $q = 'select * from video order by id desc';
        $rows = Wsm_Db::getInstance()->query($q);
        return $this->getListFromRows($rows);
    }
    
    public function get($id){
        $q = 'select * from video where id="' . $id . '" limit 1';
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
        $page = new Wsm_Video();
        $page->setId($row['id']);
        $page->setYoutube($row['youtube']);
        return $page;
    }
    
    public function save($video){
        $id = $video->getId();
        if(!empty($id)){
            $this->update($video);
        }else{
            $this->insert($video);
        }
    }
    
    private function update($video){
        $q = 'update video set ';
        $q .= 'youtube=\'' . Wsm_Db::escape($video->getYoutube()) . '\' ';
        $q .= 'where id=\'' . $video->getId() . '\' limit 1';
        Wsm_Db::getInstance()->update($q);
    }
    
    private function insert($video){
        $q = 'insert into video(youtube) ';
        $q .= 'values(\'' . Wsm_Db::escape($video->getYoutube()) . '\')';
        Wsm_Db::getInstance()->update($q);
    }
    
}