<?php
	interface Mobil{
		public function setMerk($merk);
		public function getMerk();
	}
	class bmw implements Mobil{
		private $merk;
		
		public function setMerk($merk){
			$this->merk=$merk;
		}
		public function getMerk(){
			return $this->merk;
		}
	}
	$mobilku=new Bmw();
	$mobilku->setMerk("BMW");
	echo $mobilku->getMerk();
?>
