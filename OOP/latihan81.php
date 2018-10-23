<?php
	interface Mobil{
		public function setMerk($merk);
		public function getMerk();
	}
	
	interface KendaraanBeroda{
		public function setRoda($roda);
		public function getRoda();
	}
	
	class bmw implements Mobil, KendaraanBeroda{
		private $merk;
		private $jumlahRoda;
		
		public function setMerk($merk){
			$this->merk=$merk;
		}
		public function getMerk(){
			return $this->merk;
		}
		public function setRoda($roda){
			$this->jumlahRoda=$roda;
		}
		public function getRoda(){
			return $this->jumlahRoda;
		}
	}
	$mobilku=new Bmw();
	$mobilku->setMerk("BMW");
	$mobilku->setRoda(4);
	echo "Mobil ".$mobilku->getMerk()." dengan ".$mobilku->getRoda()." roda.";
?>
