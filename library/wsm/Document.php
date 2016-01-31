<?php

class Wsm_Document{
    
    private $id;
    private $title;
    private $filename;
    private $importance;
    private $type;
    private $category;
    private $order;
    private $archived;
    
    public function __construct($type = null){
        $this->type = $type;
    }
    
    public function getArchived() {
        return $this->archived;
    }

    public function setArchived($archived) {
        $this->archived = $archived;
    }
    
    public function getOrder() {
        return $this->order;
    }

    public function setOrder($order) {
        $this->order = $order;
    }

        
    public function getType() {
        return $this->type;
    }
    
    public function getCategory() {
        return $this->category;
    }

    public function setCategory($category) {
        $this->category = $category;
    }

    
    public function setType($type) {
        $this->type = $type;
    }

        
    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }
    
    public function getTitleEncoded() {
        return htmlspecialchars($this->title);
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