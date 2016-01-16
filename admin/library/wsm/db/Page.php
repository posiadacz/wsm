<?php

class Wsm_Db_Page{
    
    public function getList(){
        $q = 'select * from pages order by title';
        $rows = Wsm_Db::getInstance()->query($q);
        $list = array();
        foreach($rows as $row){
            array_push($list, $this->parseRow($row));
        }
        return $list;
    }
    
        public function get($id){
        $q = 'select * from pages where id="' . $id . '" limit 1';
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
    
    public function save($page){
        $content = $page->getContent();
        $title = $page->getTitle();
        $q = 'update pages set ';
        $q .= 'title=\'' . $this->escape($title) . '\', ';
        $q .= 'content=\'' . $this->escape($content) . '\' ';
        $q .= 'where id=\'' . $page->getId() . '\' limit 1';
        Wsm_Db::getInstance()->update($q);
    }
    
    private function escape($string){
        return htmlentities($string);
    }
    
}