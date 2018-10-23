<?php
	class Mobil{
		private $merk;
		
		public function setMerk($merk){
			$this->merk=$merk;
		}
		public function getMerk(){
			return $this->merk;
		}
		public function halo(){
			return "Tin...tin...Halo saya adalah ".$this->merk;
		}
	}
	class MobilSport extends Mobil{
		private $nos = "Nitrous Oxide System";
		
		public function ngebut(){
			return "Mengendarai ".$this->getMerk()." dengan ". $this->nos;
		}
	}
	
	$ferrari=new MobilSport();
	$ferrari->setMerk("Ferrari");
	echo $ferrari->ngebut();
?>