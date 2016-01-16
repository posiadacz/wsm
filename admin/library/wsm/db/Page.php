<?php

class Wsm_Db_Page{
    
    public function getList(){
        $q = 'select * from pages';
        $rows = Wsm_Db::getInstance()->query($q);
        $list = array();
        foreach($rows as $row){
            array_push($list, $this->parseRow($row));
        }
        return $list;
    }
    
        public function get($id){
        $q = 'select * from pages where id="' . $id . '"';
        $rows = Wsm_Db::getInstance()->query($q);
        return $this->parseRow($rows[0]);
    }
    
    
    private function parseRow($row){
        $page = new Wsm_Page();
        $page->setId($row['id']);
        $page->setTitle($row['title']);
        $page->setContent($row['content']);
        return $page;
    }
    
}