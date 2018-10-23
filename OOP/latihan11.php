<?php
	class Mobil{
		private $merk;

		public function __construct($merk){
			$this->merk=$merk;
		}
		public function jalan(Manusia $sopir){
			echo $this->merk." siap <br>";
			echo $sopir->identitas() . " siap <br>";
			echo "Berangkat...";
		}
	}
	class Manusia{
		private $nama;

		public function __construct($nama){
			$this->nama=$nama;
		}		
		public function identitas(){
			return $this->nama;
		}
	}
	class Robot{
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
	
	//tidak bisa dijalankan karena method jalan menerima objek manusia
	/*
	$android=new Robot("Android Nougat", "7.1.1");
	$batmobile = new Mobil("Batmobile");
	$batmobile->jalan($android);*/
?>