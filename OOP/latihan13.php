<?php
    class Mobil{
        //Memasukkan Trait
		use TurboCharger;
		use Nitro;
        
		private $merk;
		private $hp=300;
		
        public function __construct($merk){
            $this->merk=$merk;
        }
		
		public function getMerk(){
            return $this->merk;
        }
		
		public function getHp(){
            return $this->hp;
        }
    }
	
    trait TurboCharger{
        public function turbo($hp){
            $this->hp +=$hp;
        }
    }
	
	trait Nitro{
		private $maksHP=150;
        public function nos(){
            $this->hp +=$this->maksHP;
        }
    }
    
    $nissan = new Mobil('Nissan Turbo');
	echo $nissan->getMerk(). "<br>";
	echo "HP Asli : ".$nissan->getHP()." PK <br>";
	$nissan->turbo(50);
	echo "HP Turbocharged : ".$nissan->getHP()." PK <br>";
	$nissan->nos();
	echo "HP Nitro : ".$nissan->getHP()." PK <br>";
?>
