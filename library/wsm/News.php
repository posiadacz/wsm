<?php

class Wsm_News{
    
    private $id;
    private $title;
    private $content;
    private $date;
    private $signature;
    
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