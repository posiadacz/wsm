<?php

class Wsm_Document{
    
    private $id;
    private $title;
    private $filename;
    private $importance;
    
    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getFilename() {
        return $this->filename;
    }

    public function getImportance() {
        return $this->importance;
    }

    public function setFilename($filename) {
        $this->filename = $filename;
    }

    public function setImportance($importance) {
        $this->importance = $importance;
    }

    public function hasFilename(){
        return !empty($this->filename);
    }

}