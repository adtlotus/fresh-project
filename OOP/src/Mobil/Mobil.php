<?php
namespace Dummy\Mobil;

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
?>