<?php

class Wsm_Db_Auction{
    
    public function getList($limit = null){
        $limitStr = $limit != null ? ' limit ' . $limit : '';
        $q = 'select * from auctions order by date desc' . $limitStr;
        $rows = Wsm_Db::getInstance()->query($q);
        return $this->getListFromRows($rows);
    }
    
    public function getListByYear($year){
        $q = 'select * from auctions where year(date)=\'' . $year . '\'order by date desc';
        $rows = Wsm_Db::getInstance()->query($q);
        return $this->getListFromRows($rows);
    }
    
    public function getYears(){
        $q = 'select year(date) from auctions GROUP BY YEAR(date) order by date desc';
        $rows = Wsm_Db::getInstance()->query($q);
        $list = array();
        foreach($rows as $row){
            array_push($list, $row['year(date)']);
        }
        return $list;
    }
    
    public function getCurrent(){        
        $q = 'select * from auctions where expiryDate>CURRENT_TIMESTAMP order by date desc';
        $rows = Wsm_Db::getInstance()->query($q);
        return $this->getListFromRows($rows);
    }
    
    public function get($id){
        $q = 'select * from auctions where id="' . $id . '" limit 1';
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
        $auction = new Wsm_Auction();
        $auction->setId($row['id']);
        $auction->setTitle($row['title']);
        $auction->setContent($row['content']);
        $auction->setDate($row['date']);
        $auction->setDateExpiry($row['expiryDate']);
        $auction->setSignature($row['signature']);
        return $auction;
    }
    
    public function save($auction){
        $id = $auction->getId();
        if(!empty($id)){
            $this->update($auction);
        }else{
            $this->insert($auction);
        }
    }
    
    private function update($auction){
        $content = $auction->getContent();
        $title = $auction->getTitle();
        $signature = $auction->getSignature();
        $date = $auction->getDate();
        $dateExpiry = $auction->getDateExpiry();
        
        $q = 'update auctions set ';
        $q .= 'title=\'' . Wsm_Db::escape($title) . '\', ';
        $q .= 'content=\'' . Wsm_Db::escape($content) . '\', ';
        $q .= 'date=\'' . $date . '\', ';
        $q .= 'expiryDate=\'' . $dateExpiry . '\', ';
        $q .= 'signature=\'' . Wsm_Db::escape($signature) . '\' ';
        $q .= 'where id=\'' . $auction->getId() . '\' limit 1';
        Wsm_Db::getInstance()->update($q);
    }
    
    private function insert($auction){
        $content = $auction->getContent();
        $title = $auction->getTitle();
        $signature = $auction->getSignature();
        $date = $auction->getDate();
        $dateExpiry = $auction->getDateExpiry();
        
        $q = 'insert into auctions(title, content, date, expiryDate, signature) ';
        $q .= 'values(\'' . Wsm_Db::escape($title) . '\', \'' . Wsm_Db::escape($content) . '\', \'' . $date . '\', \'' . $dateExpiry . '\', \'' . Wsm_Db::escape($signature) . '\' ';
        $q .= ')';
        Wsm_Db::getInstance()->update($q);
    }
    
    
}