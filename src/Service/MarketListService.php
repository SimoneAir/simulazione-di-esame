<?php
    namespace App\Service;

    use App\Entity\MarketList;
    
    class MarketListService {
        public function getArray(){

            $marketList[]= new MarketList(1,'Iper','Via Faustini 4 (BG)', 'mini-market','https://images.unsplash.com/photo-1542838132-92c53300491e?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8bWFya2V0fGVufDB8fDB8fHww');
            $marketList[]= new MarketList(2,'Massì','Via Roma 123 (CS)', 'mini-market','https://images.unsplash.com/photo-1578916171728-46686eac8d58?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fG1hcmtldHxlbnwwfHwwfHx8MA%3D%3D');
            $marketList[]= new MarketList(3,'Magastore del Gusto','Via Caentani (RM)', 'megastore','https://images.unsplash.com/photo-1583258292688-d0213dc5a3a8?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fG1hcmtldHxlbnwwfHwwfHx8MA%3D%3D');
            $marketList[]= new MarketList(4,'Il cesto Verde','Via Aldo Moro (BS)', 'market','https://plus.unsplash.com/premium_photo-1661407806034-4eaf2671322f?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzN8fG1hcmtldHxlbnwwfHwwfHx8MA%3D%3D');
            $marketList[]= new MarketList(5,'Supermercato Aurora','Via Adolfo (BG)', 'megastore','https://plus.unsplash.com/premium_photo-1664202219877-b32fcd5aa731?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8c3VwZXJtYXJrZXR8ZW58MHx8MHx8fDA%3D');
            $marketList[]= new MarketList(6,'Emporio Armando','Via Esposito (BG)', 'market','https://images.unsplash.com/photo-1584680226833-0d680d0a0794?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mjd8fHN1cGVybWFya2V0fGVufDB8fDB8fHww');
            
            return $marketList;

        }
    }




?>