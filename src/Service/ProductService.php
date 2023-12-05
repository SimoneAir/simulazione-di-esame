<?php
    namespace App\Service;

    use App\Entity\Product;
    
    class ProductService {
        public function getFirst(){

            $productList[] = new Product(1, 'TV Samsung 4K', 899.99, 'Elettronica', 'https://imgs.search.brave.com/lgqqUTpvkrOsE9UiL6Sry8eaDSks-hG7FIZZ6WsYuK8/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9pNS53/YWxtYXJ0aW1hZ2Vz/LmNvbS9hc3IvZWJk/ZTkxMjQtMTM2NC00/YmZiLTg2MGQtMjE2/ZTFjYjQ5MTQ3XzIu/YjIwNzRmODVkMmVl/ZDkzNDdiY2VkYzE2/OTQ0NGIxMWUuanBl/Zz9vZG5IZWlnaHQ9/NTgwJm9kbldpZHRo/PTU4MCZvZG5CZz1G/RkZGRkY');
            $productList[] = new Product(2, 'Laptop HP Pavilion', 1099.99, 'Elettronica' , 'https://imgs.search.brave.com/aGgcxx0aPRR3ghjPyiTRiG6mwsE7OrnxEQCOcLvJtp8/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9pbWFn/ZXMtbmEuc3NsLWlt/YWdlcy1hbWF6b24u/Y29tL2ltYWdlcy9J/LzYxRjhzdWZxUVJM/LmpwZw');
            $productList[] = new Product(3, 'Scarpe da corsa Nike', 79.99, 'Abbigliamento', 'https://imgs.search.brave.com/_qQis7Sb6rpGtngIFT1ixo01KqsGIiKWXjXTOmB-zXU/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9ibG9n/LmtsZWt0LmNvbS93/cC1jb250ZW50L3Vw/bG9hZHMvMjAyMC8w/Mi9PZmYtV2hpdGUt/QWlyLUpvcmRhbi0x/LVVOQy1Pbi1Gb290/LTgwMHg0NTAuanBn');
            $productList[] = new Product(4, 'Camicia elegante uomo', 49.99, 'Abbigliamento' , 'https://imgs.search.brave.com/mQh5-H6EYrUW5kob2pR_RuRgAf-QYySdAFDK1cTc4ZI/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9pbWcw/MS56dGF0Lm5ldC9h/cnRpY2xlL3NwcC1t/ZWRpYS1wMS8wODI4/YWNmNTRlMDA0YjRk/OGUxNDQyMTlhYmYw/NTNhNC84YmI3NGIx/YjNmZTg0MTgwODY5/NWI1MzY3N2VhY2U4/Ni5qcGc_aW13aWR0/aD0zMDA');
            $productList[] = new Product(5, 'Set di pentole in acciaio inossidabile', 129.99, 'Casa e Cucina' , 'https://imgs.search.brave.com/zd3JhvDMFrfZDT6BhsSbD3Pt9j4FJMSAYynHryCH0lE/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9zdGF0/aWNmYW5wYWdlLmFr/YW1haXplZC5uZXQv/d3AtY29udGVudC91/cGxvYWRzL3NpdGVz/LzExLzIwMTkvMDQv/bWlnbGlvcmktYmF0/dGVyaWUtZGktcGVu/dG9sZS0xMjAweDY3/NS5qcGc');
            $productList[] = new Product(6, 'Aspirapolvere robot intelligente', 249.99, 'Casa e Cucina', 'https://imgs.search.brave.com/pY-lnPiAOa87ajRmVPihnOxXvzsIidylwCyKkFtTmE4/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9keXNv/bi1oLmFzc2V0c2Fk/b2JlMi5jb20vaXMv/aW1hZ2UvY29udGVu/dC9kYW0vZHlzb24v/aXQvZmMvVjhfcnIu/anBnPyRyZXNwb25z/aXZlJA'); 
            
            return $productList;

        }
        public function getSecond(){

            $productList[] = new Product(7, 'Libro "Il Signore degli Anelli"', 29.99, 'Libri' , 'https://imgs.search.brave.com/vBEQJvMrHe8CnmfeJ6ynpIaORYG0bNboT2ARG5Lu-ug/rs:fit:500:0:0/g:ce/aHR0cHM6Ly9pbWFn/ZXMuZXZlcnlleWUu/aXQvaW1nLWNvdmVy/L2lsLXNpZ25vcmUt/YW5lbGxpLWFuZWxs/aS1wb3RlcmUtc3Rh/Z2lvbmUtMS12NS0z/NzgyOC0zNDAud2Vi/cA');
            $productList[] = new Product(8, 'Gioco da tavolo strategico', 39.99, 'Giochi', 'https://imgs.search.brave.com/JKQVsvhzj6wqRQiZc4nm5156GpkqU8Yi9ZQlvJtJris/rs:fit:860:0:0/g:ce/aHR0cHM6Ly90NC5m/dGNkbi5uZXQvanBn/LzA0LzMwLzk0Lzk3/LzM2MF9GXzQzMDk0/OTc1NF9nc0c2d3RG/T1kxTFRLMWdoWFZ3/REpMblJpc3F4Uno1/eC5qcGc');
            $productList[] = new Product(9, 'Borsa da viaggio resistente all\'acqua', 69.99, 'Accessori','https://imgs.search.brave.com/9z0rL9MrOMK0lNAO6tqm_ZPS_5V7OkUVp0A4MIBl-DM/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9pbWFn/ZXMtZXUuc3NsLWlt/YWdlcy1hbWF6b24u/Y29tL2ltYWdlcy9J/LzgxMFBpRVRVbERM/Ll9BQ19VTDExNl9T/UjExNiwxMTZfLmpw/Zw');
            $productList[] = new Product(10, 'Orologio da polso elegante', 159.99, 'Accessori', 'https://imgs.search.brave.com/S20CVOtaMoEZxMCde0KLq3B8VV_7AMk9f6LfIOuyGzM/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5pc3RvY2twaG90/by5jb20vaWQvMTU3/NzczNzYxL3Bob3Rv/L3JvbGV4LmpwZz9z/PTYxMng2MTImdz0w/Jms9MjAmYz1KYmNt/OFlxRGJuQi1PN3VM/RjNld0gxakRyaDFT/NUpxV3lSd1AtWEo1/VVo4PQ');
            $productList[] = new Product(11, 'Videogioco per console', 49.99, 'Giochi', 'https://imgs.search.brave.com/yiazAHjwd7bemcwiggoc_gGrQYd8JYv-ecEDQ0Bn6Ks/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9ydWtt/aW5pbTIuZmxpeGNh/cnQuY29tL2ltYWdl/LzYxMi82MTIvbDF0/bWYwdzAvcGh5c2lj/YWwtZ2FtZS9yL3Mv/ZC9uby1zdGFuZGFy/ZC1lZGl0aW9uLXBz/NS1ncmFuZC10aGVm/dC1hdXRvLXYtZnVs/bC1nYW1lLXBzNS1v/cmlnaW5hbC1pbWFn/ZGI3YnJ1Y3lmcnFm/LmpwZWc_cT03MA');
            $productList[] = new Product(12, 'Felpa con cappuccio unisex', 34.99, 'Abbigliamento', 'https://imgs.search.brave.com/6SwqjIZbxtaoJEBQuOdlOqnKIEs80CFVAobkotE4JrE/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9pbWFn/ZS5zcHJlYWRzaGly/dG1lZGlhLm5ldC9p/bWFnZS1zZXJ2ZXIv/djEvbXAvcHJvZHVj/dHMvVDVBMTdNUEEz/UFQxN1g0N1k3OUQx/NDg5MzkzNjlGUzQw/NDgvdmlld3MvMSx3/aWR0aD0zNzgsaGVp/Z2h0PTM3OCxhcHBl/YXJhbmNlSWQ9MTcs/YmFja2dyb3VuZENv/bG9yPUYyRjJGMix2/ZXJzaW9uPTE0MjA0/NDUxMjAvbGdidC1n/YXktbGVzYmlhbi1w/cmlkZS1wdXp6bGUt/Y29sb3JpLXJlZ2Fs/by1mZWxwYS11b21v/LmpwZw');
            
            return $productList;

        }
        public function getThird(){

            $productList[] = new Product(13, 'Ombrello automatico resistente al vento', 19.99, 'Accessori', 'https://imgs.search.brave.com/3EWP2y6yXgozK17BR_uVFrZxeaWw9D9bdhd6e394zpg/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9kYWls/eWl0YWxpYW53b3Jk/cy5jb20vd3AtY29u/dGVudC91cGxvYWRz/LzIwMjAvMDMvaXRh/bGlhbi13b3JkLWZv/ci11bWJyZWxsYS1v/bWJyZWxsby5qcGc');
            $productList[] = new Product(14, 'Smartphone Android', 899.99, 'Elettronica', 'https://imgs.search.brave.com/cuTV2pGQPkzd7DwlZdx7aR_eR3uKAxxMTeQcBRsapdo/rs:fit:500:0:0/g:ce/aHR0cHM6Ly9mZG4y/LmdzbWFyZW5hLmNv/bS92di9iaWdwaWMv/YXBwbGUtaXBob25l/LTNncy1vZmljLmpw/Zw');
            $productList[] = new Product(15, 'Mouse wireless ergonomico', 29.99, 'Elettronica', 'https://imgs.search.brave.com/DLVqxq4Xsqo3GIpnp0bDGaZzABG7e1U_jGcRNvJMaC8/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5pc3RvY2twaG90/by5jb20vaWQvMTA5/NzM3MzY4MC9waG90/by9nYW1pbmctbW91/c2UuanBnP3M9NjEy/eDYxMiZ3PTAmaz0y/MCZjPVZsNmpIOHlk/eU5ZZ29oYkZnLWxJ/d09UWWRfcV9IOHZf/alZGcGhURW9rbU09');
            $productList[] = new Product(16, 'Borsa termica per picnic', 24.99, 'Accessori', 'https://imgs.search.brave.com/VtT5LFjRHYvXSiWRnlD3LczmnrzYrgJAevwer-5OldQ/rs:fit:860:0:0/g:ce/aHR0cHM6Ly93d3cu/Z2Vjb3Nob3BwaW5n/Lml0L2ltYWdlL2Nh/Y2hlL2NhdGFsb2cv/YWJiaWdsaWFtZW50/b19nYWRnZXQvcHJv/bW9idXNpbmVzcy9R/MjQwNTNCTC01MDB4/NTAwLmpwZw');
            $productList[] = new Product(17, 'Auricolari senza fili con cancellazione del rumore', 129.99, 'Elettronica', 'https://imgs.search.brave.com/9eQOcqub13zGw2SyrE6muyBeiI9I5JRkQ_SkeA_vFV8/rs:fit:860:0:0/g:ce/aHR0cHM6Ly93d3cu/YXZ0cmVuZC5pdC93/cC1jb250ZW50L3Vw/bG9hZHMvMjAxOS8x/MS9taWdsaW9yaS1j/dWZmaWUtd2lyZWxl/c3MtcGVyLXR2LTY5/Nng0NjQuanBn');
            $productList[] = new Product(18, 'Giacca invernale impermeabile', 89.99, 'Abbigliamento', 'https://imgs.search.brave.com/gLF1ys13dDxqPtlMngjNZwfXB0yQchWUX2fg_vHuxzI/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9pbWcw/MS56dGF0Lm5ldC9h/cnRpY2xlL3NwcC1t/ZWRpYS1wMS8wOGQ1/OWQ0M2IyYzA0ODk2/YmFiZTY3Y2U1OGU1/OGZhOC9iYjY0NjYx/MWQ1MGQ0NGM4YTYw/MTdkYWNjNWY1Y2Q4/ZS5qcGc_aW13aWR0/aD0zMDA');
            
            return $productList;

        }
        public function getFourth(){

            $productList[] = new Product(19, 'Set di piatti in ceramica', 59.99, 'Casa e Cucina', 'https://images.pexels.com/photos/46199/plate-cup-colorful-cover-46199.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
            $productList[] = new Product(20, 'Tavolo da pranzo allungabile', 349.99, 'Casa e Cucina', 'https://images.pexels.com/photos/5638639/pexels-photo-5638639.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
            $productList[] = new Product(21, 'Libro di cucina internazionale', 27.99, 'Libri', 'https://images.pexels.com/photos/895222/pexels-photo-895222.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
            $productList[] = new Product(22, 'Puzzle 1000 pezzi', 19.99, 'Giochi', 'https://images.pexels.com/photos/1586950/pexels-photo-1586950.jpeg?auto=compress&cs=tinysrgb&w=600');
            $productList[] = new Product(23, 'Cuffie gaming con microfono', 79.99, 'Elettronica', 'https://images.pexels.com/photos/7046979/pexels-photo-7046979.jpeg?auto=compress&cs=tinysrgb&w=600');
            $productList[] = new Product(24, 'Maglia sportiva traspirante', 39.99, 'Abbigliamento', 'https://images.pexels.com/photos/3768722/pexels-photo-3768722.jpeg?auto=compress&cs=tinysrgb&w=600');
            
            return $productList;

        }
        public function getFifth(){

            $productList[] = new Product(25, 'Asciugacapelli professionale', 69.99, 'Casa e Cucina', 'https://images.pexels.com/photos/3993467/pexels-photo-3993467.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
            $productList[] = new Product(26, 'Sedia ergonomica da ufficio', 149.99, 'Casa e Cucina', 'https://images.pexels.com/photos/1957478/pexels-photo-1957478.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
            $productList[] = new Product(27, 'Romanzo di fantascienza', 22.99, 'Libri', 'https://images.pexels.com/photos/6373291/pexels-photo-6373291.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
            $productList[] = new Product(28, 'Gioco da tavolo di strategia avanzata', 54.99, 'Giochi', 'https://images.pexels.com/photos/776654/pexels-photo-776654.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
            $productList[] = new Product(29, 'Telecamera di sicurezza wireless', 129.99, 'Elettronica', 'https://m.media-amazon.com/images/I/515-V5ib7KL._AC_UF1000,1000_QL80_.jpg');
            $productList[] = new Product(30, 'Cappotto invernale elegante', 79.99, 'Abbigliamento', 'https://images.pexels.com/photos/11542637/pexels-photo-11542637.jpeg?auto=compress&cs=tinysrgb&w=600');
            
            return $productList;

        }
        public function getSixth(){

            $productList[] = new Product(31, 'Set di posate in acciaio inossidabile', 29.99, 'Casa e Cucina', 'https://images.pexels.com/photos/4226878/pexels-photo-4226878.jpeg?auto=compress&cs=tinysrgb&w=600');
            $productList[] = new Product(32, 'Scrivania per computer con vano portaoggetti', 179.99, 'Casa e Cucina', 'https://images.pexels.com/photos/4974914/pexels-photo-4974914.jpeg?auto=compress&cs=tinysrgb&w=600');
            $productList[] = new Product(33, 'Libro di poesie contemporanee', 18.99, 'Libri', 'https://images.pexels.com/photos/17133299/pexels-photo-17133299/free-photo-of-caffe-tazza-relax-cappuccino.jpeg?auto=compress&cs=tinysrgb&w=600');
            $productList[] = new Product(34, 'Puzzle 500 pezzi artistico', 15.99, 'Giochi', 'https://images.pexels.com/photos/3852577/pexels-photo-3852577.jpeg?auto=compress&cs=tinysrgb&w=600');
            $productList[] = new Product(35, 'Lampada da tavolo a LED', 39.99, 'Casa e Cucina', 'https://images.pexels.com/photos/1112598/pexels-photo-1112598.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
            $productList[] = new Product(36, 'Maglietta vintage stampata', 24.99, 'Abbigliamento', 'https://images.pexels.com/photos/16135610/pexels-photo-16135610/free-photo-of-donna-videocamera-vintage-ritratto.jpeg?auto=compress&cs=tinysrgb&w=600');
            
            return $productList;

        }
    }




?>