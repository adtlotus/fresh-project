<?php
	class Calculator{
		protected $mobil;
		
		public function __construct(Mobil $mobil){
			$this->mobil=$mobil;
		}
		public function hitungJarak(){
			$bbm = $this->mobil->getBbm();
			$efisiensi = $this->mobil->getEfisiensi();
			$jarakMaks=$bbm*$efisiensi;
			return $jarakMaks;
        }
	}
	
	abstract class Mobil{
		protected $merk='';
		protected $bbm=0;
		
		public function __construct($merk, $bbm){
			$this->merk=$merk;
			$this->bbm=$bbm;
		}

		public function getMerk(){
            return $this->merk;
        }
		public function getBbm(){
            return $this->bbm;
        }
		
		abstract public function getEfisiensi();
	}
	
	class Toyota Extends Mobil {	
		protected $efisiensi=10;
		
		public function getefisiensi(){
            return $this->efisiensi;
        }
	}
	class Honda Extends Mobil {	
		protected $efisiensi=15;
		
		public function getefisiensi(){
            return $this->efisiensi;
        }
	}
	
	$toyota=new Toyota('Toyota Fortuner',10);
	$calculator= new Calculator($toyota);
	echo "Jarak maksimum ".$toyota->getMerk()." adalah ".$calculator->hitungJarak()." Km <br>";
	
	$honda=new Honda("Honda CR-V",10);
	$calculator= new Calculator($honda);
	echo "Jarak maksimum ".$honda->getMerk()." adalah ".$calculator->hitungJarak()." Km <br>";

?>