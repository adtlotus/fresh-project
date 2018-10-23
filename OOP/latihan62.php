<?php
    class Mobil{
        public $merk="Toyota";
        
        public function klakson($merk){
            return "Tin...Tin";
        }
    }
    class MobilSport extends Mobil{
        public $merk="Ferrari";
        
        public function klakson($merk){
            return "Telolet....Telolet";
        }
    }
    
    $ferrari=new MobilSport();
	echo $ferrari->merk();
    echo $ferrari->klakson();
?>
