<?php

class Wsm_Video{
    
    private $id;
    private $youtube;
    
    
    public function getId() {
        return $this->id;
    }

    public function getYoutube() {
        return $this->youtube;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setYoutube($youtube) {
        $this->youtube = $youtube;
    }


}