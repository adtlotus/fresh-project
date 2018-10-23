<?php
	abstract class BangunDatar {
		Public $NamaBangun;
		
		abstract protected function hitungLuas();
		
		Public function CetakNama(){
			return "Luas ".$this->NamaBangun." = ";
		}
	}
	
	class Persegi extends BangunDatar {
		protected $sisi=4;
		
		public function hitungLuas(){
			return pow($this->sisi,2);
		}
		
		
	}	
	class Segitiga extends BangunDatar {
		protected $alas=4;
		protected $tinggi=3;
		
		public function hitungLuas(){
			return (0.5*$this->alas*$this->tinggi);
		}
	}
	
	$persegi = new Persegi();
	$persegi->NamaBangun="Persegi";
	echo $persegi->CetakNama() . $persegi->hitungLuas() . "<br>";
	
	$segitiga = new Segitiga();
	$segitiga->NamaBangun="Segitiga";
	echo $segitiga->CetakNama() . $segitiga->hitungLuas() . "<br>";
?>
