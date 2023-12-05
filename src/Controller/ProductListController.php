<?php
    namespace App\Controller;

    use App\Service\ProductService;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    
    class ProductListController extends AbstractController{
        private $product_service;

        public function __construct(ProductService $product_service){
            $this -> product_service = $product_service;
        }

        public function getMarketList(){

            $marketList = $this -> product_service -> getArray();
            
            return $this -> render('market-list.html.twig', [
                'marketList' => $marketList
            ]);
        }
    }
    
    
    
    
    
    
    
?>