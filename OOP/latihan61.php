<?php
    class Mobil{
        protected $merk;
        
        public function setMerk($merk){
            $this->merk=$merk;
        }
    }
    class MobilSport extends Mobil{
        public function halo(){
            return " Halo saya adalah ".$this->merk;
        }
    }
    
    $ferrari=new MobilSport();
    $ferrari->setMerk("Ferrari");
    echo $ferrari->halo();
?>
