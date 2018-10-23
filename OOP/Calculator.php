<?php
	namespace Dummy2;
	use Dummy\Mobil\Mobil;
	
	class Calculator{
		protected $mobil;
		
		public function __construct(Mobil $mobil){
			$this->mobil=$mobil;
		}
		public function hitungJarak(){
			$bbm = $this->mobil->getBbm();
			$efisiensi = $this->mobil->getEfisiensi();
			$jarakMaks=$bbm*$efisiensi*20;
			return $jarakMaks;
        }
	}
?>