<?php
	
	class datapemain{
		private $namaPemain;
		private $namaHero;
		
		public function setNamaPemain($newNama){
			$this->namaPemain=$newNama;
		}
		
		public function getNamaPemain(){
			return $this->namaPemain;
		}
		
		public function setNamaHero($newHero){
			$this->namaHero=$newHero;
		}
		
		public function getNamaHero(){
			return $this->namaHero;	
		}
		
		public function IsiData($nama, $hero){
			$this->setNamaPemain($nama);
			$this->setNamaHero($hero);
		}
    
		public function InfoHero(){
			echo "Nama = ".$this->getNamaPemain()."<br>";
			echo "Hero = ".$this->getNamaHero()."<br>";
		}	
	}
	
	/*$heroku = new DataPemain();
	$heroku->IsiData("yoga","Archer");
	$heroku->InfoHero();*/

 ?>