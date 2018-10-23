<?php
	class Mobil{
		public function maju(){
			$maju=$this->injakKopling();
			$maju.=$this->ubahPerseneling();
			$maju.=$this->injakGas();
			$maju.='Broooommmmm.....';
			echo $maju;
		}
		
		private function injakKopling(){
			return "Injak Kopling <br>";
		}
		
		private function ubahPerseneling(){
			return "Ubah perseneling <br>";
		}
		private function injakGas(){
			return "Injak Gas <br>";
		}
	}

	$mobil = new Mobil();
	$mobil->maju();
?>