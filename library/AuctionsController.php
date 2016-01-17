<?php

class AuctionsController extends AbstractController{
    
    public function __construct(){
        $this->setTitle('Przetargi');
    }
    
    public function indexAction(){
        $dbNews = new Wsm_Db_Auction();
        $list = $dbNews->getList();
        $this->addToView('auctionsList', $list);
    }
    
    public function editAction(){
        $auctionService = new Wsm_Db_Auction();
        $this->addToView('auction', $auctionService->get($this->get('id')));
    }
    
    public function saveAction(){
        $auction = new Wsm_Auction();
        if($this->has('id')){
            $auction->setId($this->get('id'));
        }
        $auction->setTitle($this->get('title'));
        $auction->setContent($this->get('content'));
        $auction->setSignature($this->get('signature'));
        $auction->setDate($this->get('date'));
        $auction->setDateExpiry($this->get('dateExpiry'));

        $auctionService = new Wsm_Db_Auction();
        try{
            $auctionService->save($auction);
            $this->redirect('auctions/index?msg=saved');
        }catch(Exception $e){
            $this->redirect('auctions/index?msg=save_error'); 
        }      
    }
    
    public function addAction(){
        $auction = new Wsm_Auction();
        $auction->setDate(date("Y-m-d H:i:s"));
        $auction->setDateExpiry(date("Y-m-d H:i:s"));
        $auction->setSignature('ZARZĄD WSM "OCHOTA"');
        $this->addToView('auction', $auction);
    }
    
}