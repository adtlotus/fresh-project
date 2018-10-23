<?php
	namespace Dummy\Mobil;
	class Toyota Extends Mobil {	
		protected $efisiensi=10;
		
		public function getefisiensi(){
            return $this->efisiensi;
        }
	}
?>