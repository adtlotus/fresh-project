<?php
	class DataPemain
	{
		//Buatlah class secara terpisah supaya tidak mengalami error
		private $namaPemain;
		private $namaHero;
		
		public function setNamaPemain($NewNama)
		{
			$this->namaPemain = $NewNama;
		}
		
		public function getNamaPemain()
		{
			return $this->namaPemain;
		}
		
		public function setNamaHero($NewHero)
		{
			$this->namaHero = $NewHero;
		}
		
		public function getNamaHero()
		{
			return $this->namaHero;
		}
		
		public function isiData($nama, $hero)
		{
			$this->setNamaPemain($nama);
			$this->setNamaHero($hero);
		}
		
		public function infoHero()
		{
			echo "Nama = ".$this->getNamaPemain()."<br>";
			echo "Hero = ".$this->getNamaHero()."<br>";
			
		}
	}
	
	/*$hero1 = new DataPemain();
	$hero1->isiData("Yoga", "Archer");
	$hero1->infoHero(); */
?>