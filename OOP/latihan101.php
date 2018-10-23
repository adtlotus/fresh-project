<?php
	class Mobil{
		private $merk;
		private $efisiensi;
		private $volBbm;

	
		public function __construct($merk, $efisiensi, $volBbm){
			$this->merk=$merk;
			$this->efisiensi=$efisiensi;
			$this->volBbm=$volBbm;
		}
		
		public function getMerk(){
			return $this->merk;
		}
		public function getEfisiensi(){
			return $this->efisiensi;
		}
		public function getVolBbm(){
			return $this->volBbm;
		}
	}
	
	class Calculator{
		function hitungJarak(Mobil $mobil){
			$efisiensi=$mobil->getEfisiensi();
			$volBbm=$mobil->getVolBbm();
			$jarakMaks=$efisiensi*$volBbm;
			echo $mobil->getMerk()." : ".$jarakMaks." Km <br>";
		}
	}

	$toyota=new Mobil('Toyota',10,25);
	$call=new Calculator();
	$call->hitungJarak($toyota);
	
	$suzuki=new Mobil('Suzuki',15,20);
	$call2=new Calculator();
	$call2->hitungJarak($suzuki);
?>