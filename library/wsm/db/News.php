<?php

class Wsm_Db_News{
    
    public function getList($limit = null){
        $limitStr = $limit != null ? ' limit ' . $limit : '';
        $q = 'select * from news order by date desc' . $limitStr;
        $rows = Wsm_Db::getInstance()->query($q);
        return $this->getListFromRows($rows);
    }
    
    public function getListByYear($year){
        $q = 'select * from news where year(date)=\'' . $year . '\'order by date desc';
        $rows = Wsm_Db::getInstance()->query($q);
        return $this->getListFromRows($rows);
    }
    
    public function getYears(){
        $q = 'select year(date) from news GROUP BY YEAR(date) order by date desc';
        $rows = Wsm_Db::getInstance()->query($q);
        $list = array();
        foreach($rows as $row){
            array_push($list, $row['year(date)']);
        }
        return $list;
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
        $id = $news->getId();
        if(!empty($id)){
            $this->update($news);
        }else{
            $this->insert($news);
        }
    }
    
    private function update($news){
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
    
    private function insert($news){
        $content = $news->getContent();
        $title = $news->getTitle();
        $signature = $news->getSignature();
        $date = $news->getDate();
        
        $q = 'insert into news(title, content, date, signature) ';
        $q .= 'values(\'' . Wsm_Db::escape($title) . '\', \'' . Wsm_Db::escape($content) . '\', \'' . $date . '\', \'' . Wsm_Db::escape($signature) . '\' ';
        $q .= ')';
        Wsm_Db::getInstance()->update($q);
    }
    
    
}