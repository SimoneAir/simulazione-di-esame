<?php
    namespace App\Controller;

    use App\Service\ProductService;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    
    class ProductListController extends AbstractController{
        private $product_service;

        public function __construct(ProductService $product_service){
            $this -> product_service = $product_service;
        }

        public function getProductList(Request $request){
            $id = $request -> query -> get('id');
            $productList;

            switch($id){
                case 1: {
                    $productList = $this -> product_service -> getFirst();
                    break;
                }
                    
                case 2: {
                    $productList = $this -> product_service -> getSecond();
                    break;
                }
                    
                case 3: {
                    $productList = $this -> product_service -> getThird();
                    break;
                }
                    
                case 4: {
                    $productList = $this -> product_service -> getFourth();
                    break;
                }
                    
                case 5: {
                    $productList = $this -> product_service -> getFifth();
                    break;
                }
                    
                case 6: {
                    $productList = $this -> product_service -> getSixth();
                    break;
                }
                    
            }
            
            return $this -> render('product-list.html.twig', [
                'productList' => $productList
            ]);
        }
    }
    
    
    
    
    
    
    
?>