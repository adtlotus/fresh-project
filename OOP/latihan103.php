<?php
	class Mobil{
		private $merk;
		private $harga;
	
		public function setMerk(string $merk){
			$this->merk=$merk;
		}
		public function setHarga(float $harga){
			$this->harga=$harga;
		}
	}
	
	$toyota=new Mobil();
	$toyota->setMerk('Toyota');
	$toyota->setHarga(125000000);
	var_dump($toyota);
?>