<?php
	class Batmobil{
		protected $sopir;

		public function __construct(){
			$this->sopir=new Batman();
		}
		public function getSopir(){
            return $this->sopir;
        }
		
	}
	
	class Batman {	
		public function nama($nama){
			return $nama;
		}
	}
	
	$batmobile = new Batmobil();
	echo $batmobile->getSopir()->nama('Batman Manusia Kelelawar');
?>