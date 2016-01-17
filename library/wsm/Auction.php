<?php

class Wsm_Auction{
    
    private $id;
    private $title;
    private $content;
    private $date;
    private $dateExpiry;
    private $signature;
    
    public function getDateExpiry() {
        return $this->dateExpiry;
    }

    public function setDateExpiry($dateExpiry) {
        $this->dateExpiry = $dateExpiry;
    }

        
    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getContent() {
        return $this->content;
    }

    public function getDate() {
        return $this->date;
    }
    
    public function getDateFormatted() {
        return date_format(new DateTime($this->date), 'd.m.Y\r.');
    }

    public function getSignature() {
        return $this->signature;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setContent($content) {
        $this->content = $content;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function setSignature($signature) {
        $this->signature = $signature;
    }


    
}