<?php
	class Mobil{
		private $merk;

		public function __construct($merk){
			$this->merk=$merk;
		}
		public function jalan(Sopir $sopir){
			echo $this->merk." siap <br>";
			echo $sopir->identitas() . " siap <br>";
			echo "Berangkat...";
		}
	}
	
	interface Sopir{
		public function identitas();
	}
	
	class Manusia implements Sopir{
		private $nama;

		public function __construct($nama){
			$this->nama=$nama;
		}		
		public function identitas(){
			return $this->nama;
		}
	}
	class Robot implements Sopir{
		private $nama;
		private $versi;

		public function __construct($nama, $versi){
			$this->nama=$nama;
			$this->versi=$versi;
		}		
		public function identitas(){
			return "$this->nama $this->versi";
		}
	}
	
	$batman=new Manusia("Batman Manusia Kelelawar");
	$batmobile = new Mobil("Batmobile");
	$batmobile->jalan($batman);
	
	$android=new Robot("Android Nougat", "7.1.1");
	$batmobile = new Mobil("Batmobile");
	$batmobile->jalan($android);
?>