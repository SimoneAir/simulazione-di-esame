<?php
    namespace App\Service;

    use App\Entity\Product;
    
    class ProductService {
        public function getFirst(){

            $productList[] = new Product(1, 'TV Samsung 4K', 899.99, 'Elettronica');
            $productList[] = new Product(2, 'Laptop HP Pavilion', 1099.99, 'Elettronica');
            $productList[] = new Product(3, 'Scarpe da corsa Nike', 79.99, 'Abbigliamento');
            $productList[] = new Product(4, 'Camicia elegante uomo', 49.99, 'Abbigliamento');
            $productList[] = new Product(5, 'Set di pentole in acciaio inossidabile', 129.99, 'Casa e Cucina');
            $productList[] = new Product(6, 'Aspirapolvere robot intelligente', 249.99, 'Casa e Cucina');
            
            return $productList;

        }
        public function getSecond(){

            $productList[] = new Product(7, 'Libro "Il Signore degli Anelli"', 29.99, 'Libri');
            $productList[] = new Product(8, 'Gioco da tavolo strategico', 39.99, 'Giochi');
            $productList[] = new Product(9, 'Borsa da viaggio resistente all\'acqua', 69.99, 'Accessori');
            $productList[] = new Product(10, 'Orologio da polso elegante', 159.99, 'Accessori');
            $productList[] = new Product(11, 'Videogioco per console', 49.99, 'Giochi');
            $productList[] = new Product(12, 'Felpa con cappuccio unisex', 34.99, 'Abbigliamento');
            
            return $productList;

        }
        public function getThird(){

            $productList[] = new Product(13, 'Ombrello automatico resistente al vento', 19.99, 'Accessori');
            $productList[] = new Product(14, 'Smartphone Android', 899.99, 'Elettronica');
            $productList[] = new Product(15, 'Mouse wireless ergonomico', 29.99, 'Elettronica');
            $productList[] = new Product(16, 'Borsa termica per picnic', 24.99, 'Accessori');
            $productList[] = new Product(17, 'Auricolari senza fili con cancellazione del rumore', 129.99, 'Elettronica');
            $productList[] = new Product(18, 'Giacca invernale impermeabile', 89.99, 'Abbigliamento');
            
            return $productList;

        }
        public function getFourth(){

            $productList[] = new Product(19, 'Set di piatti in ceramica', 59.99, 'Casa e Cucina');
            $productList[] = new Product(20, 'Tavolo da pranzo allungabile', 349.99, 'Casa e Cucina');
            $productList[] = new Product(21, 'Libro di cucina internazionale', 27.99, 'Libri');
            $productList[] = new Product(22, 'Puzzle 1000 pezzi', 19.99, 'Giochi');
            $productList[] = new Product(23, 'Cuffie gaming con microfono', 79.99, 'Elettronica');
            $productList[] = new Product(24, 'Maglia sportiva traspirante', 39.99, 'Abbigliamento');
            
            return $productList;

        }
        public function getFifth(){

            $productList[] = new Product(25, 'Asciugacapelli professionale', 69.99, 'Casa e Cucina');
            $productList[] = new Product(26, 'Sedia ergonomica da ufficio', 149.99, 'Casa e Cucina');
            $productList[] = new Product(27, 'Romanzo di fantascienza', 22.99, 'Libri');
            $productList[] = new Product(28, 'Gioco da tavolo di strategia avanzata', 54.99, 'Giochi');
            $productList[] = new Product(29, 'Telecamera di sicurezza wireless', 129.99, 'Elettronica');
            $productList[] = new Product(30, 'Cappotto invernale elegante', 79.99, 'Abbigliamento');
            
            return $productList;

        }
        public function getSixth(){

            $productList[] = new Product(31, 'Set di posate in acciaio inossidabile', 29.99, 'Casa e Cucina');
            $productList[] = new Product(32, 'Scrivania per computer con vano portaoggetti', 179.99, 'Casa e Cucina');
            $productList[] = new Product(33, 'Libro di poesie contemporanee', 18.99, 'Libri');
            $productList[] = new Product(34, 'Puzzle 500 pezzi artistico', 15.99, 'Giochi');
            $productList[] = new Product(35, 'Lampada da tavolo a LED', 39.99, 'Casa e Cucina');
            $productList[] = new Product(36, 'Maglietta vintage stampata', 24.99, 'Abbigliamento');
            
            return $productList;

        }
    }




?>