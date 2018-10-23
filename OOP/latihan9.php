<?php
	interface BangunDatar {
		public function hitungLuas();	
	}
	
	class Persegi implements BangunDatar {
		private $sisi;
		
		public function __construct(string $sisi){
			$this->sisi=$sisi;
		}
		
		public function hitungLuas(){
			return pow($this->sisi,2);
		}
		
		
	}	
	class Segitiga implements BangunDatar {
		private $alas=4;
		private $tinggi=3;
		
		public function __construct($alas, $tinggi){
			$this->alas=$alas;
			$this->tinggi=$tinggi;
		}
		
		public function hitungLuas(){
			return (0.5*$this->alas*$this->tinggi);
		}
	}
	
	$persegi = new Persegi(4);
	echo "Luas Persegi ".$persegi->hitungLuas()."</br>";
	
	$segitiga = new Segitiga(4,5);
	echo "Luas Segitiga ".$segitiga->hitungLuas()."</br>";
?>
