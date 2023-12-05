<?php
    namespace App\Controller;

use App\Service\MarketService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    
    class MarketListController extends AbstractController{
        private $market_service;

        public function __construct(MarketService $market_service){
            $this -> market_service = $market_service;
        }

        public function getMarketList(){

            $marketList = $this -> market_service -> getArray();
            
            return $this -> render('market-list.html.twig', [
                'marketList' => $marketList
            ]);
        }
    }
    
    
    
    
    
    
    
?>