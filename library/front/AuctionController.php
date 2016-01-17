<?php

class Front_AuctionController extends Front_AbstractController{
    
    private $template;
    
    public function przetargiAction(){
        $this->setTitle('Przetargi');
        $this->setUrl('przetargi.html');
        $this->setTemplate('auction/index.html');
        
        $auctionService = new Wsm_Db_Auction();
        $this->addToView('years', $auctionService->getYears());
        
        $list = $auctionService->getCurrent();
        $this->addToView('hasCurrent', !empty($list));
        
    }
    
    private function setTemplate($template){
        $this->template = $template;
    }
    
    public function getTemplate(){
        return $this->template;
    }
    
    public function archiveYearAction($year){
        $this->setTitle('Postępowania przetargowe ' . $year . 'r.');
        $this->setUrl('przetargi_' . $year . '.html');
        $this->setTemplate('auction/list.html');
        $auctionService = new Wsm_Db_Auction();
        $list = $auctionService->getListByYear($year);
        $this->addToView('auctionList', $list);
    }
    
    public function przetargi_biezaceAction(){
        $this->setTitle('Bieżące postępowania przetargowe');
        $this->setUrl('przetargi_biezace.html');
        $this->setTemplate('auction/list.html');
        
        $auctionService = new Wsm_Db_Auction();
        $list = $auctionService->getCurrent();
        $this->addToView('auctionList', $list);
    }
    
    
}