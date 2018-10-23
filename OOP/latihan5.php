<?php
	class MobilJepang{
		private $merk;
		public function setMerk($merk){
			$merkJepang =['Honda','Suzuki','Toyota'];
			if(in_array($merk, $merkJepang)){
				$this->merk=$merk;
			}
		}
		
		public function getMerk(){
			return $this->merk;
		}
	}

	$mobil = new MobilJepang();
	$mobil->setMerk('BMW');
	echo 'Merk Mobil adalah '.$mobil->getMerk();
?>